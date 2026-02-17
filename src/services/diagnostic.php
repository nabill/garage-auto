<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Diagnostic électronique';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Diagnostic électronique</li>
    </ol>
</nav>

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center">
        <i class="bi bi-cpu service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <h1>Diagnostic électronique</h1>
        <p class="lead">Notre outil de diagnostic de dernière génération permet d'identifier rapidement les pannes électroniques.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Lecture et effacement des codes défaut</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Diagnostic moteur complet</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Diagnostic système ABS et ESP</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Diagnostic airbags et sécurité</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Diagnostic boîte automatique</li>
            <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Reprogrammation calculateur</li>
        </ul>
        <p>Grâce à notre équipement professionnel, nous pouvons intervenir sur l'ensemble des systèmes électroniques de votre véhicule, toutes marques confondues.</p>
    </div>
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body text-center">
                <h5>Voyant allumé ?</h5>
                <p class="text-muted">Faites diagnostiquer votre véhicule rapidement.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
