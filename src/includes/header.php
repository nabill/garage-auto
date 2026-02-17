<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($page_title ?? 'Garage Auto') ?> — Garage Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><i class="bi bi-wrench-adjustable-circle"></i> Garage Auto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services/" role="button" data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services/mecanique-generale.php">Mécanique générale</a></li>
                        <li><a class="dropdown-item" href="/services/entretien-vidange.php">Entretien / Vidange</a></li>
                        <li><a class="dropdown-item" href="/services/pneumatiques.php">Pneumatiques</a></li>
                        <li><a class="dropdown-item" href="/services/diagnostic.php">Diagnostic électronique</a></li>
                        <li><a class="dropdown-item" href="/services/carrosserie-peinture.php">Carrosserie / Peinture</a></li>
                        <li><a class="dropdown-item" href="/services/climatisation.php">Climatisation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/services/">Tous nos services</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white ms-2 px-3" href="/rendez-vous.php">Prendre RDV</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="py-4">
    <div class="container">
        <?= display_flash() ?>
