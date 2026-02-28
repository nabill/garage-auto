<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Suspension / Amortisseurs';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Suspension / Amortisseurs</li>
    </ol>
</nav>

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-arrows-vertical service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Confort & tenue de route</span>
        <h1 class="mb-1">Suspension / Amortisseurs</h1>
        <p class="lead text-muted">Un système de suspension en bon état, c'est confort, sécurité et maîtrise de votre véhicule.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">La suspension absorbe les irrégularités de la route et maintient vos pneus en contact permanent avec le sol. Des amortisseurs défaillants dégradent la tenue de route, augmentent la distance de freinage et accélèrent l'usure des pneumatiques.</p>
        <p>Nos techniciens diagnostiquent l'ensemble de votre train roulant et vous proposent les réparations adaptées avec un devis clair avant toute intervention.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Faire vérifier ma suspension
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-shield-fill-check mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Diagnostic complet</h5>
                <p class="text-muted small mb-3">Nous inspectons l'ensemble du train avant et arrière pour identifier précisément les pièces à remplacer.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Signes d'une suspension défaillante</h2>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Le véhicule plonge excessivement au freinage</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Rebonds prolongés après un dos-d'âne</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Bruits de claquements ou craquements dans les virages</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Vibrations dans le volant ou le châssis</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Usure irrégulière des pneus</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Véhicule qui tire d'un côté</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Confort de conduite dégradé sur route normale</li>
        </ul>
        <p class="text-muted small">Des amortisseurs usés peuvent augmenter la distance de freinage de 20 % ou plus.</p>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-list-check me-2" style="color:#ff5d17;"></i>Nos prestations</h2>
        <?php
        $prestations = [
            ["bi-arrows-vertical",  "Amortisseurs",      "Diagnostic et remplacement des amortisseurs avant et arrière (par essieu)"],
            ["bi-circle",           "Ressorts",           "Contrôle et remplacement des ressorts de suspension affaissés ou cassés"],
            ["bi-link-45deg",       "Rotules & biellettes","Remplacement des rotules de suspension et biellettes de barre stabilisatrice"],
            ["bi-cpu",              "Silent-blocs",       "Remplacement des silent-blocs de triangle, berceau et barre stabilisatrice"],
            ["bi-arrows-move",      "Cardans",            "Diagnostic et remplacement des cardans et joints homocinétiques"],
            ["bi-rulers",           "Géométrie",          "Contrôle et réglage du parallélisme après toute intervention sur la suspension"],
        ];
        foreach ($prestations as [$icon, $titre, $desc]): ?>
        <div class="d-flex align-items-start gap-3 mb-3">
            <i class="bi <?= $icon ?> flex-shrink-0 mt-1" style="font-size:1.3rem;color:#ff5d17;"></i>
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
        <h2 class="mb-3"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Durée de vie des amortisseurs</h2>
        <p>En général, les amortisseurs doivent être contrôlés :</p>
        <div class="d-flex flex-column gap-2">
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-speedometer2 flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Tous les 50 000 à 80 000 km</p>
                        <p class="mb-0 text-muted small">Selon l'usage et la qualité des routes</p>
                    </div>
                </div>
            </div>
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-search flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">À chaque contrôle technique</p>
                        <p class="mb-0 text-muted small">Un test de suspension est réalisé en centre agréé</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted small mt-3">Nous recommandons le remplacement par paire (avant ou arrière) pour un comportement homogène du véhicule.</p>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-rulers me-2" style="color:#ff5d17;"></i>L'importance de la géométrie</h2>
        <p>Après tout remplacement de pièces de suspension, un réglage de géométrie est indispensable pour :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Éviter l'usure prématurée des pneus</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Restaurer une tenue de route optimale</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Réduire la consommation de carburant</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Garantir la sécurité en virage et au freinage</li>
        </ul>
        <a href="/services/pneumatiques.php" class="btn btn-sm btn-outline-primary">
            <i class="bi bi-arrow-right me-1"></i>En savoir plus sur la géométrie
        </a>
    </div>
</div>

<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-arrows-vertical mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Votre confort et votre sécurité commencent par la suspension</h2>
        <p class="lead opacity-75 mb-4">Ne laissez pas une suspension défaillante compromettre votre sécurité sur la route. Faites inspecter votre train roulant par nos experts.</p>
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
