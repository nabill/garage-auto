<?php
require_once __DIR__ . '/config/init.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare('SELECT * FROM news WHERE id = ? AND published_at <= NOW()');
$stmt->execute([$id]);
$article = $stmt->fetch();

if (!$article) {
    flash('danger', 'Actualité introuvable.');
    redirect('/');
}

$page_title = $article['titre'];
require __DIR__ . '/includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item active"><?= h($article['titre']) ?></li>
    </ol>
</nav>

<article class="mb-5">
    <?php if ($article['image']): ?>
        <img src="/assets/uploads/<?= h($article['image']) ?>" class="img-fluid rounded mb-4" alt="<?= h($article['titre']) ?>" style="max-height:400px; width:100%; object-fit:cover;">
    <?php endif; ?>

    <h1><?= h($article['titre']) ?></h1>
    <p class="text-muted"><i class="bi bi-calendar"></i> <?= date('d/m/Y à H:i', strtotime($article['published_at'])) ?></p>

    <div class="lead">
        <?= nl2br(h($article['contenu'])) ?>
    </div>
</article>

<a href="/" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Retour à l'accueil</a>

<?php require __DIR__ . '/includes/footer.php'; ?>
