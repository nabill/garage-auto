<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Entretien / Vidange';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Entretien / Vidange</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-droplet-half service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Entretien régulier</span>
        <h1 class="mb-1">Entretien / Vidange</h1>
        <p class="lead text-muted">Un entretien régulier est la meilleure protection pour la longévité et les performances de votre véhicule.</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">La vidange est le geste d'entretien le plus important pour votre moteur. Elle consiste à remplacer l'huile usée et le filtre à huile pour garantir une lubrification optimale de l'ensemble des organes moteur.</p>
        <p>Nous utilisons des huiles et des filtres conformes aux spécifications de votre constructeur pour assurer les meilleures performances et préserver votre garantie.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-droplet mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Rappel d'entretien</h5>
                <p class="text-muted small mb-3">Nous notons votre prochaine échéance et vous rappelons quand le moment est venu.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Quand faire la vidange -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Quand faire la vidange ?</h2>
        <p>La fréquence dépend de votre véhicule et de votre usage :</p>
        <div class="d-flex flex-column gap-2 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-speedometer2 flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Tous les 10 000 à 20 000 km</p>
                        <p class="mb-0 text-muted small">Selon le constructeur et le type d'huile utilisé</p>
                    </div>
                </div>
            </div>
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-calendar3 flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Au minimum une fois par an</p>
                        <p class="mb-0 text-muted small">Même si le kilométrage n'est pas atteint</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted small">Un usage urbain avec de nombreux trajets courts accélère la dégradation de l'huile et nécessite un entretien plus fréquent.</p>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Signes d'une huile à changer</h2>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Voyant huile ou entretien allumé</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Huile noire ou très épaisse sur la jauge</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Bruits moteur plus prononcés au démarrage</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Consommation d'huile anormalement élevée</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Kilométrage ou délai constructeur atteint</li>
        </ul>
        <div class="card border-0 border-start border-4 border-warning bg-light">
            <div class="card-body py-3">
                <p class="mb-0 small text-muted"><i class="bi bi-exclamation-circle me-1 text-warning"></i>Rouler avec une huile dégradée peut provoquer une usure prématurée du moteur et entraîner des réparations coûteuses.</p>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Nos prestations -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-list-check me-2" style="color:#ff5d17;"></i>Nos prestations d'entretien</h2>
        <p class="text-muted">Vidange simple ou entretien complet, nous adaptons l'intervention aux besoins de votre véhicule.</p>
    </div>
    <?php
    $prestations = [
        ["bi-droplet-half",         "Vidange moteur",           "Vidange complète de l'huile moteur et remplacement du filtre à huile homologué constructeur"],
        ["bi-wind",                 "Filtre à air",             "Remplacement du filtre à air pour préserver les performances moteur et la consommation"],
        ["bi-fan",                  "Filtre habitacle",         "Remplacement du filtre d'habitacle (pollen) pour un air sain à bord"],
        ["bi-fuel-pump",            "Filtre carburant",         "Remplacement du filtre carburant (diesel) pour protéger le système d'injection"],
        ["bi-lightning-charge",     "Bougies d'allumage",       "Remplacement des bougies (essence) selon le préconisé constructeur"],
        ["bi-thermometer-half",     "Niveaux",                  "Contrôle et appoint de tous les niveaux : refroidissement, frein, direction, lave-glace"],
        ["bi-eye",                  "Contrôle visuel",          "Inspection complète : courroies, durites, pneus, freins, éclairage et dessous de caisse"],
        ["bi-journal-bookmark",     "Carnet d'entretien",       "Mise à jour du carnet d'entretien et apposition du sticker rappel kilométrage"],
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

<!-- Vidange vs Révision + Huiles -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-arrow-left-right me-2" style="color:#ff5d17;"></i>Vidange ou révision complète ?</h2>
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-header bg-light fw-semibold"><i class="bi bi-droplet me-2"></i>Vidange simple</div>
            <div class="card-body">
                <p class="text-muted small mb-0">Remplacement de l'huile et du filtre à huile. Entretien de base à réaliser régulièrement.</p>
            </div>
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-header text-white fw-semibold" style="background:#ff5d17;"><i class="bi bi-tools me-2"></i>Révision complète</div>
            <div class="card-body">
                <p class="text-muted small mb-0">Inclut la vidange + remplacement des filtres + contrôle de l'ensemble du véhicule selon le programme constructeur.</p>
            </div>
        </div>
        <a href="/services/revision.php" class="btn btn-sm btn-outline-primary mt-3">
            <i class="bi bi-arrow-right me-1"></i>En savoir plus sur la révision complète
        </a>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-droplet-fill me-2" style="color:#ff5d17;"></i>Le choix de l'huile</h2>
        <p>Toutes les huiles ne se valent pas. Nous sélectionnons rigoureusement l'huile adaptée à votre moteur :</p>
        <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check2 me-2 text-success"></i>Viscosité conforme aux spécifications constructeur</li>
            <li class="mb-2"><i class="bi bi-check2 me-2 text-success"></i>Normes ACEA et API respectées</li>
            <li class="mb-2"><i class="bi bi-check2 me-2 text-success"></i>Homologations constructeur (VW, BMW, Mercedes, PSA…)</li>
            <li class="mb-2"><i class="bi bi-check2 me-2 text-success"></i>Adaptée essence, diesel et hybride</li>
        </ul>
        <div class="card border-0 bg-light mt-2">
            <div class="card-body py-3 d-flex align-items-center gap-3">
                <i class="bi bi-award flex-shrink-0" style="color:#ff5d17;font-size:1.5rem;"></i>
                <p class="mb-0 small text-muted">Le bon choix d'huile préserve la garantie constructeur et maximise la durée de vie de votre moteur.</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-droplet-half mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Votre prochaine vidange est pour bientôt ?</h2>
        <p class="lead opacity-75 mb-4">Prenez rendez-vous en quelques clics. Intervention rapide, huile et filtre conformes constructeur, carnet mis à jour.</p>
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
