<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Pneumatiques';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Pneumatiques</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-circle service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Toutes dimensions</span>
        <h1 class="mb-1">Pneumatiques</h1>
        <p class="lead text-muted">Vente, montage, équilibrage et entretien — un service complet pour vos pneus.</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">Les pneus sont le seul point de contact entre votre véhicule et la route. Leur état impacte directement votre sécurité, votre confort et votre consommation de carburant.</p>
        <p>Nous proposons un large choix de pneumatiques toutes marques, toutes dimensions, pour tous types de véhicules : citadines, berlines, SUV, utilitaires. Montage et équilibrage inclus.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-shield-fill-check mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Contrôle gratuit</h5>
                <p class="text-muted small mb-3">Lors de votre passage, nous vérifions gratuitement la pression et l'usure de vos pneus.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Quand changer ses pneus -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Quand changer ses pneus ?</h2>
        <p>Un remplacement s'impose si vous constatez :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une bande de roulement usée (témoin d'usure atteint)</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des craquelures, coupures ou déformations sur le flanc</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des vibrations ou un bruit de roulement anormal</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une perte de pression fréquente</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un pneu âgé de plus de 5 à 7 ans (même peu usé)</li>
        </ul>
        <p class="text-muted small">La profondeur minimale légale est de <strong>1,6 mm</strong>. Nous recommandons le remplacement dès 3 mm pour une adhérence optimale.</p>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-layers me-2" style="color:#ff5d17;"></i>Quel type de pneu choisir ?</h2>
        <?php
        $types = [
            ["bg-warning text-dark",  "bi-sun",        "Été",        "Optimisé pour les températures > 7°C. Meilleure adhérence sur sol sec et mouillé."],
            ["bg-primary",            "bi-snow",       "Hiver",      "Conçu pour températures < 7°C, neige et verglas. Obligatoire en zones montagneuses."],
            ["bg-success",            "bi-cloud-sun",  "4 saisons",  "Compromis toute l'année, idéal pour les régions tempérées à faible enneigement."],
        ];
        foreach ($types as [$bg, $icon, $nom, $desc]): ?>
        <div class="card border-0 shadow-sm mb-2">
            <div class="card-body d-flex gap-3 align-items-center py-3">
                <span class="badge <?= $bg ?> rounded-pill px-3 py-2 flex-shrink-0">
                    <i class="bi <?= $icon ?>"></i> <?= $nom ?>
                </span>
                <p class="mb-0 text-muted small"><?= $desc ?></p>
            </div>
        </div>
        <?php endforeach; ?>
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
        ["bi-cart3",                "Vente",                    "Large choix de pneumatiques toutes marques (Michelin, Continental, Bridgestone, Hankook…)"],
        ["bi-wrench-adjustable",    "Montage",                  "Démontage et montage professionnel sur toutes jantes, avec vérification de la valve"],
        ["bi-speedometer2",         "Équilibrage",              "Équilibrage dynamique pour éliminer les vibrations et préserver vos amortisseurs"],
        ["bi-arrow-repeat",         "Permutation",              "Rotation des pneus pour homogénéiser l'usure et prolonger leur durée de vie"],
        ["bi-bandaid",              "Réparation crevaison",     "Réparation conforme à la norme (perforation ≤ 6 mm en zone de sculpture)"],
        ["bi-rulers",               "Géométrie & parallélisme", "Réglage de l'alignement des roues pour éviter l'usure irrégulière et améliorer la tenue"],
        ["bi-box-seam",             "Stockage pneus",           "Stockage de vos pneus hiver/été entre les saisons dans des conditions optimales"],
        ["bi-speedometer",          "Contrôle pression",        "Vérification et ajustement de la pression, y compris sur les véhicules à TPMS"],
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

<!-- Géométrie + Sécurité -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-rulers me-2" style="color:#ff5d17;"></i>Géométrie : l'importance du parallélisme</h2>
        <p>Un mauvais réglage de la géométrie des roues entraîne :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Une usure prématurée et irrégulière des pneus</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Une surconsommation de carburant</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Une mauvaise tenue de route</li>
        </ul>
        <p class="text-muted small">Nous recommandons un contrôle de géométrie après chaque remplacement de pneus ou choc sur la voirie.</p>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-shield-fill-check me-2" style="color:#ff5d17;"></i>Pneus et sécurité</h2>
        <p>Des pneus en bon état, c'est :</p>
        <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Une distance de freinage réduite de plusieurs mètres</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Une adhérence préservée sur sol mouillé</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Une résistance à l'aquaplaning</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Un confort de conduite optimal</li>
        </ul>
        <div class="card border-0 bg-light mt-2">
            <div class="card-body py-3 d-flex align-items-center gap-3">
                <i class="bi bi-info-circle flex-shrink-0" style="color:#ff5d17;font-size:1.5rem;"></i>
                <p class="mb-0 small text-muted">Une pression correcte améliore également la consommation de carburant jusqu'à <strong>2 %</strong>.</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-circle mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Vos pneus, notre priorité</h2>
        <p class="lead opacity-75 mb-4">Ne roulez pas sur des pneus usés. Prenez rendez-vous pour un contrôle gratuit ou un remplacement rapide — montage et équilibrage inclus.</p>
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
