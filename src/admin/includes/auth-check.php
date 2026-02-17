<?php
require_once __DIR__ . '/../../includes/auth.php';

if (!is_logged_in()) {
    flash('warning', 'Veuillez vous connecter.');
    redirect('/admin/login.php');
}
