<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$stmt = $pdo->prepare("SELECT d.*, cb.nom AS marque, cm.nom AS modele
    FROM devis_requests d
    JOIN car_brands cb ON d.brand_id = cb.id
    JOIN car_models cm ON d.model_id = cm.id
    WHERE d.id = ?");
$stmt->execute([$id]);
$devis = $stmt->fetch();

if (!$devis) { flash('danger', 'Demande introuvable.'); redirect('/admin/devis.php'); }

// Fetch selected services
$stmt = $pdo->prepare("SELECT ds.nom FROM devis_request_services drs
    JOIN devis_services ds ON drs.service_id = ds.id
    WHERE drs.devis_id = ? ORDER BY ds.ordre");
$stmt->execute([$id]);
$selected_services = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Update status
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) {
        flash('danger', 'Jeton de sécurité invalide.');
    } else {
        $new_statut = $_POST['statut'] ?? '';
        if (in_array($new_statut, ['en_attente', 'traite', 'annule'])) {
            $pdo->prepare('UPDATE devis_requests SET statut = ? WHERE id = ?')->execute([$new_statut, $id]);
            flash('success', 'Statut mis à jour.');
        }
    }
    redirect('/admin/devis-detail.php?id=' . $id);
}

$page_title = 'Devis #' . $devis['id'];
require __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Demande de devis #<?= $devis['id'] ?></h1>
    <a href="/admin/devis.php" class="btn btn-outline-secondary">Retour à la liste</a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4">Client</dt>
                    <dd class="col-sm-8"><?= h($devis['client_nom']) ?></dd>

                    <dt class="col-sm-4">Téléphone</dt>
                    <dd class="col-sm-8"><a href="tel:<?= h($devis['client_tel']) ?>"><?= h($devis['client_tel']) ?></a></dd>

                    <dt class="col-sm-4">Email</dt>
                    <dd class="col-sm-8"><a href="mailto:<?= h($devis['client_email']) ?>"><?= h($devis['client_email']) ?></a></dd>

                    <dt class="col-sm-4">Véhicule</dt>
                    <dd class="col-sm-8"><?= h($devis['marque'] . ' ' . $devis['modele']) ?></dd>

                    <dt class="col-sm-4">Services</dt>
                    <dd class="col-sm-8">
                        <?php foreach ($selected_services as $sn): ?>
                            <span class="badge bg-light text-dark border me-1 mb-1"><?= h($sn) ?></span>
                        <?php endforeach; ?>
                    </dd>

                    <?php if ($devis['notes']): ?>
                    <dt class="col-sm-4">Notes</dt>
                    <dd class="col-sm-8"><?= nl2br(h($devis['notes'])) ?></dd>
                    <?php endif; ?>

                    <dt class="col-sm-4">Reçu le</dt>
                    <dd class="col-sm-8"><?= h(date('d/m/Y H:i', strtotime($devis['created_at']))) ?></dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><h5 class="mb-0">Statut</h5></div>
            <div class="card-body">
                <p>Statut actuel : <span class="badge badge-<?= $devis['statut'] ?>"><?= h($devis['statut']) ?></span></p>
                <form method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <select name="statut" class="form-select">
                            <?php foreach (['en_attente' => 'En attente', 'traite' => 'Traité', 'annule' => 'Annulé'] as $v => $l): ?>
                                <option value="<?= $v ?>" <?= $devis['statut'] === $v ? 'selected' : '' ?>><?= $l ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
