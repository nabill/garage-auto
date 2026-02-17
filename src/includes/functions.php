<?php
/**
 * Escape HTML output
 */
function h(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Redirect to URL
 */
function redirect(string $url): void {
    header("Location: $url");
    exit;
}

/**
 * Set flash message
 */
function flash(string $type, string $message): void {
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

/**
 * Display and clear flash message
 */
function display_flash(): string {
    if (!isset($_SESSION['flash'])) return '';
    $f = $_SESSION['flash'];
    unset($_SESSION['flash']);
    return '<div class="alert alert-' . h($f['type']) . ' alert-dismissible fade show">'
         . h($f['message'])
         . '<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
}

/**
 * Generate CSRF token
 */
function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * CSRF hidden input field
 */
function csrf_field(): string {
    return '<input type="hidden" name="csrf_token" value="' . csrf_token() . '">';
}

/**
 * Verify CSRF token
 */
function csrf_verify(): bool {
    if (empty($_POST['csrf_token']) || empty($_SESSION['csrf_token'])) {
        return false;
    }
    $valid = hash_equals($_SESSION['csrf_token'], $_POST['csrf_token']);
    // Regenerate token after verification
    unset($_SESSION['csrf_token']);
    return $valid;
}

/**
 * Get opening hours from database
 */
function get_opening_hours(PDO $pdo): array {
    $stmt = $pdo->query('SELECT * FROM opening_hours ORDER BY day_of_week');
    return $stmt->fetchAll();
}

/**
 * Day name in French
 */
function day_name(int $day): string {
    $days = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    return $days[$day] ?? '';
}

/**
 * Format time for display
 */
function format_time(?string $time): string {
    if (!$time) return 'Fermé';
    return substr($time, 0, 5);
}
