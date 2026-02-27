<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($page_title ?? 'Garage Auto') ?> — Garage Auto</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/assets/css/style.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="/assets/fonts/Montserrat/css/montserrat.css">
<link rel="stylesheet" href="/assets/fonts/Hind/css/hind.css">
<link rel="stylesheet" href="/assets/fonts/JetBrainsMono/css/jet-brains-mono.css">
<link rel="stylesheet" href="/assets/fonts/Inter/css/inter.css">
    <link href="/assets/css/theme.css" rel="stylesheet">
</head>
<body>
<nav>
    <div class="nav-container">
        <div class="nav-content">
            <div class="left-section">
                <button class="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="logo"><img src="/images/benscope-logo-big.png" alt="" style="height: 55px;cursor:pointer" onclick="window.open('/');"></div>
            </div>
            <div class="menu">
                
            <a class="btn" href="/services/" role="button" data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="btn" href="/services/mecanique-generale.php">Mécanique générale</a></li>
                        <li><a class="dropdown-item" href="/services/entretien-vidange.php">Entretien / Vidange</a></li>
                        <li><a class="dropdown-item" href="/services/pneumatiques.php">Pneumatiques</a></li>
                        <li><a class="dropdown-item" href="/services/diagnostic.php">Diagnostic électronique</a></li>
                        <li><a class="dropdown-item" href="/services/carrosserie-peinture.php">Carrosserie / Peinture</a></li>
                        <li><a class="dropdown-item" href="/services/climatisation.php">Climatisation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/services/">Tous nos services</a></li>
                    </ul>


                <a class="btn" href="/" style="padding: 11px;border-width:0px;font-size:17px;">Accueil</a>
                <a class="btn" style="padding: 11px;border-width:0px;font-size:17px;" href="/tracking">Order tracking</a>
                <a class="btn" style="padding: 11px;border-width:0px;font-size:17px;" href="/contact.php">Contact</a>
            </div>
            <div>
                <button class="btn" style="padding-top: 5px;padding-bottom: 4px;border-width:0px" id="open-cart-button" onclick="log('Open Cart', 'Count : '+document.getElementById('cart-items-count').innerHTML);openCart()">
                    <svg width="30px" height="30px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M800.8 952c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56z m-448 0c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56zM344 792c-42.4 0-79.2-33.6-84-76l-54.4-382.4-31.2-178.4c-2.4-19.2-19.2-35.2-37.6-35.2H96c-13.6 0-24-10.4-24-24s10.4-24 24-24h40.8c42.4 0 80 33.6 85.6 76l31.2 178.4 54.4 383.2C309.6 728 326.4 744 344 744h520c13.6 0 24 10.4 24 24s-10.4 24-24 24H344z m40-128c-12.8 0-23.2-9.6-24-22.4-0.8-6.4 1.6-12.8 5.6-17.6s10.4-8 16-8l434.4-32c19.2 0 36-15.2 38.4-33.6l50.4-288c1.6-13.6-2.4-28-10.4-36.8-5.6-6.4-12.8-9.6-21.6-9.6H320c-13.6 0-24-10.4-24-24s10.4-24 24-24h554.4c22.4 0 42.4 9.6 57.6 25.6 16.8 19.2 24.8 47.2 21.6 75.2l-50.4 288c-4.8 41.6-42.4 74.4-84 74.4l-432 32c-1.6 0.8-2.4 0.8-3.2 0.8z" fill="" /></svg>
                    <div id="cart-items-count" style="position: absolute;
              background-color: #f25822;
              color: white;
              top: 3px;
              right: 3px;
              padding: 2px;
              font-size: 11px;
              border-radius: 3px;
              padding-left: 4px;
              padding-right: 4px;
                display:none">
                        
                    </div>
                </button> 
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div style="min-height: Calc(100vh - 72px);">
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:17px;" href="/">Accueil</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:17px;" href="/tracking">Order tracking</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:17px;" href="/contact.php">Contact</a>
        </div>
    </div>
</nav>

<div style="height: 75px;"></div>
      <div class="d-none d-md-block" style="height: 30px;"></div>


<!--       
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
</nav> -->
<!-- <main class="py-4">
    <div class="container"> -->

<div class="container">
    
 
        <?= display_flash() ?>
