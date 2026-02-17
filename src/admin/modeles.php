<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Modèles';

$filter_brand = isset($_GET['brand_id']) ? (int)$_GET['brand_id'] : 0;
$brands = $pdo->query('SELECT * FROM car_brands ORDER BY nom')->fetchAll();

$sql = 'SELECT cm.*, cb.nom AS marque FROM car_models cm JOIN car_brands cb ON cm.brand_id = cb.id';
$params = [];
if ($filter_brand) {
    $sql .= ' WHERE cm.brand_id = ?';
    $params[] = $filter_brand;
}
$sql .= ' ORDER BY cb.nom, cm.nom';
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$models = $stmt->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Modèles</h1>
    <a href="/admin/modeles-form.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Ajouter</a>
</div>

<form class="row g-2 mb-3" method="get">
    <div class="col-auto">
        <select name="brand_id" class="form-select" onchange="this.form.submit()">
            <option value="">Toutes les marques</option>
            <?php foreach ($brands as $b): ?>
                <option value="<?= $b['id'] ?>" <?= $filter_brand == $b['id'] ? 'selected' : '' ?>><?= h($b['nom']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</form>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr><th>ID</th><th>Marque</th><th>Modèle</th><th>Actions</th></tr>
            </thead>
            <tbody>
            <?php foreach ($models as $m): ?>
                <tr>
                    <td><?= $m['id'] ?></td>
                    <td><?= h($m['marque']) ?></td>
                    <td><?= h($m['nom']) ?></td>
                    <td>
                        <a href="/admin/modeles-form.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-outline-primary">Modifier</a>
                        <a href="/admin/modeles-delete.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ce modèle ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
