<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Vitrage / Pare-brise';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Vitrage / Pare-brise</li>
    </ol>
</nav>

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-window service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Prise en charge assurance</span>
        <h1 class="mb-1">Vitrage / Pare-brise</h1>
        <p class="lead text-muted">Réparation et remplacement de pare-brise et de tous les vitrages de votre véhicule.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">Le pare-brise est un élément de sécurité essentiel. Il participe à la rigidité du châssis et au déploiement correct des airbags. Un impact non traité peut se propager et rendre le remplacement inévitable.</p>
        <p>Nous intervenons rapidement sur tous les vitrages : pare-brise, lunette arrière, vitres latérales et vitres de custode, pour toutes les marques et modèles.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-shield-fill-check mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Prise en charge assurance</h5>
                <p class="text-muted small mb-3">Selon votre contrat, le remplacement de pare-brise peut être pris en charge sans franchise.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <img src="/assets/img/services/vitrage.jpg" alt="Vitrage et pare-brise" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-question-circle me-2" style="color:#ff5d17;"></i>Réparer ou remplacer ?</h2>
        <p>Tout dépend de la taille et de la localisation de l'impact :</p>
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-header bg-success text-white fw-semibold"><i class="bi bi-bandaid me-2"></i>Réparation possible</div>
            <div class="card-body">
                <ul class="list-unstyled mb-0 small text-muted">
                    <li class="mb-1"><i class="bi bi-check2 me-2 text-success"></i>Impact inférieur à 1 cm (hors zone de balayage)</li>
                    <li class="mb-1"><i class="bi bi-check2 me-2 text-success"></i>Fissure courte sans ramification</li>
                    <li><i class="bi bi-check2 me-2 text-success"></i>Pas de dommage à la couche interne du verre</li>
                </ul>
            </div>
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-header text-white fw-semibold" style="background:#ff5d17;"><i class="bi bi-arrow-repeat me-2"></i>Remplacement nécessaire</div>
            <div class="card-body">
                <ul class="list-unstyled mb-0 small text-muted">
                    <li class="mb-1"><i class="bi bi-x2 me-2 text-danger"></i>Impact dans la zone de balayage des essuie-glaces</li>
                    <li class="mb-1"><i class="bi bi-x2 me-2 text-danger"></i>Fissure longue ou ramifiée</li>
                    <li><i class="bi bi-x2 me-2 text-danger"></i>Éclat important ou bris multiple</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-list-check me-2" style="color:#ff5d17;"></i>Nos prestations</h2>
        <?php
        $prestations = [
            ["bi-bandaid",       "Réparation d'impact",   "Injection de résine optique sur les éclats et petits impacts pour stopper la propagation"],
            ["bi-window",        "Remplacement pare-brise","Dépose et pose d'un pare-brise homologué, collage structurel et recalibrage ADAS si nécessaire"],
            ["bi-box-arrow-down","Lunette arrière",        "Remplacement de la lunette arrière chauffante ou non, avec restauration du dégivrage"],
            ["bi-layout-sidebar","Vitres latérales",       "Remplacement des vitres de portes, vitres fixes et vitres de custode"],
        ];
        foreach ($prestations as [$icon, $titre, $desc]): ?>
        <div class="d-flex align-items-start gap-3 mb-3">
            <i class="bi <?= $icon ?> flex-shrink-0 mt-1" style="font-size:1.4rem;color:#ff5d17;"></i>
            <div>
                <p class="mb-0 fw-semibold"><?= $titre ?></p>
                <p class="mb-0 text-muted small"><?= $desc ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Pourquoi ne pas attendre ?</h2>
        <p>Un impact non traité peut :</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Se propager avec les changements de température</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Rendre le remplacement inévitable (plus coûteux)</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Provoquer un refus au contrôle technique</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Gêner la visibilité et compromettre votre sécurité</li>
        </ul>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-cpu me-2" style="color:#ff5d17;"></i>ADAS et recalibrage caméra</h2>
        <p>Les véhicules récents intègrent des caméras et capteurs sur le pare-brise (aide au maintien de voie, freinage d'urgence, détection de panneaux…).</p>
        <div class="card border-0 bg-light">
            <div class="card-body d-flex align-items-start gap-3 py-3">
                <i class="bi bi-info-circle flex-shrink-0 mt-1" style="color:#ff5d17;font-size:1.4rem;"></i>
                <p class="mb-0 small text-muted">Après un remplacement de pare-brise, ces systèmes doivent être recalibrés. Nous réalisons ou organisons cette opération pour garantir le bon fonctionnement de vos assistances à la conduite.</p>
            </div>
        </div>
    </div>
</div>

<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-window mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Un impact sur votre pare-brise ?</h2>
        <p class="lead opacity-75 mb-4">N'attendez pas qu'il se propage. Une réparation rapide coûte bien moins cher qu'un remplacement complet — et préserve votre sécurité.</p>
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
