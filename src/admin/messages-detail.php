<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare('SELECT * FROM contact_messages WHERE id = ?');
$stmt->execute([$id]);
$msg = $stmt->fetch();

if (!$msg) { flash('danger', 'Message introuvable.'); redirect('/admin/messages.php'); }

// Mark as read
if (!$msg['is_read']) {
    $pdo->prepare('UPDATE contact_messages SET is_read = 1 WHERE id = ?')->execute([$id]);
}

$page_title = 'Message de ' . $msg['nom'];
require __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Message #<?= $msg['id'] ?></h1>
    <a href="/admin/messages.php" class="btn btn-outline-secondary">Retour</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row mb-0">
            <dt class="col-sm-3">De</dt>
            <dd class="col-sm-9"><?= h($msg['nom']) ?></dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9"><a href="mailto:<?= h($msg['email']) ?>"><?= h($msg['email']) ?></a></dd>

            <dt class="col-sm-3">Sujet</dt>
            <dd class="col-sm-9"><?= h($msg['sujet']) ?></dd>

            <dt class="col-sm-3">Date</dt>
            <dd class="col-sm-9"><?= h($msg['created_at']) ?></dd>

            <dt class="col-sm-3">Message</dt>
            <dd class="col-sm-9"><?= nl2br(h($msg['message'])) ?></dd>
        </dl>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
