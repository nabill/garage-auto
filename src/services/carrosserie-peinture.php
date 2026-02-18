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

<div class="service-detail-header d-flex align-items-center gap-4">
    <i class="bi bi-brush service-detail-icon"></i>
    <div>
        <h1 class="mb-2">Carrosserie / Peinture</h1>
        <p class="lead mb-0">Nous redonnons à votre véhicule son aspect d'origine grâce à notre atelier de carrosserie-peinture.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <div class="service-list">
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Réparation de carrosserie suite à un choc</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Débosselage sans peinture (DSP)</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Peinture complète ou partielle</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Retouches et réparations de rayures</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Remplacement de pare-brise et vitrage</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Traitement anti-corrosion</li>
            </ul>
        </div>
        <p>Nous travaillons avec toutes les compagnies d'assurance et nous vous accompagnons dans vos démarches de sinistre.</p>
    </div>
    <div class="col-md-4">
        <div class="card service-cta-card">
            <div class="card-body text-center p-4">
                <h5>Carrosserie endommagée ?</h5>
                <p class="text-muted">Obtenez un devis gratuit pour la réparation.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check me-1"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
