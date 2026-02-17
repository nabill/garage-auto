<?php
require_once __DIR__ . '/../config/init.php';

header('Content-Type: application/json');

// Specific closed days
$stmt = $pdo->query("SELECT date_jour FROM closed_days WHERE date_jour >= CURDATE() ORDER BY date_jour");
$closed_days = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Weekly closures
$stmt = $pdo->query("SELECT day_of_week FROM weekly_closures WHERE is_closed = 1");
$weekly = array_map('intval', $stmt->fetchAll(PDO::FETCH_COLUMN));

echo json_encode([
    'closed_days' => $closed_days,
    'weekly_closures' => $weekly,
]);
