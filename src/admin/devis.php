<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Demandes de devis';

$filter_statut = $_GET['statut'] ?? '';
$filter_date   = $_GET['date']   ?? '';
$filter_nom    = trim($_GET['nom'] ?? '');

$sql = "SELECT d.*, cb.nom AS marque, cm.nom AS modele
    FROM devis_requests d
    JOIN car_brands cb ON d.brand_id = cb.id
    JOIN car_models cm ON d.model_id = cm.id
    WHERE 1=1";
$params = [];

if ($filter_statut) { $sql .= ' AND d.statut = ?'; $params[] = $filter_statut; }
if ($filter_date)   { $sql .= ' AND DATE(d.created_at) = ?'; $params[] = $filter_date; }
if ($filter_nom)    { $sql .= ' AND d.client_nom LIKE ?'; $params[] = '%' . $filter_nom . '%'; }

$sql .= ' ORDER BY d.created_at DESC';
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$devis_list = $stmt->fetchAll();

$total   = $pdo->query('SELECT COUNT(*) FROM devis_requests')->fetchColumn();
$pending = $pdo->query("SELECT COUNT(*) FROM devis_requests WHERE statut = 'en_attente'")->fetchColumn();

require __DIR__ . '/includes/header.php';
?>

<div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
    <h1 class="mb-0">Demandes de devis</h1>
    <span class="badge bg-secondary fs-6"><?= $total ?> total</span>
    <?php if ($pending > 0): ?>
        <span class="badge bg-warning text-dark fs-6"><?= $pending ?> en attente</span>
    <?php endif; ?>
</div>

<div class="card mb-3">
    <div class="card-body py-3">
        <form method="get" class="row g-2 align-items-end">
            <div class="col-sm-3">
                <label class="form-label small mb-1">Nom</label>
                <input type="text" name="nom" class="form-control form-control-sm" value="<?= h($filter_nom) ?>" placeholder="Rechercher…">
            </div>
            <div class="col-sm-3">
                <label class="form-label small mb-1">Statut</label>
                <select name="statut" class="form-select form-select-sm">
                    <option value="">Tous</option>
                    <?php foreach (['en_attente' => 'En attente', 'traite' => 'Traité', 'annule' => 'Annulé'] as $v => $l): ?>
                        <option value="<?= $v ?>" <?= $filter_statut === $v ? 'selected' : '' ?>><?= $l ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-sm-3">
                <label class="form-label small mb-1">Date</label>
                <input type="date" name="date" class="form-control form-control-sm" value="<?= h($filter_date) ?>">
            </div>
            <div class="col-sm-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary btn-sm">Filtrer</button>
                <a href="/admin/devis.php" class="btn btn-outline-secondary btn-sm">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php if (empty($devis_list)): ?>
            <p class="text-muted">Aucune demande trouvée.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr><th>#</th><th>Date</th><th>Client</th><th>Véhicule</th><th>Statut</th><th></th></tr>
                    </thead>
                    <tbody>
                    <?php foreach ($devis_list as $d): ?>
                        <tr>
                            <td><?= $d['id'] ?></td>
                            <td><?= h(date('d/m/Y H:i', strtotime($d['created_at']))) ?></td>
                            <td><?= h($d['client_nom']) ?></td>
                            <td><?= h($d['marque'] . ' ' . $d['modele']) ?></td>
                            <td><span class="badge badge-<?= $d['statut'] ?>"><?= h($d['statut']) ?></span></td>
                            <td><a href="/admin/devis-detail.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-outline-primary">Détail</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
