<?php
// TEMPORARY - DELETE AFTER USE
require_once __DIR__ . '/config/init.php';
$hash = password_hash('Ce5t@s2026', PASSWORD_BCRYPT);
$pdo->prepare('UPDATE admins SET password = ? WHERE username = ?')->execute([$hash, 'admin']);
echo 'Password set to admin user. <strong>Delete this file now!</strong>';
