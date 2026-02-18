<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Climatisation';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Climatisation</li>
    </ol>
</nav>

<div class="service-detail-header d-flex align-items-center gap-4">
    <i class="bi bi-snow service-detail-icon"></i>
    <div>
        <h1 class="mb-2">Climatisation</h1>
        <p class="lead mb-0">Un système de climatisation bien entretenu assure votre confort et la qualité de l'air dans l'habitacle.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <div class="service-list">
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Recharge de gaz réfrigérant</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Diagnostic du circuit de climatisation</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Détection et réparation de fuites</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Remplacement du compresseur</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Nettoyage et désinfection du circuit</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Remplacement du filtre d'habitacle</li>
            </ul>
        </div>
        <p>Nous recommandons un entretien de la climatisation au moins une fois par an pour garantir son bon fonctionnement et la qualité de l'air.</p>
    </div>
    <div class="col-md-4">
        <div class="card service-cta-card">
            <div class="card-body text-center p-4">
                <h5>Clim en panne ?</h5>
                <p class="text-muted">Faites contrôler votre système de climatisation.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check me-1"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
