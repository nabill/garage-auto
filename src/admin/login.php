<?php
require_once __DIR__ . '/../config/init.php';
require_once BASE_PATH . 'includes/auth.php';

if (is_logged_in()) {
    redirect('/admin/');
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) {
        $error = 'Jeton de sécurité invalide.';
    } else {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($username === '' || $password === '') {
            $error = 'Veuillez remplir tous les champs.';
        } elseif (attempt_login($pdo, $username, $password)) {
            flash('success', 'Bienvenue !');
            redirect('/admin/');
        } else {
            $error = 'Identifiants incorrects.';
        }
    }
}

$page_title = 'Connexion';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — Garage Auto Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/admin.css" rel="stylesheet">
</head>
<body class="login-page">
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="login-card card">
            <div class="card-body">
                <div class="login-brand">
                    <span class="admin-brand-icon"><i class="bi bi-gear-fill"></i></span>
                    Administration
                </div>
                <p class="text-center text-muted mb-4">Connectez-vous pour accéder au back-office</p>
                <?= display_flash() ?>
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?= h($error) ?></div>
                <?php endif; ?>
                <form method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nom d'utilisateur</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="username" name="username" value="<?= h($username ?? '') ?>" required autofocus>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2"><i class="bi bi-box-arrow-in-right me-1"></i> Se connecter</button>
                </form>
            </div>
        </div>
    </div>
    <p class="text-center mt-4"><a href="/" class="text-white-50 text-decoration-none"><i class="bi bi-arrow-left me-1"></i>Retour au site</a></p>
</div>
</body>
</html>
