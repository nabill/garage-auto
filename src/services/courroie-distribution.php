<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Courroie de distribution';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Courroie de distribution</li>
    </ol>
</nav>

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-arrow-repeat service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Entretien critique</span>
        <h1 class="mb-1">Courroie de distribution</h1>
        <p class="lead text-muted">La pièce la plus critique de votre moteur — ne négligez jamais son remplacement.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">La courroie de distribution synchronise la rotation du vilebrequin et des arbres à cames. Elle assure l'ouverture et la fermeture des soupapes au bon moment. C'est l'une des pièces les plus critiques de votre moteur.</p>
        <p>Si elle casse ou saute, les pistons et les soupapes entrent en collision, provoquant des dégâts moteur souvent irréparables et très coûteux. Ne jamais dépasser l'échéance constructeur.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Vérifier mon échéance de distribution
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 border-start border-4 border-danger shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-exclamation-triangle-fill mb-3 text-danger" style="font-size:2.5rem;"></i>
                <h5>Risque moteur total</h5>
                <p class="text-muted small mb-3">Une courroie qui casse peut détruire entièrement le moteur. Le coût de remplacement moteur dépasse souvent la valeur du véhicule.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-danger btn-sm">Vérifier maintenant</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <img src="/assets/img/services/courroie-distribution.jpg" alt="Courroie de distribution" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Quand la remplacer ?</h2>
        <p>La fréquence dépend de votre constructeur, mais en général :</p>
        <div class="d-flex flex-column gap-2 mb-4">
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-speedometer2 flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Tous les 80 000 à 120 000 km</p>
                        <p class="mb-0 text-muted small">Selon le constructeur et le modèle du moteur</p>
                    </div>
                </div>
            </div>
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-calendar3 flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Tous les 5 à 7 ans maximum</p>
                        <p class="mb-0 text-muted small">Le caoutchouc se dégrade avec le temps, même sans kilométrage élevé</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 border-start border-4 border-warning bg-light">
            <div class="card-body py-3">
                <p class="mb-0 small text-muted"><i class="bi bi-exclamation-circle me-1 text-warning"></i>Lors de l'achat d'un véhicule d'occasion, vérifiez systématiquement l'historique de la distribution.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-list-check me-2" style="color:#ff5d17;"></i>Ce que comprend l'intervention</h2>
        <?php
        $items = [
            "Remplacement de la courroie de distribution",
            "Remplacement des tendeurs et galets",
            "Remplacement de la pompe à eau (si entraînée par la courroie)",
            "Remplacement du joint de vilebrequin si nécessaire",
            "Contrôle du moteur avant et après l'intervention",
            "Mise à jour du carnet d'entretien",
        ];
        foreach ($items as $item): ?>
        <div class="d-flex align-items-start gap-2 mb-2">
            <i class="bi bi-check2-circle text-success flex-shrink-0 mt-1"></i>
            <span class="text-muted"><?= $item ?></span>
        </div>
        <?php endforeach; ?>
        <p class="text-muted small mt-3">Nous remplaçons toujours l'ensemble du kit distribution (courroie + tendeurs + galets) pour garantir une fiabilité maximale.</p>
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-link-45deg me-2" style="color:#ff5d17;"></i>Courroie ou chaîne de distribution ?</h2>
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-header bg-light fw-semibold"><i class="bi bi-link me-2"></i>Courroie (caoutchouc)</div>
            <div class="card-body small text-muted">
                <p class="mb-1">Présente sur la majorité des moteurs. Silencieuse, légère. Nécessite un remplacement périodique obligatoire.</p>
                <p class="mb-0">Durée de vie : 80 000 à 120 000 km ou 5 à 7 ans.</p>
            </div>
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-header text-white fw-semibold" style="background:#ff5d17;"><i class="bi bi-link-45deg me-2"></i>Chaîne (acier)</div>
            <div class="card-body small text-muted">
                <p class="mb-1">Présente sur certains moteurs modernes. Plus robuste, en principe pour la durée de vie du moteur.</p>
                <p class="mb-0">Peut nécessiter un remplacement en cas d'usure ou de bruit caractéristique.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-patch-check me-2" style="color:#ff5d17;"></i>Pourquoi nous faire confiance ?</h2>
        <?php
        $atouts = [
            ["bi-book",         "Expertise constructeur",  "Nous consultons les préconisations exactes de votre constructeur pour chaque modèle"],
            ["bi-gem",          "Pièces de qualité",       "Kit distribution de marque (Gates, Dayco, SKF…) adapté à votre motorisation"],
            ["bi-eye",          "Transparence totale",     "Devis détaillé avant intervention, aucune surprise sur la facture"],
            ["bi-award",        "Garantie travaux",        "Intervention garantie, carnet d'entretien mis à jour"],
        ];
        foreach ($atouts as [$icon, $titre, $desc]): ?>
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

<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-arrow-repeat mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Ne jouez pas avec votre moteur</h2>
        <p class="lead opacity-75 mb-4">La courroie de distribution est la pièce la moins chère à entretenir — et la plus coûteuse à négliger. Vérifiez votre échéance dès aujourd'hui.</p>
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
