<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$day = null;
if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM closed_days WHERE id = ?');
    $stmt->execute([$id]);
    $day = $stmt->fetch();
    if (!$day) { flash('danger', 'Jour introuvable.'); redirect('/admin/jours-fermes.php'); }
}

$page_title = $day ? 'Modifier le jour fermé' : 'Ajouter un jour fermé';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) { $errors[] = 'Jeton de sécurité invalide.'; }

    $date_jour = $_POST['date_jour'] ?? '';
    $motif = trim($_POST['motif'] ?? '');

    if ($date_jour === '') $errors[] = 'La date est obligatoire.';

    if (empty($errors)) {
        if ($day) {
            $stmt = $pdo->prepare('UPDATE closed_days SET date_jour = ?, motif = ? WHERE id = ?');
            $stmt->execute([$date_jour, $motif ?: null, $id]);
            flash('success', 'Jour fermé modifié.');
        } else {
            $stmt = $pdo->prepare('INSERT INTO closed_days (date_jour, motif) VALUES (?, ?)');
            $stmt->execute([$date_jour, $motif ?: null]);
            flash('success', 'Jour fermé ajouté.');
        }
        redirect('/admin/jours-fermes.php');
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
                <label for="date_jour" class="form-label">Date</label>
                <input type="date" class="form-control" id="date_jour" name="date_jour" value="<?= h($date_jour ?? $day['date_jour'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label for="motif" class="form-label">Motif (optionnel)</label>
                <input type="text" class="form-control" id="motif" name="motif" value="<?= h($motif ?? $day['motif'] ?? '') ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="/admin/jours-fermes.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
