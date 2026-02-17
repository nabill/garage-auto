<?php
require_once __DIR__ . '/../config/init.php';
require_once BASE_PATH . 'includes/auth.php';

logout();
flash('info', 'Vous êtes déconnecté.');
redirect('/admin/login.php');
