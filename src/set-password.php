<?php
// TEMPORARY - DELETE AFTER USE
require_once __DIR__ . '/config/init.php';
$hash = password_hash('admin123', PASSWORD_BCRYPT);
$pdo->prepare('UPDATE admins SET password = ? WHERE username = ?')->execute([$hash, 'admin']);
echo 'Password set to admin123. <strong>Delete this file now!</strong>';
