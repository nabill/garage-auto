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

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center">
        <i class="bi bi-brush service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <h1>Carrosserie / Peinture</h1>
        <p class="lead">Nous redonnons à votre véhicule son aspect d'origine grâce à notre atelier de carrosserie-peinture.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Réparation de carrosserie suite à un choc</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Débosselage sans peinture (DSP)</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Peinture complète ou partielle</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Retouches et réparations de rayures</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Remplacement de pare-brise et vitrage</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Traitement anti-corrosion</li>
        </ul>
        <p>Nous travaillons avec toutes les compagnies d'assurance et nous vous accompagnons dans vos démarches de sinistre.</p>
    </div>
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body text-center">
                <h5>Carrosserie endommagée ?</h5>
                <p class="text-muted">Obtenez un devis gratuit pour la réparation.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
