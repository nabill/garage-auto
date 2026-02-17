<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT a.*, cb.nom AS marque, cm.nom AS modele
    FROM appointments a
    JOIN car_brands cb ON a.brand_id = cb.id
    JOIN car_models cm ON a.model_id = cm.id
    WHERE a.id = ?");
$stmt->execute([$id]);
$rdv = $stmt->fetch();

if (!$rdv) { flash('danger', 'Rendez-vous introuvable.'); redirect('/admin/rendez-vous.php'); }

// Update status
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) {
        flash('danger', 'Jeton de sécurité invalide.');
    } else {
        $new_statut = $_POST['statut'] ?? '';
        $valid_statuts = ['en_attente', 'confirme', 'termine', 'annule'];
        if (in_array($new_statut, $valid_statuts)) {
            $stmt = $pdo->prepare('UPDATE appointments SET statut = ? WHERE id = ?');
            $stmt->execute([$new_statut, $id]);
            flash('success', 'Statut mis à jour.');
        }
    }
    redirect('/admin/rendez-vous-detail.php?id=' . $id);
}

$page_title = 'Rendez-vous #' . $rdv['id'];
require __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Rendez-vous #<?= $rdv['id'] ?></h1>
    <a href="/admin/rendez-vous.php" class="btn btn-outline-secondary">Retour à la liste</a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4">Client</dt>
                    <dd class="col-sm-8"><?= h($rdv['client_nom']) ?></dd>

                    <dt class="col-sm-4">Téléphone</dt>
                    <dd class="col-sm-8"><?= h($rdv['client_tel']) ?></dd>

                    <dt class="col-sm-4">Email</dt>
                    <dd class="col-sm-8"><?= h($rdv['client_email']) ?></dd>

                    <dt class="col-sm-4">Véhicule</dt>
                    <dd class="col-sm-8"><?= h($rdv['marque'] . ' ' . $rdv['modele']) ?></dd>

                    <dt class="col-sm-4">Date RDV</dt>
                    <dd class="col-sm-8"><?= h($rdv['date_rdv']) ?></dd>

                    <dt class="col-sm-4">Description</dt>
                    <dd class="col-sm-8"><?= nl2br(h($rdv['description'])) ?></dd>

                    <dt class="col-sm-4">Créé le</dt>
                    <dd class="col-sm-8"><?= h($rdv['created_at']) ?></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><h5 class="mb-0">Statut</h5></div>
            <div class="card-body">
                <p>Statut actuel : <span class="badge badge-<?= $rdv['statut'] ?>"><?= h($rdv['statut']) ?></span></p>
                <form method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <select name="statut" class="form-select">
                            <?php foreach (['en_attente','confirme','termine','annule'] as $s): ?>
                                <option value="<?= $s ?>" <?= $rdv['statut'] === $s ? 'selected' : '' ?>><?= h($s) ?></option>
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
