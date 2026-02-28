<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Carrosserie / Peinture';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Carrosserie / Peinture</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-brush service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Toutes assurances</span>
        <h1 class="mb-1">Carrosserie / Peinture</h1>
        <p class="lead text-muted">Nous redonnons à votre véhicule son aspect d'origine, avec une finition impeccable.</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">Un choc, une rayure, une bosse ou un accrochage ? Notre atelier de carrosserie-peinture prend en charge toutes les réparations, des retouches légères aux remises en état complètes.</p>
        <p>Nous travaillons avec toutes les compagnies d'assurance et vous accompagnons dans l'ensemble de vos démarches de sinistre, de la déclaration à la restitution du véhicule.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Demander un devis gratuit
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-shield-fill-check mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Prise en charge assurance</h5>
                <p class="text-muted small mb-3">Nous gérons les démarches avec votre assureur. Devis conforme et véhicule de courtoisie selon disponibilité.</p>
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
        <p class="text-muted">De la retouche rapide à la remise en état complète, nous intervenons sur tous types de dommages.</p>
    </div>
    <?php
    $prestations = [
        ["bi-wrench-adjustable",   "Réparation après choc",        "Remise en forme des éléments de carrosserie déformés suite à un accident"],
        ["bi-magic",               "Débosselage sans peinture",     "Technique DSP pour supprimer les bosses légères sans toucher à la peinture d'origine"],
        ["bi-paint-bucket",        "Peinture complète ou partielle","Teinte assortie avec précision à votre véhicule, résultat indiscernable"],
        ["bi-pen",                 "Retouches & rayures",           "Correction des rayures superficielles ou profondes, petites réparations localisées"],
        ["bi-window",              "Vitrage & pare-brise",          "Remplacement et réparation de pare-brise, vitres latérales et lunette arrière"],
        ["bi-shield-check",        "Anti-corrosion",                "Traitement préventif et curatif de la corrosion pour protéger la structure du véhicule"],
        ["bi-box-arrow-in-right",  "Remplacement d'éléments",      "Remplacement d'ailes, pare-chocs, portières et autres éléments de carrosserie"],
        ["bi-stars",               "Lustrage & polish",             "Remise en éclat de la carrosserie, correction de l'oxydation et protection de la peinture"],
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

<!-- Sinistre + Peinture -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-file-earmark-check me-2" style="color:#ff5d17;"></i>Sinistre : on s'occupe de tout</h2>
        <p>Vous avez eu un accident ? Nous vous accompagnons à chaque étape :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Établissement du constat amiable si besoin</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Rédaction du devis de réparation conforme assurance</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Relation directe avec votre compagnie d'assurance</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Suivi du dossier jusqu'à la restitution du véhicule</li>
        </ul>
        <p class="text-muted small">Compatible avec toutes les assurances. Véhicule de courtoisie selon disponibilité.</p>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-palette me-2" style="color:#ff5d17;"></i>La peinture : une science exacte</h2>
        <p>Retrouver la teinte exacte de votre véhicule est un vrai savoir-faire. Nous utilisons :</p>
        <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Un spectrophotomètre pour lire la couleur d'origine</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Des bases de mélange professionnelles</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Un vernissage bi-couche pour un rendu identique</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Un processus de séchage contrôlé en cabine</li>
        </ul>
        <div class="card border-0 bg-light mt-3">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <i class="bi bi-eye flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                <p class="mb-0 small text-muted">Résultat indiscernable de la peinture d'origine. Garantie sur la teinte et la tenue.</p>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Nos engagements -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-patch-check me-2" style="color:#ff5d17;"></i>Nos engagements</h2>
    </div>
    <?php
    $engagements = [
        ["bi-gem",              "Qualité de finition",      "Peinture assortie avec précision, résultat durable et garanti"],
        ["bi-eye",              "Transparence totale",      "Devis clair avant toute intervention. Aucune surprise sur la facture finale"],
        ["bi-clock",            "Délais respectés",         "Nous vous informons de l'avancement des travaux et du délai de restitution"],
        ["bi-award",            "Garantie travaux",         "Nos réparations carrosserie sont garanties. Votre satisfaction est notre priorité"],
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
        <i class="bi bi-brush mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Redonnez à votre véhicule son éclat d'origine</h2>
        <p class="lead opacity-75 mb-4">Rayure, choc, sinistre ou simple entretien de la carrosserie — notre équipe s'occupe de tout avec précision et savoir-faire.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="/rendez-vous.php" class="btn btn-lg fw-semibold" style="background-color:#ff5d17;color:#fff;">
                <i class="bi bi-calendar-plus me-2"></i>Demander un devis gratuit
            </a>
            <a href="/contact.php" class="btn btn-lg btn-outline-light fw-semibold">
                <i class="bi bi-telephone me-2"></i>Nous appeler
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
