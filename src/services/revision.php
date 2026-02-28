<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Révision Voiture Premium';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Révision Premium</li>
    </ol>
</nav>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-tools service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Service Premium</span>
        <h1 class="mb-1">Révision Voiture Premium</h1>
        <p class="lead text-muted">L'entretien complet de votre véhicule par des experts</p>
        <p class="fw-semibold">Excellence mécanique. Transparence totale. Garantie préservée.</p>
    </div>
</div>

<!-- Intro -->
<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">Votre véhicule mérite bien plus qu'un simple entretien. Il mérite une révision rigoureuse, conforme aux exigences constructeur, réalisée par des techniciens qualifiés et passionnés.</p>
        <p>Dans notre garage haut de gamme, chaque révision est effectuée selon les préconisations exactes du constructeur, avec des pièces d'origine ou équivalentes premium, afin de préserver la performance, la sécurité et la valeur de votre véhicule.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Demandez votre devis personnalisé en 2 minutes
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-shield-check mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Révision conforme constructeur</h5>
                <p class="text-muted small mb-3">Garantie préservée, performances optimales, tranquillité d'esprit.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Qu'est-ce qu'une révision -->
<div class="row mb-5">
    <div class="col-12">
        <h2 class="mb-4"><i class="bi bi-question-circle me-2" style="color:#ff5d17;"></i>Qu'est-ce qu'une révision automobile ?</h2>
    </div>
    <div class="col-md-6">
        <p>La révision est un entretien complet programmé par le constructeur de votre véhicule. Elle permet de :</p>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Garantir la fiabilité du moteur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Prévenir les pannes coûteuses</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Maintenir la garantie constructeur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Optimiser la consommation et les performances</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Assurer votre sécurité et celle de vos passagers</li>
        </ul>
    </div>
    <div class="col-md-6">
        <div class="card bg-light border-0 h-100">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-calendar2-week me-2" style="color:#ff5d17;"></i>Fréquence recommandée</h5>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-arrow-right-short me-1"></i>Tous les <strong>15 000 à 30 000 km</strong></li>
                    <li class="mb-2"><i class="bi bi-arrow-right-short me-1"></i>Ou <strong>une fois par an</strong> minimum</li>
                </ul>
                <p class="text-muted small mt-3 mb-0">Un usage urbain, des trajets courts ou intensifs peuvent nécessiter un suivi plus fréquent.</p>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Notre engagement -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-patch-check me-2" style="color:#ff5d17;"></i>Notre engagement : une révision 100&nbsp;% conforme constructeur</h2>
        <p class="text-muted">Nous suivons strictement le programme d'entretien constructeur, sans compromis.</p>
    </div>
    <div class="col-md-8">
        <h5 class="mb-3">Chaque révision comprend :</h5>
        <div class="row g-2">
            <?php
            $items = [
                "Vidange avec huile conforme aux normes constructeur",
                "Remplacement du filtre à huile",
                "Contrôle / remplacement filtre à air",
                "Contrôle / remplacement filtre habitacle",
                "Contrôle / remplacement filtre carburant (diesel) ou bougies (essence)",
                "Diagnostic électronique complet",
                "Vérification des niveaux (frein, refroidissement, direction assistée…)",
                "Contrôle des freins, pneus, amortisseurs",
                "Inspection des courroies et organes de sécurité",
                "Jusqu'à 80+ points de contrôle selon modèle",
            ];
            foreach ($items as $item): ?>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <i class="bi bi-check2-circle text-success me-2 mt-1 flex-shrink-0"></i>
                    <span><?= $item ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-start border-4 border-warning shadow-sm">
            <div class="card-body">
                <h6 class="text-warning mb-3"><i class="bi bi-info-circle me-1"></i>Nos garanties</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2"><i class="bi bi-file-earmark-text me-2 text-muted"></i>Rapport détaillé remis après intervention</li>
                    <li class="mb-2"><i class="bi bi-chat-text me-2 text-muted"></i>Explications claires, sans jargon technique</li>
                    <li><i class="bi bi-hand-thumbs-up me-2 text-muted"></i>Aucune intervention supplémentaire sans votre accord</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Pourquoi nous choisir -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-trophy me-2" style="color:#ff5d17;"></i>Pourquoi nous choisir plutôt qu'un concessionnaire ?</h2>
    </div>
    <div class="col-md-8">
        <p>Parce que vous bénéficiez :</p>
        <div class="row g-3">
            <?php
            $avantages = [
                ["bi-check-square-fill","Respect strict du programme constructeur"],
                ["bi-shield-fill-check","Préservation de votre garantie constructeur"],
                ["bi-piggy-bank-fill","Tarif en moyenne 25 à 35 % plus avantageux"],
                ["bi-person-fill","Un interlocuteur unique"],
                ["bi-star-fill","Service personnalisé"],
                ["bi-cpu-fill","Atelier équipé en diagnostic électronique dernière génération"],
            ];
            foreach ($avantages as [$icon, $label]): ?>
            <div class="col-md-6">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi <?= $icon ?> text-success"></i>
                    <span><?= $label ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="mt-4 text-muted">Nous entretenons aussi bien les véhicules récents que les modèles premium et sportifs (hors véhicules d'exception très spécifiques).</p>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card text-white h-100" style="background-color:#ff5d17;">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-award mb-3" style="font-size:3rem;"></i>
                <h5>Qualité garantie</h5>
                <p class="small opacity-75">Pièces d'origine ou équivalentes premium. Techniciens qualifiés et passionnés.</p>
                <a href="/rendez-vous.php" class="btn btn-light btn-sm mt-2 fw-semibold">Prendre rendez-vous</a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Tarifs -->
<div class="row mb-5">
    <div class="col-md-7">
        <h2 class="mb-3"><i class="bi bi-tag me-2" style="color:#ff5d17;"></i>Combien coûte une révision ?</h2>
        <p>Le tarif dépend :</p>
        <ul class="list-unstyled">
            <li class="mb-1"><i class="bi bi-dot me-1"></i>Du modèle du véhicule</li>
            <li class="mb-1"><i class="bi bi-dot me-1"></i>De la motorisation (essence / diesel / hybride)</li>
            <li class="mb-1"><i class="bi bi-dot me-1"></i>Du kilométrage</li>
            <li class="mb-1"><i class="bi bi-dot me-1"></i>Des opérations prévues par le constructeur</li>
        </ul>
    </div>
    <div class="col-md-5 mt-4 mt-md-0">
        <div class="card border-0 shadow text-center">
            <div class="card-body p-4">
                <h5 class="mb-3">Nos devis sont :</h5>
                <div class="d-flex flex-column gap-2 mb-4">
                    <span class="badge bg-success py-2 fs-6">Gratuits</span>
                    <span class="badge bg-primary py-2 fs-6">Instantanés</span>
                    <span class="badge bg-secondary py-2 fs-6">Sans engagement</span>
                    <span class="badge py-2 fs-6" style="background-color:#ff5d17;">100 % transparents</span>
                </div>
                <a href="/rendez-vous.php" class="btn btn-primary w-100">
                    <i class="bi bi-calculator me-2"></i>Obtenir mon tarif personnalisé
                </a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Vidange vs Révision -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-arrow-left-right me-2" style="color:#ff5d17;"></i>Vidange ou révision : quelle différence ?</h2>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-header bg-light fw-semibold">
                <i class="bi bi-droplet me-2"></i>La vidange
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Remplacement de l'huile moteur</li>
                    <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Remplacement du filtre à huile</li>
                    <li><i class="bi bi-info-circle me-1 text-muted"></i>Entretien basique</li>
                </ul>
                <p class="mt-3 mb-0 text-muted small">Protège le moteur.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100 border-0 shadow-sm border-top border-4" style="border-color:#ff5d17!important;">
            <div class="card-header fw-semibold text-white" style="background-color:#ff5d17;">
                <i class="bi bi-tools me-2"></i>La révision
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="bi bi-check2 me-1 text-success"></i>Inclut la vidange</li>
                    <li class="mb-2"><i class="bi bi-check2 me-1 text-success"></i>Contrôle complet de l'ensemble du véhicule</li>
                    <li><i class="bi bi-check2 me-1 text-success"></i>Suit le programme constructeur</li>
                </ul>
                <p class="mt-3 mb-0 text-muted small">Protège votre véhicule dans sa globalité.</p>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Quand faire la révision + Documents -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Quand faire votre révision ?</h2>
        <p>Vous devez intervenir si :</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i>Un voyant entretien s'allume</li>
            <li class="list-group-item ps-0"><i class="bi bi-speedometer2 me-2 text-muted"></i>Le kilométrage recommandé est atteint</li>
            <li class="list-group-item ps-0"><i class="bi bi-calendar3 me-2 text-muted"></i>12 mois se sont écoulés depuis la dernière révision</li>
            <li class="list-group-item ps-0"><i class="bi bi-graph-up me-2 text-muted"></i>Vous souhaitez préserver la valeur de revente de votre véhicule</li>
        </ul>
        <p class="mt-3 text-muted small">Nous pouvons vérifier gratuitement votre échéance d'entretien.</p>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-folder2-open me-2" style="color:#ff5d17;"></i>Quels documents apporter ?</h2>
        <p>Pour une révision optimale :</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item ps-0"><i class="bi bi-journal-bookmark me-2 text-muted"></i>Carnet d'entretien</li>
            <li class="list-group-item ps-0"><i class="bi bi-card-text me-2 text-muted"></i>Carte grise</li>
            <li class="list-group-item ps-0"><i class="bi bi-receipt me-2 text-muted"></i>Factures précédentes si disponibles</li>
        </ul>
        <p class="mt-3 text-muted small">Cela nous permet de suivre précisément l'historique de votre véhicule.</p>
    </div>
</div>

<hr class="my-5">

<!-- Notre différence haut de gamme -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-gem me-2" style="color:#ff5d17;"></i>Notre différence haut de gamme</h2>
        <p class="text-muted">Votre véhicule est pris en charge comme s'il était le nôtre.</p>
    </div>
    <?php
    $differences = [
        ["bi-person-check","Accueil personnalisé"],
        ["bi-search","Diagnostic précis"],
        ["bi-file-earmark-bar-graph","Rapport détaillé"],
        ["bi-eye","Transparence totale"],
        ["bi-gem","Pièces premium"],
        ["bi-building-check","Respect strict constructeur"],
        ["bi-cpu","Atelier équipé dernière génération"],
    ];
    foreach ($differences as [$icon, $label]): ?>
    <div class="col-6 col-md-3 mb-3">
        <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body py-4">
                <i class="bi <?= $icon ?> mb-2 d-block" style="font-size:2rem;color:#ff5d17;"></i>
                <span class="fw-semibold small"><?= $label ?></span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <h2 class="mb-2">Prenez rendez-vous dès maintenant</h2>
        <p class="lead opacity-75 mb-4">Ne laissez pas l'entretien au hasard. Offrez à votre véhicule une révision complète réalisée par des professionnels exigeants.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="/rendez-vous.php" class="btn btn-lg fw-semibold" style="background-color:#ff5d17;color:#fff;">
                <i class="bi bi-calendar-plus me-2"></i>Demandez votre devis gratuit
            </a>
            <a href="/rendez-vous.php" class="btn btn-lg btn-outline-light fw-semibold">
                <i class="bi bi-clock me-2"></i>Réservez votre créneau en ligne
            </a>
            <a href="/contact.php" class="btn btn-lg btn-outline-light fw-semibold">
                <i class="bi bi-telephone me-2"></i>Appelez-nous
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
