<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($page_title ?? 'Administration') ?> — Garage Auto Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/admin.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/admin/"><i class="bi bi-gear-fill"></i> Admin Garage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/admin/">Tableau de bord</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/rendez-vous.php">Rendez-vous</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Véhicules</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/admin/marques.php">Marques</a></li>
                        <li><a class="dropdown-item" href="/admin/modeles.php">Modèles</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Planning</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/admin/jours-fermes.php">Jours fermés</a></li>
                        <li><a class="dropdown-item" href="/admin/jours-hebdo.php">Fermeture hebdo</a></li>
                        <li><a class="dropdown-item" href="/admin/horaires.php">Horaires</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/admin/actualites.php">Actualités</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/messages.php">Messages</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/" target="_blank"><i class="bi bi-box-arrow-up-right"></i> Voir le site</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="/admin/logout.php"><i class="bi bi-box-arrow-right"></i> Déconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="container-fluid py-4">
    <div class="container">
        <?= display_flash() ?>
