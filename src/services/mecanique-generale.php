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

<div class="service-detail-header d-flex align-items-center gap-4">
    <i class="bi bi-gear-wide-connected service-detail-icon"></i>
    <div>
        <h1 class="mb-2">Mécanique générale</h1>
        <p class="lead mb-0">Notre équipe de mécaniciens qualifiés prend en charge toutes les réparations mécaniques de votre véhicule.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <div class="service-list">
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Réparation et remplacement de moteur</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Système de freinage (disques, plaquettes, tambours)</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Embrayage et boîte de vitesses</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Distribution et courroie d'accessoire</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Suspension et direction</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Système d'échappement</li>
            </ul>
        </div>
        <p>Nous intervenons sur toutes les marques et tous les modèles de véhicules. Chaque intervention fait l'objet d'un devis détaillé avant réparation.</p>
    </div>
    <div class="col-md-4">
        <div class="card service-cta-card">
            <div class="card-body text-center p-4">
                <h5>Besoin d'une réparation ?</h5>
                <p class="text-muted">Prenez rendez-vous en ligne pour un diagnostic gratuit.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check me-1"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
