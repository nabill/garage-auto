<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$model = null;
if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM car_models WHERE id = ?');
    $stmt->execute([$id]);
    $model = $stmt->fetch();
    if (!$model) { flash('danger', 'Modèle introuvable.'); redirect('/admin/modeles.php'); }
}

$page_title = $model ? 'Modifier le modèle' : 'Ajouter un modèle';
$brands = $pdo->query('SELECT * FROM car_brands ORDER BY nom')->fetchAll();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) { $errors[] = 'Jeton de sécurité invalide.'; }

    $brand_id = (int)($_POST['brand_id'] ?? 0);
    $nom = trim($_POST['nom'] ?? '');

    if (!$brand_id) $errors[] = 'Veuillez choisir une marque.';
    if ($nom === '') $errors[] = 'Le nom est obligatoire.';

    if (empty($errors)) {
        if ($model) {
            $stmt = $pdo->prepare('UPDATE car_models SET brand_id = ?, nom = ? WHERE id = ?');
            $stmt->execute([$brand_id, $nom, $id]);
            flash('success', 'Modèle modifié.');
        } else {
            $stmt = $pdo->prepare('INSERT INTO car_models (brand_id, nom) VALUES (?, ?)');
            $stmt->execute([$brand_id, $nom]);
            flash('success', 'Modèle ajouté.');
        }
        redirect('/admin/modeles.php');
    }
}

require __DIR__ . '/includes/header.php';
?>

<h1><?= h($page_title) ?></h1>

<?php foreach ($errors as $e): ?>
    <div class="alert alert-danger"><?= h($e) ?></div>
<?php endforeach; ?>

<div class="card mt-3">
    <div class="card-body">
        <form method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="brand_id" class="form-label">Marque</label>
                <select class="form-select" id="brand_id" name="brand_id" required>
                    <option value="">-- Choisir --</option>
                    <?php foreach ($brands as $b): ?>
                        <option value="<?= $b['id'] ?>" <?= ($brand_id ?? $model['brand_id'] ?? 0) == $b['id'] ? 'selected' : '' ?>><?= h($b['nom']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du modèle</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= h($nom ?? $model['nom'] ?? '') ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="/admin/modeles.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
