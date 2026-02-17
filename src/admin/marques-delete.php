<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!$id) { redirect('/admin/marques.php'); }

try {
    $stmt = $pdo->prepare('DELETE FROM car_brands WHERE id = ?');
    $stmt->execute([$id]);
    flash('success', 'Marque supprimée.');
} catch (PDOException $e) {
    flash('danger', 'Impossible de supprimer cette marque (des modèles ou RDV y sont liés).');
}

redirect('/admin/marques.php');
