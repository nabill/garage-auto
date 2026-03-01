<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Climatisation';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Climatisation</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-thermometer-snow service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Confort & sécurité</span>
        <h1 class="mb-1">Climatisation automobile</h1>
        <p class="lead text-muted">Diagnostic complet, recharge et entretien professionnel de votre système de climatisation.</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">Une climatisation automobile ne sert pas uniquement à rafraîchir l'habitacle. Elle contribue au confort, à la sécurité (désembuage des vitres) et à la qualité de l'air que vous respirez.</p>
        <p>Avec le temps, le système perd naturellement du gaz réfrigérant (jusqu'à 10 % par an). Un entretien régulier est indispensable pour maintenir son efficacité et éviter une panne coûteuse.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-wind mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Diagnostic offert</h5>
                <p class="text-muted small mb-3">Nous diagnostiquons votre climatisation avant toute intervention pour vous proposer la solution adaptée.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <img src="/assets/img/services/climatisation.jpg" alt="Climatisation automobile" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<!-- Quand entretenir + Signes -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Quand entretenir sa climatisation ?</h2>
        <p>Nous recommandons :</p>
        <div class="d-flex flex-column gap-2 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-calendar3 flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Tous les 2 ans</p>
                        <p class="mb-0 text-muted small">Recharge préventive du gaz réfrigérant</p>
                    </div>
                </div>
            </div>
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-fan flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Tous les ans</p>
                        <p class="mb-0 text-muted small">Remplacement du filtre habitacle (pollen)</p>
                    </div>
                </div>
            </div>
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-shield-check flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Avant l'été</p>
                        <p class="mb-0 text-muted small">Contrôle complet pour rouler sereinement</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Signes d'un problème de climatisation</h2>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>L'air soufflé n'est plus suffisamment froid</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Le temps de refroidissement est anormalement long</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des mauvaises odeurs persistent dans l'habitacle</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>La buée persiste malgré la climatisation</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Le compresseur fait du bruit en s'enclenchant</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Consommation de carburant en hausse</li>
        </ul>
        <div class="card border-0 border-start border-4 border-warning bg-light">
            <div class="card-body py-3">
                <p class="mb-0 small text-muted"><i class="bi bi-exclamation-circle me-1 text-warning"></i>Un circuit sous-chargé sollicite excessivement le compresseur et peut provoquer sa casse prématurée.</p>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Nos prestations -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-list-check me-2" style="color:#ff5d17;"></i>Nos prestations</h2>
    </div>
    <?php
    $prestations = [
        ["bi-cpu",                  "Diagnostic complet",       "Contrôle électronique du circuit de climatisation, lecture des pressions, températures et défauts"],
        ["bi-arrow-repeat",         "Recharge de gaz",          "Récupération, recyclage et recharge du gaz réfrigérant R134a ou R1234yf selon votre véhicule"],
        ["bi-search",               "Détection de fuites",      "Recherche et localisation précise des fuites à l'aide de détecteurs ultrasoniques et UV"],
        ["bi-tools",                "Réparation de fuites",      "Remplacement des joints, raccords ou composants défaillants du circuit"],
        ["bi-gear",                 "Compresseur",              "Diagnostic, réparation ou remplacement du compresseur de climatisation"],
        ["bi-fan",                  "Filtre habitacle",         "Remplacement du filtre à pollen pour un air sain, sans allergènes ni bactéries"],
        ["bi-stars",                "Désinfection circuit",     "Traitement antibactérien du circuit d'air pour éliminer les mauvaises odeurs et les micro-organismes"],
        ["bi-thermometer-half",     "Condenseur & évaporateur", "Contrôle et remplacement du condenseur, de l'évaporateur et du déshydrateur"],
    ];
    foreach ($prestations as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2"><?= $titre ?></h6>
                <p class="text-muted small mb-0"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<hr class="my-5">

<!-- Une clim bien entretenue + Gaz réfrigérant -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-check-circle me-2" style="color:#ff5d17;"></i>Les bénéfices d'une climatisation entretenue</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Refroidissement optimal de l'habitacle</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Désembuage efficace pour une conduite sécurisée</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Air sain et sans odeurs désagréables</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Longévité accrue du compresseur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Consommation de carburant maîtrisée</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Confort constant toute l'année</li>
        </ul>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-droplet-half me-2" style="color:#ff5d17;"></i>R134a ou R1234yf ?</h2>
        <p>Le type de gaz réfrigérant dépend de votre véhicule :</p>
        <div class="card border-0 shadow-sm mb-2">
            <div class="card-body d-flex gap-3 align-items-center py-3">
                <span class="badge bg-secondary rounded-pill px-3 flex-shrink-0">R134a</span>
                <p class="mb-0 text-muted small">Utilisé sur la majorité des véhicules produits avant 2017</p>
            </div>
        </div>
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-body d-flex gap-3 align-items-center py-3">
                <span class="badge bg-primary rounded-pill px-3 flex-shrink-0">R1234yf</span>
                <p class="mb-0 text-muted small">Requis sur les véhicules récents (depuis 2017), plus écologique</p>
            </div>
        </div>
        <p class="text-muted small">Nous disposons des équipements homologués pour travailler sur les deux types de fluides réfrigérants.</p>
    </div>
</div>

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-thermometer-snow mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Voyagez au frais, en toute sérénité</h2>
        <p class="lead opacity-75 mb-4">Ne laissez pas votre climatisation se dégrader. Un entretien régulier évite les pannes coûteuses et garantit votre confort toute l'année.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="/rendez-vous.php" class="btn btn-lg fw-semibold" style="background-color:#ff5d17;color:#fff;">
                <i class="bi bi-calendar-plus me-2"></i>Prendre rendez-vous
            </a>
            <a href="/contact.php" class="btn btn-lg btn-outline-light fw-semibold">
                <i class="bi bi-telephone me-2"></i>Nous appeler
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
