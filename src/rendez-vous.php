<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Prendre rendez-vous';
$brands = $pdo->query('SELECT * FROM car_brands ORDER BY nom')->fetchAll();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) { $errors[] = 'Jeton de sécurité invalide.'; }

    $client_nom = trim($_POST['client_nom'] ?? '');
    $client_tel = trim($_POST['client_tel'] ?? '');
    $client_email = trim($_POST['client_email'] ?? '');
    $brand_id = (int)($_POST['brand_id'] ?? 0);
    $model_id = (int)($_POST['model_id'] ?? 0);
    $description = trim($_POST['description'] ?? '');
    $date_rdv = $_POST['date_rdv'] ?? '';

    if ($client_nom === '') $errors[] = 'Le nom est obligatoire.';
    if ($client_tel === '') $errors[] = 'Le téléphone est obligatoire.';
    if (!filter_var($client_email, FILTER_VALIDATE_EMAIL)) $errors[] = 'L\'email n\'est pas valide.';
    if (!$brand_id) $errors[] = 'Veuillez choisir une marque.';
    if (!$model_id) $errors[] = 'Veuillez choisir un modèle.';
    if ($description === '') $errors[] = 'La description est obligatoire.';
    if ($date_rdv === '') $errors[] = 'La date est obligatoire.';

    if ($date_rdv && $date_rdv <= date('Y-m-d')) {
        $errors[] = 'La date doit être dans le futur.';
    }

    if ($date_rdv && empty($errors)) {
        $dow = (int)date('w', strtotime($date_rdv));
        $stmt = $pdo->prepare('SELECT is_closed FROM weekly_closures WHERE day_of_week = ?');
        $stmt->execute([$dow]);
        $wc = $stmt->fetch();
        if ($wc && $wc['is_closed']) {
            $errors[] = 'Ce jour est un jour de fermeture hebdomadaire.';
        }

        $stmt = $pdo->prepare('SELECT COUNT(*) FROM closed_days WHERE date_jour = ?');
        $stmt->execute([$date_rdv]);
        if ($stmt->fetchColumn() > 0) {
            $errors[] = 'Ce jour est un jour de fermeture exceptionnel.';
        }
    }

    if ($brand_id && $model_id && empty($errors)) {
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM car_models WHERE id = ? AND brand_id = ?');
        $stmt->execute([$model_id, $brand_id]);
        if ($stmt->fetchColumn() == 0) {
            $errors[] = 'Le modèle ne correspond pas à la marque sélectionnée.';
        }
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare('INSERT INTO appointments (client_nom, client_tel, client_email, brand_id, model_id, description, date_rdv) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$client_nom, $client_tel, $client_email, $brand_id, $model_id, $description, $date_rdv]);
        redirect('/rendez-vous-confirmation.php');
    }
}

require __DIR__ . '/includes/header.php';
?>

<div class="form-section">
    <h1 class="section-title text-start mb-1">Prendre rendez-vous</h1>
    <div class="section-divider" style="margin-left:0;"></div>
    <p class="text-muted mb-4">Remplissez le formulaire ci-dessous et nous vous recontacterons pour confirmer votre rendez-vous.</p>

    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger"><?= h($e) ?></div>
    <?php endforeach; ?>

    <div class="card form-card">
        <div class="card-body">
            <form method="post">
                <?= csrf_field() ?>

                <div class="form-section-label"><i class="bi bi-person-fill"></i> Vos informations</div>
                <div class="mb-3">
                    <label for="client_nom" class="form-label">Nom complet *</label>
                    <input type="text" class="form-control" id="client_nom" name="client_nom" value="<?= h($client_nom ?? '') ?>" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="client_tel" class="form-label">Téléphone *</label>
                        <input type="tel" class="form-control" id="client_tel" name="client_tel" value="<?= h($client_tel ?? '') ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="client_email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="client_email" name="client_email" value="<?= h($client_email ?? '') ?>" required>
                    </div>
                </div>

                <hr class="form-divider">
                <div class="form-section-label"><i class="bi bi-car-front-fill"></i> Votre véhicule</div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="brand_id" class="form-label">Marque *</label>
                        <select class="form-select" id="brand_id" name="brand_id" required>
                            <option value="">-- Choisir une marque --</option>
                            <?php foreach ($brands as $b): ?>
                                <option value="<?= $b['id'] ?>" <?= ($brand_id ?? 0) == $b['id'] ? 'selected' : '' ?>><?= h($b['nom']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="model_id" class="form-label">Modèle *</label>
                        <select class="form-select" id="model_id" name="model_id" required disabled>
                            <option value="">-- Choisir un modèle --</option>
                        </select>
                    </div>
                </div>

                <hr class="form-divider">
                <div class="form-section-label"><i class="bi bi-calendar-event-fill"></i> Rendez-vous</div>
                <div class="mb-3">
                    <label for="date_rdv" class="form-label">Date souhaitée *</label>
                    <input type="date" class="form-control" id="date_rdv" name="date_rdv" value="<?= h($date_rdv ?? '') ?>" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Description de l'intervention *</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required><?= h($description ?? '') ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg w-100"><i class="bi bi-send me-1"></i> Envoyer la demande</button>
            </form>
        </div>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
