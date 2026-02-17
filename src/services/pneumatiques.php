<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Pneumatiques';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Pneumatiques</li>
    </ol>
</nav>

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center">
        <i class="bi bi-circle service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <h1>Pneumatiques</h1>
        <p class="lead">Des pneus en bon état sont essentiels pour votre sécurité. Nous vous proposons un service complet.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Vente de pneumatiques toutes marques et dimensions</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Montage et équilibrage</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Permutation des pneus</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Réparation de crevaison</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Géométrie et parallélisme</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Stockage de pneus hiver/été</li>
        </ul>
        <p>Nous disposons d'un large choix de pneumatiques été, hiver et 4 saisons pour tous types de véhicules.</p>
    </div>
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body text-center">
                <h5>Changement de pneus ?</h5>
                <p class="text-muted">Prenez rendez-vous pour un montage rapide.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
