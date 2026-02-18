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

<div class="service-detail-header d-flex align-items-center gap-4">
    <i class="bi bi-cpu service-detail-icon"></i>
    <div>
        <h1 class="mb-2">Diagnostic électronique</h1>
        <p class="lead mb-0">Notre outil de diagnostic de dernière génération permet d'identifier rapidement les pannes électroniques.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h3>Nos prestations</h3>
        <div class="service-list">
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Lecture et effacement des codes défaut</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Diagnostic moteur complet</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Diagnostic système ABS et ESP</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Diagnostic airbags et sécurité</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Diagnostic boîte automatique</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Reprogrammation calculateur</li>
            </ul>
        </div>
        <p>Grâce à notre équipement professionnel, nous pouvons intervenir sur l'ensemble des systèmes électroniques de votre véhicule, toutes marques confondues.</p>
    </div>
    <div class="col-md-4">
        <div class="card service-cta-card">
            <div class="card-body text-center p-4">
                <h5>Voyant allumé ?</h5>
                <p class="text-muted">Faites diagnostiquer votre véhicule rapidement.</p>
                <a href="/rendez-vous.php" class="btn btn-primary"><i class="bi bi-calendar-check me-1"></i> Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
