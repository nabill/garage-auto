<?php
$db_host = getenv('DB_HOST') ?: '94.130.133.23';
$db_name = getenv('DB_NAME') ?: 'mecanocestas_garage_auto';
$db_user = getenv('DB_USER') ?: 'mecanocestas_mecanocestas';
$db_pass = getenv('DB_PASS') ?: 'BaGQ_gu-cG]hN#Lu';

try {
    $pdo = new PDO(
        "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_pass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données.');
}
