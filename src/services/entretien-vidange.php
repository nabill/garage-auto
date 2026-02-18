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

<div class="service-detail-header d-flex align-items-center gap-4">
    <i class="bi bi-droplet-half service-detail-icon"></i>
    <div>
        <h1 class="mb-2">Entretien / Vidange</h1>
        <p class="lead mb-0">Un entretien régulier est essentiel pour la longévité et les performances de votre véhicule.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <div class="service-list">
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Vidange moteur et remplacement du filtre à huile</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Remplacement des filtres (air, habitacle, carburant)</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Contrôle des niveaux (liquide de refroidissement, frein, direction)</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Remplacement des bougies d'allumage</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Révision complète selon le carnet d'entretien constructeur</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Contrôle visuel complet du véhicule</li>
            </ul>
        </div>
        <p>Nous utilisons des huiles et des pièces de qualité, conformes aux préconisations constructeur, pour garantir les meilleures performances de votre véhicule.</p>
    </div>
    <div class="col-md-4">
        <div class="card service-cta-card">
            <div class="card-body text-center p-4">
                <h5>Entretien à prévoir ?</h5>
                <p class="text-muted">Planifiez votre prochaine révision en quelques clics.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check me-1"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
