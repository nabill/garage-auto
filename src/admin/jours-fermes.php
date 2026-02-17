<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Jours fermés';
$days = $pdo->query('SELECT * FROM closed_days ORDER BY date_jour DESC')->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Jours fermés</h1>
    <a href="/admin/jours-fermes-form.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Ajouter</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr><th>Date</th><th>Motif</th><th>Actions</th></tr>
            </thead>
            <tbody>
            <?php foreach ($days as $d): ?>
                <tr>
                    <td><?= h($d['date_jour']) ?></td>
                    <td><?= h($d['motif'] ?? '—') ?></td>
                    <td>
                        <a href="/admin/jours-fermes-form.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-outline-primary">Modifier</a>
                        <a href="/admin/jours-fermes-delete.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
