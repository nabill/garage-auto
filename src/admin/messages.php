<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Messages';
$messages = $pdo->query('SELECT * FROM contact_messages ORDER BY created_at DESC')->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4">Messages de contact</h1>

<div class="card">
    <div class="card-body">
        <?php if (empty($messages)): ?>
            <p class="text-muted">Aucun message.</p>
        <?php else: ?>
            <table class="table table-hover">
                <thead>
                    <tr><th></th><th>Date</th><th>Nom</th><th>Sujet</th><th>Actions</th></tr>
                </thead>
                <tbody>
                <?php foreach ($messages as $m): ?>
                    <tr class="<?= $m['is_read'] ? '' : 'fw-bold' ?>">
                        <td>
                            <?php if (!$m['is_read']): ?>
                                <span class="badge bg-danger">Nouveau</span>
                            <?php endif; ?>
                        </td>
                        <td><?= h($m['created_at']) ?></td>
                        <td><?= h($m['nom']) ?></td>
                        <td><?= h($m['sujet']) ?></td>
                        <td>
                            <a href="/admin/messages-detail.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-outline-primary">Lire</a>
                            <a href="/admin/messages-delete.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
