<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Mécanique générale';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Mécanique générale</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-gear-wide-connected service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Toutes marques</span>
        <h1 class="mb-1">Mécanique générale</h1>
        <p class="lead text-muted">Réparation, entretien et remise en état de tous les organes mécaniques de votre véhicule.</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">Notre équipe de mécaniciens qualifiés prend en charge toutes les réparations mécaniques, des plus courantes aux plus complexes. Nous intervenons sur toutes les marques et tous les modèles de véhicules.</p>
        <p>Chaque intervention fait l'objet d'un devis détaillé et transparent avant réparation. Aucun travail supplémentaire n'est effectué sans votre accord.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-tools mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Diagnostic gratuit</h5>
                <p class="text-muted small mb-3">Avant toute réparation, nous diagnostiquons précisément le problème pour vous proposer la solution la plus adaptée.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Nos prestations -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-list-check me-2" style="color:#ff5d17;"></i>Nos prestations</h2>
        <p class="text-muted">Du moteur à la suspension, nous maîtrisons l'ensemble de la mécanique automobile.</p>
    </div>
    <?php
    $prestations = [
        ["bi-speedometer",          "Moteur",                   "Réparation, révision et remplacement moteur. Joints, culasse, pistons, distribution."],
        ["bi-slash-circle",         "Freinage",                 "Plaquettes, disques, tambours, étriers, maître-cylindre et liquide de frein."],
        ["bi-arrow-repeat",         "Embrayage",                "Remplacement du kit embrayage (disque, plateau, butée) sur toutes motorisations."],
        ["bi-gear",                 "Boîte de vitesses",        "Réparation et remplacement de boîtes manuelles, automatiques et robotisées."],
        ["bi-fan",                  "Distribution",             "Remplacement de la courroie ou chaîne de distribution, tendeurs et galets."],
        ["bi-arrows-move",          "Suspension & direction",   "Amortisseurs, ressorts, rotules, biellettes, cardans et crémaillère de direction."],
        ["bi-wind",                 "Échappement",              "Remplacement du pot d'échappement, catalyseur, filtre à particules (FAP)."],
        ["bi-thermometer-half",     "Refroidissement",          "Radiateur, pompe à eau, thermostat, durites — prévention de la surchauffe moteur."],
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

<!-- Signes d'alerte + Notre méthode -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Signes qui doivent alerter</h2>
        <p>Consultez-nous dès que vous remarquez :</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un voyant moteur, huile ou température allumé</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des bruits suspects (claquements, grincements, sifflements)</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une perte de puissance ou des ratés moteur</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une consommation de carburant ou d'huile anormale</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des vibrations inhabituelles dans le volant ou le châssis</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une difficulté à passer les rapports ou à embrayer</li>
        </ul>
        <p class="text-muted small mt-3">Agir tôt évite souvent des réparations plus coûteuses.</p>
    </div>
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-patch-check me-2" style="color:#ff5d17;"></i>Notre méthode</h2>
        <?php
        $methode = [
            ["1", "Diagnostic",   "Identification précise de la panne par nos techniciens et notre équipement électronique"],
            ["2", "Devis",        "Proposition détaillée et transparente avant tout travaux, sans engagement"],
            ["3", "Réparation",   "Intervention avec des pièces de qualité, conformes aux normes constructeur"],
            ["4", "Contrôle",     "Vérification complète du véhicule avant restitution"],
        ];
        foreach ($methode as [$num, $titre, $desc]): ?>
        <div class="d-flex gap-3 mb-3 align-items-start">
            <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width:2.2rem;height:2.2rem;background:#ff5d17;font-size:.9rem;">
                <?= $num ?>
            </div>
            <div>
                <p class="mb-0 fw-semibold"><?= $titre ?></p>
                <p class="mb-0 text-muted small"><?= $desc ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<hr class="my-5">

<!-- Pourquoi nous choisir -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-trophy me-2" style="color:#ff5d17;"></i>Pourquoi nous confier votre véhicule ?</h2>
    </div>
    <?php
    $atouts = [
        ["bi-people",           "Toutes marques",           "Nous intervenons sur tous les véhicules : citadines, berlines, SUV, utilitaires."],
        ["bi-gem",              "Pièces de qualité",        "Pièces d'origine ou équivalentes premium, conformes aux spécifications constructeur."],
        ["bi-eye",              "Transparence",             "Devis détaillé avant réparation, aucune mauvaise surprise sur la facture."],
        ["bi-lightning",        "Rapidité",                 "Interventions réalisées dans les meilleurs délais pour minimiser votre immobilisation."],
    ];
    foreach ($atouts as [$icon, $titre, $desc]): ?>
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
        <i class="bi bi-gear-wide-connected mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Un problème mécanique ? On s'en occupe.</h2>
        <p class="lead opacity-75 mb-4">Quelle que soit la panne, nos mécaniciens qualifiés trouvent la solution et remettent votre véhicule sur la route dans les meilleurs délais.</p>
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
