<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Diagnostic électronique';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Diagnostic électronique</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-cpu service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Toutes marques</span>
        <h1 class="mb-1">Diagnostic électronique</h1>
        <p class="lead text-muted">Identification précise et rapide de toutes les pannes grâce à notre équipement de dernière génération.</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">Un voyant allumé, une panne incompréhensible, un comportement anormal de votre véhicule ? Le diagnostic électronique est la première étape incontournable pour identifier la cause exacte du problème.</p>
        <p>Nos techniciens utilisent des outils de diagnostic professionnels compatibles avec toutes les marques et tous les modèles. En quelques minutes, nous lisons l'ensemble des calculateurs de votre véhicule et identifions précisément l'origine de la panne.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous pour un diagnostic
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-activity mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Diagnostic rapide</h5>
                <p class="text-muted small mb-3">Résultat en quelques minutes. Rapport complet remis après intervention.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <img src="/assets/img/services/diagnostic.jpg" alt="Diagnostic électronique" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<!-- Quand faire un diagnostic -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Quand faire un diagnostic ?</h2>
        <p>Ne tardez pas à consulter si vous observez :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un voyant moteur, ABS, ESP ou airbag allumé</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une consommation de carburant anormalement élevée</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des ratés moteur ou perte de puissance</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un comportement instable (freinage, direction, boîte)</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un démarrage difficile ou des coupures moteur</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>La préparation à un contrôle technique</li>
        </ul>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <div class="card border-0 bg-light h-100">
            <div class="card-body p-4">
                <h5 class="mb-3"><i class="bi bi-lightbulb me-2" style="color:#ff5d17;"></i>Pourquoi ne pas ignorer un voyant ?</h5>
                <p class="text-muted">Un voyant allumé peut signaler un défaut mineur comme un problème majeur. Ignorer l'alerte peut :</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>Aggraver une panne et multiplier les coûts</li>
                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>Entraîner un refus au contrôle technique</li>
                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>Compromettre votre sécurité sur la route</li>
                </ul>
                <a href="/rendez-vous.php" class="btn btn-sm btn-primary mt-2">
                    <i class="bi bi-search me-1"></i>Faire diagnostiquer mon véhicule
                </a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Nos prestations -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-list-check me-2" style="color:#ff5d17;"></i>Nos prestations de diagnostic</h2>
        <p class="text-muted">Nous intervenons sur l'ensemble des systèmes électroniques de votre véhicule, toutes marques confondues.</p>
    </div>
    <?php
    $prestations = [
        ["bi-file-earmark-code",    "Lecture & effacement",      "Lecture et effacement des codes défaut (DTC) sur tous les calculateurs"],
        ["bi-engine",               "Diagnostic moteur",          "Analyse complète du calculateur moteur : injection, allumage, dépollution"],
        ["bi-slash-circle",         "ABS & ESP",                  "Diagnostic des systèmes de freinage et de stabilité électronique"],
        ["bi-person-fill-exclamation","Airbags & sécurité",       "Contrôle du calculateur airbag et des ceintures de sécurité pyrotechniques"],
        ["bi-gear-wide-connected",  "Boîte automatique",          "Diagnostic et paramétrage des boîtes automatiques et robotisées"],
        ["bi-broadcast",            "Reprogrammation",            "Mise à jour et reprogrammation des calculateurs constructeur"],
        ["bi-thermometer-half",     "Climatisation",              "Diagnostic du circuit de climatisation et du module de gestion thermique"],
        ["bi-battery-half",         "Électricité & charge",       "Vérification du circuit de charge, batterie et réseau de bord"],
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

<!-- Comment ça se passe -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-gear me-2" style="color:#ff5d17;"></i>Comment se déroule le diagnostic ?</h2>
    </div>
    <?php
    $etapes = [
        ["1", "bi-plug",                 "Connexion",      "Branchement de la valise de diagnostic sur le port OBD de votre véhicule"],
        ["2", "bi-download",             "Lecture",        "Interrogation de tous les calculateurs et extraction des codes défaut"],
        ["3", "bi-search",               "Analyse",        "Interprétation des données par notre technicien et identification de la cause"],
        ["4", "bi-file-earmark-text",    "Rapport",        "Remise d'un rapport détaillé avec les résultats et les solutions recommandées"],
        ["5", "bi-wrench-adjustable",    "Intervention",   "Réparation réalisée avec votre accord, sur la base du devis établi"],
    ];
    foreach ($etapes as [$num, $icon, $titre, $desc]): ?>
    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex gap-3 align-items-start p-4">
                <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width:2.2rem;height:2.2rem;background:#ff5d17;font-size:.9rem;">
                    <?= $num ?>
                </div>
                <div>
                    <h6 class="mb-1 fw-semibold"><?= $titre ?></h6>
                    <p class="mb-0 text-muted small"><?= $desc ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<hr class="my-5">

<!-- Nos engagements -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-patch-check me-2" style="color:#ff5d17;"></i>Nos engagements</h2>
    </div>
    <?php
    $engagements = [
        ["bi-tools",             "Équipement professionnel",  "Valise de diagnostic dernière génération, compatible toutes marques"],
        ["bi-person-check",      "Techniciens qualifiés",     "Personnel formé aux dernières technologies embarquées"],
        ["bi-file-earmark-check","Rapport transparent",       "Résultats clairs, expliqués sans jargon technique"],
        ["bi-hand-thumbs-up",    "Aucune surprise",           "Aucune réparation effectuée sans votre accord préalable"],
    ];
    foreach ($engagements as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
        <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2"><?= $titre ?></h6>
                <p class="text-muted small mb-0"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-cpu mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Un voyant allumé ? Ne tardez pas.</h2>
        <p class="lead opacity-75 mb-4">Plus tôt le diagnostic est réalisé, plus vite le problème est résolu — et moins la réparation coûte cher.</p>
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
