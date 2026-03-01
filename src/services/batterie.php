<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Changement de Batterie';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Changement de Batterie</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-battery-charging service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Intervention rapide</span>
        <h1 class="mb-1">Changement de Batterie</h1>
        <p class="lead text-muted">Diagnostic et remplacement rapide par des professionnels</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">La batterie est essentielle au bon fonctionnement de votre véhicule. Elle permet de démarrer le moteur et alimente tous les équipements électriques.</p>
        <p>Lorsqu'elle montre des signes de faiblesse, il est préférable d'agir avant la panne.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Demandez un diagnostic gratuit
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-lightning-charge mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Intervention rapide</h5>
                <p class="text-muted small mb-3">Diagnostic, remplacement et test final réalisés en une seule visite.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <img src="/assets/img/services/batterie.jpg" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<!-- Quand changer la batterie -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Quand faut-il changer la batterie ?</h2>
        <p>Voici les signes les plus courants :</p>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Démarrage difficile ou moteur qui peine</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Voyant batterie allumé sur le tableau de bord</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Phares ou accessoires moins puissants</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Batterie âgée de plus de 4 à 6 ans</li>
        </ul>
        <p class="text-muted">Ces symptômes peuvent indiquer une batterie faible ou un problème de charge. Le plus sûr reste de faire réaliser un diagnostic complet.</p>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <div class="card border-0 bg-light h-100">
            <div class="card-body p-4">
                <h5 class="mb-3"><i class="bi bi-info-circle me-2" style="color:#ff5d17;"></i>Le bon réflexe</h5>
                <p>Ne pas attendre la panne. Une batterie défaillante peut :</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>Vous laisser en panne à tout moment</li>
                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>Endommager l'alternateur ou le démarreur</li>
                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>Perturber les systèmes électroniques</li>
                </ul>
                <a href="/rendez-vous.php" class="btn btn-sm btn-primary mt-2">
                    <i class="bi bi-search me-1"></i>Faire diagnostiquer ma batterie
                </a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Comment se déroule le remplacement -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-gear me-2" style="color:#ff5d17;"></i>Comment se déroule le remplacement ?</h2>
        <p class="text-muted">Une intervention rapide et sécurisée, réalisée en une seule visite.</p>
    </div>
    <?php
    $etapes = [
        ["bi-clipboard2-pulse", "1", "Diagnostic", "Vérification du circuit de charge (alternateur, câbles, bornes)"],
        ["bi-battery-half",     "2", "Test batterie", "Mesure de la tension, de la capacité et de la puissance de démarrage"],
        ["bi-wrench-adjustable","3", "Démontage", "Retrait sécurisé de l'ancienne batterie"],
        ["bi-battery-full",     "4", "Installation", "Pose d'une batterie parfaitement adaptée à votre véhicule"],
        ["bi-check2-all",       "5", "Test final", "Vérification du démarrage et du bon fonctionnement électrique"],
    ];
    foreach ($etapes as [$icon, $num, $titre, $desc]): ?>
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

<!-- Quelle batterie choisir -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-sliders me-2" style="color:#ff5d17;"></i>Quelle batterie choisir ?</h2>
        <p class="text-muted">Le choix dépend de votre véhicule. Nous déterminons le modèle adapté grâce au diagnostic.</p>
    </div>
    <?php
    $types = [
        ["bi-battery",      "Batterie Plomb-Acide", "Véhicules standards sans système Start & Stop",          "bg-secondary"],
        ["bi-battery-half", "Batterie EFB",          "Véhicules équipés d'un système Start &amp; Stop",        "bg-primary"],
        ["bi-battery-full", "Batterie AGM",           "Véhicules hautement équipés, hybrides légers",           "bg-dark"],
    ];
    foreach ($types as [$icon, $nom, $desc, $bg]): ?>
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-header <?= $bg ?> text-white py-3">
                <i class="bi <?= $icon ?> mb-1 d-block" style="font-size:2rem;"></i>
                <h5 class="mb-0"><?= $nom ?></h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-0"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="col-12 mt-2">
        <p class="text-muted"><i class="bi bi-info-circle me-1"></i>Un diagnostic précis permet de déterminer le modèle exact adapté à votre véhicule et à ses besoins électriques.</p>
    </div>
</div>

<hr class="my-5">

<!-- Prix + Soi-même : deux colonnes -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-tag me-2" style="color:#ff5d17;"></i>Quel est le prix ?</h2>
        <p>Le tarif dépend :</p>
        <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-dot me-1"></i>Du type de batterie (plomb-acide, EFB, AGM)</li>
            <li class="mb-2"><i class="bi bi-dot me-1"></i>De la puissance requise par le véhicule</li>
            <li class="mb-2"><i class="bi bi-dot me-1"></i>Des besoins électriques spécifiques</li>
        </ul>
        <div class="card border-0 bg-light mt-3">
            <div class="card-body d-flex align-items-center gap-3">
                <i class="bi bi-file-earmark-check flex-shrink-0" style="font-size:2rem;color:#ff5d17;"></i>
                <div>
                    <p class="mb-1 fw-semibold">Devis clair et transparent</p>
                    <p class="mb-0 text-muted small">Proposé avant toute intervention, sans surprise ni engagement.</p>
                </div>
            </div>
        </div>
        <a href="/rendez-vous.php" class="btn btn-primary mt-3">
            <i class="bi bi-calculator me-2"></i>Obtenir un devis gratuit
        </a>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-person-x me-2" style="color:#ff5d17;"></i>Peut-on la changer soi-même ?</h2>
        <p>Même si cela paraît simple, une erreur peut :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Endommager le système électrique du véhicule</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Effacer des données électroniques sensibles</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Provoquer un court-circuit</li>
        </ul>
        <div class="card border-0 shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <i class="bi bi-shield-check flex-shrink-0" style="font-size:2rem;color:#198754;"></i>
                <p class="mb-0 text-muted small">Un remplacement professionnel garantit la <strong>sécurité</strong> et la <strong>conformité constructeur</strong> de votre véhicule.</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-battery-charging mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Votre batterie vous inquiète ?</h2>
        <p class="lead opacity-75 mb-4">Ne prenez pas le risque d'une panne. Nos techniciens diagnostiquent et remplacent votre batterie rapidement, avec les pièces adaptées à votre véhicule.</p>
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
