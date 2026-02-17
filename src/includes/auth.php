<?php
/**
 * Attempt login with username and password
 */
function attempt_login(PDO $pdo, string $username, string $password): bool {
    $stmt = $pdo->prepare('SELECT id, password FROM admins WHERE username = ?');
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $username;
        return true;
    }
    return false;
}

/**
 * Check if admin is logged in
 */
function is_logged_in(): bool {
    return !empty($_SESSION['admin_id']);
}

/**
 * Logout admin
 */
function logout(): void {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $p = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
    }
    session_destroy();
}
