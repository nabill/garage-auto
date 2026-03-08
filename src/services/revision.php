<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Révision Voiture Premium';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" style="color: #ff5d17;font-weight: 700;">Révision Voiture Premium</h1>
        <h3>L'entretien complet de votre véhicule par des experts</h3>
    </div>
</div>

<!-- ##### -->
<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5 mb-4" style="line-height: 33px;">Votre véhicule mérite bien plus qu'un simple entretien. Il mérite une révision rigoureuse, conforme aux exigences constructeur, réalisée par des techniciens qualifiés et passionnés.</p>
        <p class="fs-5 mb-4" style="line-height: 33px;">Dans notre garage haut de gamme, chaque révision est effectuée selon les préconisations exactes du constructeur, avec des pièces d'origine ou équivalentes premium, afin de préserver la performance, la sécurité et la valeur de votre véhicule.</p>
        <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="width: 100%; font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Prendre rendez-vous</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <img src="/assets/img/services/premium2.jpg" alt="Entretien et vidange" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;"> 
    </div>
</div>
<!-- ##### -->
 

<div style="margin-left:calc(-50vw + 50%);width:100vw;margin-bottom:30px;">
    <img src="/assets/img/services/premium1.jpg" alt="Garage Mecano Auto" style="width:100%;height:auto;display:block;">
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-question-circle me-2" style="color:#ff5d17;    margin-right: 15px !important;
    font-size: 2.5rem;"></i>Qu'est-ce qu'une révision automobile ?</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">La révision est un entretien complet programmé par le constructeur de votre véhicule. Elle permet de:</p>
        
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Garantir la fiabilité du moteur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Prévenir les pannes coûteuses</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Maintenir la garantie constructeur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Optimiser la consommation et les performances</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Assurer votre sécurité et celle de vos passagers</li>
        </ul>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;">
            <i class="bi bi-speedometer2 mb-3" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -22px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Fréquence recommandée</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Tous les 15 000 à 30 000 km ou une fois par an minimum</p>
            </div>
        </div>

        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Un usage urbain, des trajets courts ou intensifs peuvent nécessiter un suivi plus fréquent.</p>
        
    </div>
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-patch-check me-2" style="color:#ff5d17;margin-right: 15px !important;
    font-size: 2.5rem;"></i>Notre engagement : une révision 100 % conforme constructeur</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">Nous suivons strictement le programme d'entretien constructeur, sans compromis.</p>
        <p class="fs-5 mb-4" style="line-height: 33px;">Chaque révision comprend:</p>
         
           
                
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Vidange avec huile conforme aux normes constructeur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>
Contrôle / remplacement filtre à air</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Contrôle / remplacement filtre carburant (diesel) ou bougies (essence)</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Vérification des niveaux (frein, refroidissement, direction assistée…)</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Inspection des courroies et organes de sécurité</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>
Remplacement du filtre à huile</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Contrôle / remplacement filtre habitacle</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>
Diagnostic électronique complet</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>
Contrôle des freins, pneus, amortisseurs</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Jusqu'à 80+ points de contrôle selon modèle</li>
        </ul>
      
                
        
    </div>
</div>

<hr class="my-5">

<!-- Pourquoi nous choisir -->
<div class="row mb-5">
    <div class="col-md-8">
        <h2 class="mb-3"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Quand faire votre révision ?</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">Vous devez intervenir si:</p>
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-triangle-fill text-warning me-2" style="color: #ff5d17 !important;"></i>Un voyant entretien s'allume</li>
            <li class="list-group-item ps-0"><i class="bi bi-speedometer2 me-2 text-muted" style="color: #ff5d17 !important;"></i>Le kilométrage recommandé est atteint</li>
            <li class="list-group-item ps-0"><i class="bi bi-calendar3 me-2 text-muted" style="color: #ff5d17 !important;"></i>12 mois se sont écoulés depuis la dernière révision</li>
            <li class="list-group-item ps-0"><i class="bi bi-graph-up me-2 text-muted" style="color: #ff5d17 !important;"></i>Vous souhaitez préserver la valeur de revente de votre véhicule</li>
        </ul>


    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card text-white h-100" style="background-color:#ff5d17;">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4" style="font-family: 'Inter UI';">
                <i class="bi bi-award mb-3" style="font-size:5rem;"></i>
                <h4 style="color:white;    font-size: 27px;
    margin-top: 7px;">Qualité garantie</h4>
    <p class="fs-5 mb-4" style="line-height: 33px;color:white;    margin-bottom: 0px !important;
    margin-top: 7px;">Pièces d'origine</p>
    <p class="fs-5 mb-4" style="line-height: 33px;color:white;    margin-bottom: 0px !important;">Techniciens qualifiés</p>
           
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <h2 class="mb-2">Prenez rendez-vous dès maintenant</h2>
        <p class="lead opacity-75 mb-4">Ne laissez pas l'entretien au hasard. Offrez à votre véhicule une révision complète réalisée par des professionnels exigeants.</p>
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
