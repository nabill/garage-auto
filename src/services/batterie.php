<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Changement de Batterie';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" style="color: #ff5d17;font-weight: 700;">Changement de Batterie</h1>
        <h3>Diagnostic et remplacement rapide par des professionnels</h3>
    </div>
</div>


<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5" style="margin-bottom:30px">
            La batterie est essentielle au bon fonctionnement de votre véhicule. Elle permet de démarrer le moteur et alimente tous les équipements électriques.
</p>
        <p class="fs-5">Lorsqu'elle montre des signes de faiblesse, il est préférable d'agir avant la panne.</p>
         <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="margin-top: 15px;font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Prendre rendez-vous</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/empty.png" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6 mt-4 mt-md-0">
        <img src="/assets/img/services/batterie3.png" alt="Entretien et vidange" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;margin-right:15px !important"></i>Quand faut-il changer la batterie?</h2>
        <p class="fs-5 mb-4">Voici les signes les plus courants:</p>
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Démarrage difficile ou moteur qui peine</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Voyant batterie allumé sur le tableau de bord</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Phares ou accessoires moins puissants</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Batterie âgée de plus de 4 à 6 ans</li>
        </ul>
        <p class="fs-5">Ces symptômes peuvent indiquer une batterie faible ou un problème de charge. Le plus sûr reste de faire réaliser un diagnostic complet.</p>
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-info-circle me-2" style="color:#ff5d17;margin-right:15px !important"></i>Le bon réflexe</h2>
        <p class="fs-5 mb-4">Ne pas attendre la panne. Une batterie défaillante peut:</p>
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Vous laisser en panne à tout moment</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Endommager l'alternateur ou le démarreur</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Perturber les systèmes électroniques</li>
        </ul>
     </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4">Peut-on la changer soi-même?</h2>
        <p class="fs-5 mb-4">Même si cela paraît simple, une erreur peut:</p>
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Endommager le système électrique du véhicule</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Effacer des données électroniques sensibles</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Provoquer un court-circuit</li>
        </ul>
    </div>
</div>

<hr class="my-5">

<h4><i class="bi bi-shield-check flex-shrink-0" style="color: green;
    font-size: 30px;
    margin-right: 10px;"></i>Un remplacement professionnel garantit la sécurité et la conformité constructeur de votre véhicule.</h4>

<hr class="my-5">

 

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-battery-charging mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Votre batterie vous inquiète ?</h2>
        <p class="lead opacity-75 mb-4">Ne prenez pas le risque d'une panne. Nos techniciens diagnostiquent et remplacent votre batterie rapidement, avec les pièces adaptées à votre véhicule.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Prendre rendez-vous</p>
                                </button>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
