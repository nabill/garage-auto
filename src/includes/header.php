<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($page_title ?? 'Garage Auto') ?> — Garage Auto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-main sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <span class="brand-icon"><i class="bi bi-wrench-adjustable-circle"></i></span>
            Garage Auto
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services/" role="button" data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services/mecanique-generale.php"><i class="bi bi-gear-wide-connected me-2"></i>Mécanique générale</a></li>
                        <li><a class="dropdown-item" href="/services/entretien-vidange.php"><i class="bi bi-droplet-half me-2"></i>Entretien / Vidange</a></li>
                        <li><a class="dropdown-item" href="/services/pneumatiques.php"><i class="bi bi-circle me-2"></i>Pneumatiques</a></li>
                        <li><a class="dropdown-item" href="/services/diagnostic.php"><i class="bi bi-cpu me-2"></i>Diagnostic électronique</a></li>
                        <li><a class="dropdown-item" href="/services/carrosserie-peinture.php"><i class="bi bi-brush me-2"></i>Carrosserie / Peinture</a></li>
                        <li><a class="dropdown-item" href="/services/climatisation.php"><i class="bi bi-snow me-2"></i>Climatisation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/services/">Tous nos services</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="nav-link btn-rdv" href="/rendez-vous.php"><i class="bi bi-calendar-check me-1"></i> Prendre RDV</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="py-4">
    <div class="container">
        <?= display_flash() ?>
