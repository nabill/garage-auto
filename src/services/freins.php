<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Remplacement des plaquettes de frein';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" style="color: #ff5d17;font-weight: 700;">Plaquettes de frein</h1>
        <h3>Un système de freinage fiable, c'est votre sécurité et celle de vos passagers.</h3>
    </div>
</div>

<!-- À quoi servent les plaquettes -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-3">À quoi servent les plaquettes de frein?</h2>
        <p class="fs-5">Les plaquettes de frein sont essentielles à votre sécurité. Elles pressent contre les disques pour ralentir ou arrêter votre véhicule.</p>
        <p class="fs-5">Avec le temps, la partie en contact (matériau de friction) s'use. Lorsque l'épaisseur devient trop faible, les plaquettes doivent être remplacées.</p>
         <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="margin-top: 15px;font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Faire vérifier mes freins</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/freins1.png" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">

    </div>
</div>


<hr class="my-5">




<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;    margin-right: 15px !important;
    font-size: 2.5rem;"></i>Quand faut-il les changer?</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">La durée de vie dépend:</p>
        
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>De votre style de conduite</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>De votre environnement (ville ou autoroute)</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Du poids du véhicule</li>
        </ul>

        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">En moyenne:</p>
        
        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-arrow-up-circle flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Plaquettes avant</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">30 000 à 50 000 km</p>
            </div>
        </div>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;">
            <i class="bi bi-arrow-down-circle flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Plaquettes arrière</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">60 000 à 90 000 km</p>
            </div>
        </div>

        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Un contrôle régulier lors de l'entretien permet de savoir exactement quand les remplacer.</p>
        
    </div>
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;margin-right: 15px !important;
    font-size: 2.5rem;"></i>Les signes d'usure</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">Faites vérifier vos freins si vous remarquez:</p>
           
                
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Un bruit métallique au freinage</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Une pédale plus molle ou qui descend bas</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Une distance de freinage plus longue</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Des vibrations au freinage</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Une épaisseur de plaquette inférieure à 3 mm</li>
        </ul>
      
                     <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Ignorer ces signes peut endommager les disques et augmenter significativement les coûts de réparation.</p>
   
        
    </div>
</div>

<div style="margin-left:calc(-50vw + 50%);width:100vw;margin-bottom:30px;">
    <img src="/assets/img/services/freins2.png" alt="Garage Mecano Auto" style="width:100%;height:auto;display:block;">
</div>





 
<!-- Durée de l'intervention -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2 class="mb-4"><i class="bi bi-stopwatch me-2" style="color:#ff5d17;    margin-right: 15px !important;
    font-size: 2.5rem;"></i>Combien de temps dure l'intervention?</h2>

       <p class="fs-5 mb-4" style="line-height: 33px;">Le remplacement des plaquettes prend environ <strong>1 heure</strong>. Nous en profitons pour effectuer un contrôle complet du système de freinage.</p>
       </div>
    <?php
    $controles = [
        ["bi-disc",              "Plaquettes",     "Remplacement des plaquettes usées par des pièces de qualité adaptées à votre véhicule"],
        ["bi-circle",            "Disques",         "Contrôle de l'état, de l'épaisseur et de la planéité des disques"],
        ["bi-droplet-half",      "Liquide de frein","Vérification du niveau et de la qualité du liquide de frein"],
        ["bi-check2-all",        "Système complet", "Test du bon fonctionnement de l'ensemble du circuit de freinage"],
    ];
    foreach ($controles as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3" style="font-family: 'inter ui';">
        <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2" style="font-size:17px"><?= $titre ?></h6>
                <p class="text-muted small mb-0" style="font-size:15px"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>



<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-slash-circle mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Vos freins méritent toute votre attention</h2>
        <p class="lead opacity-75 mb-4">N'attendez pas un signe alarmant. Faites vérifier votre système de freinage par nos techniciens et roulez en toute sécurité.</p>
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
