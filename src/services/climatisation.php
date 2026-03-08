<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Climatisation';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" style="color: #ff5d17;font-weight: 700;">Climatisation automobile</h1>
        <h3>Diagnostic complet, recharge et entretien professionnel de votre système de climatisation.</h3>
    </div>
</div>


<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5" style="margin-bottom:30px">
        Une climatisation automobile ne sert pas uniquement à rafraîchir l'habitacle. Elle contribue au confort, à la sécurité (désembuage des vitres) et à la qualité de l'air que vous respirez.
    </p>
        <p class="fs-5">
            Avec le temps, le système perd naturellement du gaz réfrigérant (jusqu'à 10 % par an). Un entretien régulier est indispensable pour maintenir son efficacité et éviter une panne coûteuse.
        </p>
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

 

  

<!-- Quand entretenir + Signes -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;margin-right:15px !important"></i>Quand entretenir sa climatisation?</h2>
       <p class="fs-5 mb-4">Nous recommandons:</p>

       <div class="d-flex flex-column gap-2">

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-calendar3 flex-shrink-0" style="font-size: 3.0rem;color:#ff5d17;margin-right: 30px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Tous les 2 ans</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Recharge préventive du gaz réfrigérant</p>
            </div>
        </div>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-fan flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Tous les ans</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Remplacement du filtre habitacle (pollen)</p>
            </div>
        </div>

         <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-shield-check flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Avant l'été</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Contrôle complet pour rouler sereinement</p>
            </div>
        </div>

         
        </div>


    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;margin-right:15px !important"></i>Signes d'un problème de climatisation</h2>
        <ul class="list-group list-group-flush mb-3" style="font-family: 'Inter UI';
    font-size: 19px; line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>L'air soufflé n'est plus suffisamment froid</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Le temps de refroidissement est anormalement long</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des mauvaises odeurs persistent dans l'habitacle</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>La buée persiste malgré la climatisation</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Le compresseur fait du bruit en s'enclenchant</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Consommation de carburant en hausse</li>
        </ul>

        <p class="fs-5">Un circuit sous-chargé sollicite excessivement le compresseur et peut provoquer sa casse prématurée.</p>
    </div>
</div>

<hr class="my-5">

<!-- Nos prestations -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-list-check me-2" style="color:#ff5d17;margin-right:15px !important"></i>Nos prestations</h2>
    </div>
    <?php
    $prestations = [
        ["bi-cpu",                  "Diagnostic complet",       "Contrôle électronique du circuit de climatisation, lecture des pressions, températures et défauts"],
        ["bi-arrow-repeat",         "Recharge de gaz",          "Récupération, recyclage et recharge du gaz réfrigérant R134a ou R1234yf selon votre véhicule"],
        ["bi-search",               "Détection de fuites",      "Recherche et localisation précise des fuites à l'aide de détecteurs ultrasoniques et UV"],
        ["bi-tools",                "Réparation de fuites",      "Remplacement des joints, raccords ou composants défaillants du circuit"],
        ["bi-gear",                 "Compresseur",              "Diagnostic, réparation ou remplacement du compresseur de climatisation"],
        ["bi-fan",                  "Filtre habitacle",         "Remplacement du filtre à pollen pour un air sain, sans allergènes ni bactéries"],
        ["bi-stars",                "Désinfection circuit",     "Traitement antibactérien du circuit d'air pour éliminer les mauvaises odeurs et les micro-organismes"],
        ["bi-thermometer-half",     "Condenseur & évaporateur", "Contrôle et remplacement du condenseur, de l'évaporateur et du déshydrateur"],
    ];
    foreach ($prestations as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2" style="font-size: 17px;"><?= $titre ?></h6>
                <p class="text-muted small mb-0" style="font-size: 15px;"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<hr class="my-5">

<!-- Une clim bien entretenue + Gaz réfrigérant -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-check-circle me-2" style="color:#ff5d17;margin-right:15px !important"></i>Les bénéfices d'une climatisation entretenue</h2>
        <ul class="list-group list-group-flush" style="font-family: 'Inter UI';
    font-size: 19px; line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Refroidissement optimal de l'habitacle</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Désembuage efficace pour une conduite sécurisée</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Air sain et sans odeurs désagréables</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Longévité accrue du compresseur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Consommation de carburant maîtrisée</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Confort constant toute l'année</li>
        </ul>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-droplet-half me-2" style="color:#ff5d17;margin-right:15px !important"></i>R134a ou R1234yf ?</h2>
        <p class="fs-5 mb-4">Le type de gaz réfrigérant dépend de votre véhicule :</p>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-snow2" style="font-size: 3.0rem;color:#ff5d17;margin-right: 30px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="    line-height: 20px;
    font-weight: 600;
    margin-bottom: 10px !important;
    background-color: #0d6efd;
    color: white;
    width: fit-content;
    padding: 6px;
    border-radius: 8px;">R134a</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Utilisé sur la majorité des véhicules produits avant 2017</p>
            </div>
        </div>


        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-snow2" style="font-size: 3.0rem;color:#ff5d17;margin-right: 30px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="    line-height: 20px;
    font-weight: 600;
    margin-bottom: 10px !important;
    background-color: #0d6efd;
    color: white;
    width: fit-content;
    padding: 6px;
    border-radius: 8px;">R1234yf</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Requis sur les véhicules récents (depuis 2017), plus écologique</p>
            </div>
        </div>




        <p class="fs-5 mb-4">Nous disposons des équipements homologués pour travailler sur les deux types de fluides réfrigérants.</p>
    </div>
</div>

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-thermometer-snow mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Voyagez au frais, en toute sérénité</h2>
        <p class="lead opacity-75 mb-4">Ne laissez pas votre climatisation se dégrader. Un entretien régulier évite les pannes coûteuses et garantit votre confort toute l'année.</p>
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
