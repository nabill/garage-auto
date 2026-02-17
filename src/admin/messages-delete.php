<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!$id) { redirect('/admin/messages.php'); }

$stmt = $pdo->prepare('DELETE FROM contact_messages WHERE id = ?');
$stmt->execute([$id]);
flash('success', 'Message supprimé.');
redirect('/admin/messages.php');
