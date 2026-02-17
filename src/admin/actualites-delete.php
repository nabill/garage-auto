<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!$id) { redirect('/admin/actualites.php'); }

// Delete image if exists
$stmt = $pdo->prepare('SELECT image FROM news WHERE id = ?');
$stmt->execute([$id]);
$article = $stmt->fetch();

if ($article && $article['image']) {
    $path = BASE_PATH . 'assets/uploads/' . $article['image'];
    if (file_exists($path)) unlink($path);
}

$stmt = $pdo->prepare('DELETE FROM news WHERE id = ?');
$stmt->execute([$id]);
flash('success', 'Actualité supprimée.');
redirect('/admin/actualites.php');
