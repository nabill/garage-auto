<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Rendez-vous';

// Filters
$filter_statut = $_GET['statut'] ?? '';
$filter_date = $_GET['date'] ?? '';

$sql = "SELECT a.*, cb.nom AS marque, cm.nom AS modele
    FROM appointments a
    JOIN car_brands cb ON a.brand_id = cb.id
    JOIN car_models cm ON a.model_id = cm.id
    WHERE 1=1";
$params = [];

if ($filter_statut) {
    $sql .= ' AND a.statut = ?';
    $params[] = $filter_statut;
}
if ($filter_date) {
    $sql .= ' AND a.date_rdv = ?';
    $params[] = $filter_date;
}

$sql .= ' ORDER BY a.date_rdv DESC, a.created_at DESC';
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$appointments = $stmt->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4">Rendez-vous</h1>

<form class="row g-2 mb-4" method="get">
    <div class="col-auto">
        <select name="statut" class="form-select">
            <option value="">Tous les statuts</option>
            <?php foreach (['en_attente','confirme','termine','annule'] as $s): ?>
                <option value="<?= $s ?>" <?= $filter_statut === $s ? 'selected' : '' ?>><?= h($s) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-auto">
        <input type="date" name="date" class="form-control" value="<?= h($filter_date) ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-outline-primary">Filtrer</button>
        <a href="/admin/rendez-vous.php" class="btn btn-outline-secondary">Réinitialiser</a>
    </div>
</form>

<div class="card">
    <div class="card-body">
        <?php if (empty($appointments)): ?>
            <p class="text-muted">Aucun rendez-vous trouvé.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr><th>#</th><th>Date</th><th>Client</th><th>Véhicule</th><th>Statut</th><th></th></tr>
                    </thead>
                    <tbody>
                    <?php foreach ($appointments as $a): ?>
                        <tr>
                            <td><?= $a['id'] ?></td>
                            <td><?= h($a['date_rdv']) ?></td>
                            <td><?= h($a['client_nom']) ?></td>
                            <td><?= h($a['marque'] . ' ' . $a['modele']) ?></td>
                            <td><span class="badge badge-<?= $a['statut'] ?>"><?= h($a['statut']) ?></span></td>
                            <td><a href="/admin/rendez-vous-detail.php?id=<?= $a['id'] ?>" class="btn btn-sm btn-outline-primary">Détail</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
