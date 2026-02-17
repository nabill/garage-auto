<?php
session_start();

// Base path for includes
define('BASE_PATH', dirname(__DIR__) . '/');

require_once BASE_PATH . 'config/database.php';
require_once BASE_PATH . 'includes/functions.php';
