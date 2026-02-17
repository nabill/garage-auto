<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!$id) { redirect('/admin/jours-fermes.php'); }

$stmt = $pdo->prepare('DELETE FROM closed_days WHERE id = ?');
$stmt->execute([$id]);
flash('success', 'Jour fermé supprimé.');
redirect('/admin/jours-fermes.php');
