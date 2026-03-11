<?php
session_start();

// Base path for includes
define('BASE_PATH', dirname(__DIR__) . '/');

// Cache-busting version — bump this string when deploying static asset changes
define('APP_VERSION', '1.0.1');

require_once '/home/mecanocestas/private/database.php';
require_once BASE_PATH . 'includes/functions.php';
