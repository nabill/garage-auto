<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($page_title ?? 'Administration') ?> — Garage Auto Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/admin.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-admin">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="/admin/">
            <span class="admin-brand-icon"><i class="bi bi-gear-fill"></i></span>
            Admin Garage
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/admin/"><i class="bi bi-grid-1x2-fill me-1"></i>Tableau de bord</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/rendez-vous.php"><i class="bi bi-calendar-check me-1"></i>Rendez-vous</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="bi bi-car-front me-1"></i>Véhicules</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/admin/marques.php">Marques</a></li>
                        <li><a class="dropdown-item" href="/admin/modeles.php">Modèles</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="bi bi-clock me-1"></i>Planning</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/admin/jours-fermes.php">Jours fermés</a></li>
                        <li><a class="dropdown-item" href="/admin/jours-hebdo.php">Fermeture hebdo</a></li>
                        <li><a class="dropdown-item" href="/admin/horaires.php">Horaires</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/admin/actualites.php"><i class="bi bi-newspaper me-1"></i>Actualités</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/messages.php"><i class="bi bi-chat-dots me-1"></i>Messages</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>Voir le site</a></li>
                <li class="nav-item"><a class="nav-link nav-link-logout" href="/admin/logout.php"><i class="bi bi-box-arrow-right me-1"></i>Déconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="admin-main">
    <div class="container py-4">
        <?= display_flash() ?>
