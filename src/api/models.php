<?php
require_once __DIR__ . '/../config/init.php';

header('Content-Type: application/json');

$brand_id = isset($_GET['brand_id']) ? (int)$_GET['brand_id'] : 0;

if (!$brand_id) {
    echo json_encode([]);
    exit;
}

$stmt = $pdo->prepare('SELECT id, nom FROM car_models WHERE brand_id = ? ORDER BY nom');
$stmt->execute([$brand_id]);
echo json_encode($stmt->fetchAll());
