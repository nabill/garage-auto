<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Messages';

// Filters
$filter_nom   = trim($_GET['nom']   ?? '');
$filter_sujet = trim($_GET['sujet'] ?? '');
$filter_date  = trim($_GET['date']  ?? '');

$where  = [];
$params = [];

if ($filter_nom !== '') {
    $where[]  = 'nom LIKE ?';
    $params[] = '%' . $filter_nom . '%';
}
if ($filter_sujet !== '') {
    $where[]  = 'sujet LIKE ?';
    $params[] = '%' . $filter_sujet . '%';
}
if ($filter_date !== '') {
    $where[]  = 'DATE(created_at) = ?';
    $params[] = $filter_date;
}

$sql = 'SELECT * FROM contact_messages';
if ($where) $sql .= ' WHERE ' . implode(' AND ', $where);
$sql .= ' ORDER BY created_at DESC';

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$messages = $stmt->fetchAll();

$total     = $pdo->query('SELECT COUNT(*) FROM contact_messages')->fetchColumn();
$unread    = $pdo->query('SELECT COUNT(*) FROM contact_messages WHERE is_read = 0')->fetchColumn();
$filtered  = count($messages);

require __DIR__ . '/includes/header.php';
?>

<div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
    <h1 class="mb-0">Messages de contact</h1>
    <span class="badge bg-secondary fs-6"><?= $total ?> total</span>
    <?php if ($unread > 0): ?>
        <span class="badge bg-danger fs-6"><?= $unread ?> non lu<?= $unread > 1 ? 's' : '' ?></span>
    <?php endif; ?>
</div>

<!-- Filters -->
<div class="card mb-3">
    <div class="card-body py-3">
        <form method="get" class="row g-2 align-items-end">
            <div class="col-sm-3">
                <label class="form-label small mb-1">Nom</label>
                <input type="text" name="nom" class="form-control form-control-sm" value="<?= h($filter_nom) ?>" placeholder="Rechercher…">
            </div>
            <div class="col-sm-3">
                <label class="form-label small mb-1">Sujet</label>
                <input type="text" name="sujet" class="form-control form-control-sm" value="<?= h($filter_sujet) ?>" placeholder="Rechercher…">
            </div>
            <div class="col-sm-3">
                <label class="form-label small mb-1">Date</label>
                <input type="date" name="date" class="form-control form-control-sm" value="<?= h($filter_date) ?>">
            </div>
            <div class="col-sm-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary btn-sm">Filtrer</button>
                <a href="/admin/messages.php" class="btn btn-outline-secondary btn-sm">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php if (empty($messages)): ?>
            <p class="text-muted">Aucun message<?= ($filter_nom || $filter_sujet || $filter_date) ? ' pour ces filtres' : '' ?>.</p>
        <?php else: ?>
            <?php if ($filter_nom || $filter_sujet || $filter_date): ?>
                <p class="text-muted small mb-2"><?= $filtered ?> résultat<?= $filtered > 1 ? 's' : '' ?></p>
            <?php endif; ?>
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
                        <td><?= h(date('d/m/Y H:i', strtotime($m['created_at']))) ?></td>
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
