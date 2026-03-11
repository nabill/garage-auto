<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Diagnostic électronique';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" 
        style="color: black; font-weight: 700; border-left: 9px solid #ff5d17; padding-left: 15px;">Diagnostic électronique</h1>
        <h3>Identification précise et rapide de toutes les pannes grâce à notre équipement de dernière génération.</h3>
    </div>
</div>


<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5" style="margin-bottom:30px">
    Un voyant allumé, une panne incompréhensible, un comportement anormal de votre véhicule ? Le diagnostic électronique est la première étape incontournable pour identifier la cause exacte du problème.    
    </p>
        <p class="fs-5">
            Nos techniciens utilisent des outils de diagnostic professionnels compatibles avec toutes les marques et tous les modèles. En quelques minutes, nous lisons l'ensemble des calculateurs de votre véhicule et identifions précisément l'origine de la panne.
        </p>
         <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="margin-top: 15px;font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Prendre rendez-vous</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/diagnostic3.jpg" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<!-- Quand faire un diagnostic -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;margin-right: 15px !important"></i>Quand faire un diagnostic?</h2>
        <p class="fs-5 mb-4">Ne tardez pas à consulter si vous observez:</p>
        <ul class="list-group list-group-flush mb-3" style="font-family: 'Inter UI';
    font-size: 19px; line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un voyant moteur, ABS, ESP ou airbag allumé</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une consommation de carburant anormalement élevée</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des ratés moteur ou perte de puissance</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un comportement instable (freinage, direction, boîte)</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un démarrage difficile ou des coupures moteur</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>La préparation à un contrôle technique</li>
        </ul>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-lightbulb me-2" style="color:#ff5d17;margin-right: 15px !important"></i>Pourquoi ne pas ignorer un voyant?</h2>
        <p class="fs-5 mb-4">Un voyant allumé peut signaler un défaut mineur comme un problème majeur. Ignorer l'alerte peut:</p>
        <ul class="list-group list-group-flush mb-3" style="font-family: 'Inter UI';
    font-size: 19px; line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Aggraver une panne et multiplier les coûts</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Entraîner un refus au contrôle technique</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Compromettre votre sécurité sur la route</li>
        </ul>

       
    </div>
</div>

<div style="margin-left:calc(-50vw + 50%);width:100vw;margin-bottom:0;">
    <img src="/assets/img/services/diagnostic2.jpg" alt="Garage Mecano Auto" style="width:100%;height:auto;display:block;">
</div>

<!-- Nos prestations -->
<div class="row mb-5 mt-4">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-list-check me-2" style="color:#ff5d17;margin-right:15px !important"></i>Nos prestations de diagnostic</h2>
        <p class="fs-5 mb-4">Nous intervenons sur l'ensemble des systèmes électroniques de votre véhicule, toutes marques confondues.</p>
    </div>
    <?php
    $prestations = [
        ["bi-file-earmark-code",    "Lecture & effacement",      "Lecture et effacement des codes défaut (DTC) sur tous les calculateurs"],
        ["bi-engine",               "Diagnostic moteur",          "Analyse complète du calculateur moteur : injection, allumage, dépollution"],
        ["bi-slash-circle",         "ABS & ESP",                  "Diagnostic des systèmes de freinage et de stabilité électronique"],
        ["bi-person-fill-exclamation","Airbags & sécurité",       "Contrôle du calculateur airbag et des ceintures de sécurité pyrotechniques"],
        ["bi-gear-wide-connected",  "Boîte automatique",          "Diagnostic et paramétrage des boîtes automatiques et robotisées"],
        ["bi-broadcast",            "Reprogrammation",            "Mise à jour et reprogrammation des calculateurs constructeur"],
        ["bi-thermometer-half",     "Climatisation",              "Diagnostic du circuit de climatisation et du module de gestion thermique"],
        ["bi-battery-half",         "Électricité & charge",       "Vérification du circuit de charge, batterie et réseau de bord"],
    ];
    foreach ($prestations as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2" style="font-size:17px"><?= $titre ?></h6>
                <p class="text-muted small mb-0" style="font-size:15px"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<hr class="my-5">

<!-- Nos engagements -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-patch-check me-2" style="color:#ff5d17;margin-right:15px !important"></i>Nos engagements</h2>
    </div>
    <?php
    $engagements = [
        ["bi-tools",             "Équipement professionnel",  "Valise de diagnostic dernière génération, compatible toutes marques"],
        ["bi-person-check",      "Techniciens qualifiés",     "Personnel formé aux dernières technologies embarquées"],
        ["bi-file-earmark-check","Rapport transparent",       "Résultats clairs, expliqués sans jargon technique"],
        ["bi-hand-thumbs-up",    "Aucune surprise",           "Aucune réparation effectuée sans votre accord préalable"],
    ];
    foreach ($engagements as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
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
        <i class="bi bi-cpu mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Un voyant allumé ? Ne tardez pas.</h2>
        <p class="lead opacity-75 mb-4">Plus tôt le diagnostic est réalisé, plus vite le problème est résolu — et moins la réparation coûte cher.</p>
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
