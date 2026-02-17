<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$article = null;
if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM news WHERE id = ?');
    $stmt->execute([$id]);
    $article = $stmt->fetch();
    if (!$article) { flash('danger', 'Actualité introuvable.'); redirect('/admin/actualites.php'); }
}

$page_title = $article ? 'Modifier l\'actualité' : 'Ajouter une actualité';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) { $errors[] = 'Jeton de sécurité invalide.'; }

    $titre = trim($_POST['titre'] ?? '');
    $contenu = trim($_POST['contenu'] ?? '');
    $published_at = $_POST['published_at'] ?? '';
    $image_name = $article['image'] ?? null;

    if ($titre === '') $errors[] = 'Le titre est obligatoire.';
    if ($contenu === '') $errors[] = 'Le contenu est obligatoire.';
    if ($published_at === '') $errors[] = 'La date de publication est obligatoire.';

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $file = $_FILES['image'];
        $allowed_types = ['image/jpeg', 'image/png', 'image/webp'];
        $max_size = 2 * 1024 * 1024; // 2 Mo

        if (!in_array($file['type'], $allowed_types)) {
            $errors[] = 'Format d\'image non autorisé (JPEG, PNG ou WebP uniquement).';
        } elseif ($file['size'] > $max_size) {
            $errors[] = 'L\'image ne doit pas dépasser 2 Mo.';
        } elseif ($file['error'] !== UPLOAD_ERR_OK) {
            $errors[] = 'Erreur lors de l\'upload de l\'image.';
        } else {
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $image_name = uniqid('news_') . '.' . strtolower($ext);
            $dest = BASE_PATH . 'assets/uploads/' . $image_name;
            if (!move_uploaded_file($file['tmp_name'], $dest)) {
                $errors[] = 'Impossible de sauvegarder l\'image.';
                $image_name = $article['image'] ?? null;
            } else {
                // Delete old image
                if ($article && $article['image']) {
                    $old = BASE_PATH . 'assets/uploads/' . $article['image'];
                    if (file_exists($old)) unlink($old);
                }
            }
        }
    }

    // Remove image
    if (!empty($_POST['remove_image']) && !$_FILES['image']['name']) {
        if ($article && $article['image']) {
            $old = BASE_PATH . 'assets/uploads/' . $article['image'];
            if (file_exists($old)) unlink($old);
        }
        $image_name = null;
    }

    if (empty($errors)) {
        if ($article) {
            $stmt = $pdo->prepare('UPDATE news SET titre = ?, contenu = ?, image = ?, published_at = ? WHERE id = ?');
            $stmt->execute([$titre, $contenu, $image_name, $published_at, $id]);
            flash('success', 'Actualité modifiée.');
        } else {
            $stmt = $pdo->prepare('INSERT INTO news (titre, contenu, image, published_at) VALUES (?, ?, ?, ?)');
            $stmt->execute([$titre, $contenu, $image_name, $published_at]);
            flash('success', 'Actualité ajoutée.');
        }
        redirect('/admin/actualites.php');
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
        <form method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="<?= h($titre ?? $article['titre'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label for="contenu" class="form-label">Contenu</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="8" required><?= h($contenu ?? $article['contenu'] ?? '') ?></textarea>
            </div>
            <div class="mb-3">
                <label for="published_at" class="form-label">Date de publication</label>
                <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="<?= h($published_at ?? ($article ? str_replace(' ', 'T', $article['published_at']) : date('Y-m-d\TH:i'))) ?>" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (JPEG, PNG, WebP — max 2 Mo)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/jpeg,image/png,image/webp">
                <?php if ($article && $article['image']): ?>
                    <div class="mt-2">
                        <img src="/assets/uploads/<?= h($article['image']) ?>" alt="" style="max-height:150px;" class="rounded">
                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" name="remove_image" value="1" id="remove_image">
                            <label class="form-check-label" for="remove_image">Supprimer l'image</label>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="/admin/actualites.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
