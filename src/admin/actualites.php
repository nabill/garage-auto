<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Actualités';
$news = $pdo->query('SELECT * FROM news ORDER BY published_at DESC')->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Actualités</h1>
    <a href="/admin/actualites-form.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Ajouter</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr><th>Image</th><th>Titre</th><th>Date publication</th><th>Actions</th></tr>
            </thead>
            <tbody>
            <?php foreach ($news as $n): ?>
                <tr>
                    <td>
                        <?php if ($n['image']): ?>
                            <img src="/assets/uploads/<?= h($n['image']) ?>" alt="" style="height:40px;">
                        <?php else: ?>
                            <span class="text-muted">—</span>
                        <?php endif; ?>
                    </td>
                    <td><?= h($n['titre']) ?></td>
                    <td><?= h($n['published_at']) ?></td>
                    <td>
                        <a href="/admin/actualites-form.php?id=<?= $n['id'] ?>" class="btn btn-sm btn-outline-primary">Modifier</a>
                        <a href="/admin/actualites-delete.php?id=<?= $n['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
