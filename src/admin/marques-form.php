<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$brand = null;
if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM car_brands WHERE id = ?');
    $stmt->execute([$id]);
    $brand = $stmt->fetch();
    if (!$brand) { flash('danger', 'Marque introuvable.'); redirect('/admin/marques.php'); }
}

$page_title = $brand ? 'Modifier la marque' : 'Ajouter une marque';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) { $errors[] = 'Jeton de sécurité invalide.'; }

    $nom = trim($_POST['nom'] ?? '');
    if ($nom === '') $errors[] = 'Le nom est obligatoire.';

    if (empty($errors)) {
        if ($brand) {
            $stmt = $pdo->prepare('UPDATE car_brands SET nom = ? WHERE id = ?');
            $stmt->execute([$nom, $id]);
            flash('success', 'Marque modifiée.');
        } else {
            $stmt = $pdo->prepare('INSERT INTO car_brands (nom) VALUES (?)');
            $stmt->execute([$nom]);
            flash('success', 'Marque ajoutée.');
        }
        redirect('/admin/marques.php');
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
                <label for="nom" class="form-label">Nom de la marque</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= h($nom ?? $brand['nom'] ?? '') ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="/admin/marques.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
