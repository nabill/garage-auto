<?php
/**
 * Run this script once after importing schema.sql and seed.sql
 * to set the admin password properly.
 *
 * Usage: php sql/setup-admin.php
 */
require_once __DIR__ . '/../config/database.php';

$password = 'admin123';
$hash = password_hash($password, PASSWORD_BCRYPT);

$stmt = $pdo->prepare('UPDATE admins SET password = ? WHERE username = ?');
$stmt->execute([$hash, 'admin']);

echo "Admin password set successfully.\n";
echo "Username: admin\n";
echo "Password: $password\n";
echo "Hash: $hash\n";
