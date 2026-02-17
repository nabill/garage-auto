<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Mécanique générale';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Mécanique générale</li>
    </ol>
</nav>

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center">
        <i class="bi bi-gear-wide-connected service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <h1>Mécanique générale</h1>
        <p class="lead">Notre équipe de mécaniciens qualifiés prend en charge toutes les réparations mécaniques de votre véhicule.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Réparation et remplacement de moteur</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Système de freinage (disques, plaquettes, tambours)</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Embrayage et boîte de vitesses</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Distribution et courroie d'accessoire</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Suspension et direction</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Système d'échappement</li>
        </ul>
        <p>Nous intervenons sur toutes les marques et tous les modèles de véhicules. Chaque intervention fait l'objet d'un devis détaillé avant réparation.</p>
    </div>
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body text-center">
                <h5>Besoin d'une réparation ?</h5>
                <p class="text-muted">Prenez rendez-vous en ligne pour un diagnostic gratuit.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
