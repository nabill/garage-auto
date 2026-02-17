<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!$id) { redirect('/admin/modeles.php'); }

try {
    $stmt = $pdo->prepare('DELETE FROM car_models WHERE id = ?');
    $stmt->execute([$id]);
    flash('success', 'Modèle supprimé.');
} catch (PDOException $e) {
    flash('danger', 'Impossible de supprimer ce modèle (des RDV y sont liés).');
}

redirect('/admin/modeles.php');
