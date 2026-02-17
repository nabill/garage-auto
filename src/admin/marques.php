<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Marques';
$brands = $pdo->query('SELECT * FROM car_brands ORDER BY nom')->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Marques</h1>
    <a href="/admin/marques-form.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Ajouter</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr><th>ID</th><th>Nom</th><th>Date création</th><th>Actions</th></tr>
            </thead>
            <tbody>
            <?php foreach ($brands as $b): ?>
                <tr>
                    <td><?= $b['id'] ?></td>
                    <td><?= h($b['nom']) ?></td>
                    <td><?= h($b['created_at']) ?></td>
                    <td>
                        <a href="/admin/marques-form.php?id=<?= $b['id'] ?>" class="btn btn-sm btn-outline-primary">Modifier</a>
                        <a href="/admin/marques-delete.php?id=<?= $b['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer cette marque ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
