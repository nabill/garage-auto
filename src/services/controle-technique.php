<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Préparation au contrôle technique';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" 
        style="color: black; font-weight: 700; border-left: 9px solid #ff5d17; padding-left: 15px;">Préparation au contrôle technique</h1>
        <h3>Passez votre contrôle technique sans mauvaise surprise grâce à notre pré-visite complète.</h3>
    </div>
</div>


<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5" style="margin-bottom:30px">
    Le contrôle technique est obligatoire en France pour tous les véhicules de plus de 4 ans, renouvelable tous les 2 ans. Un refus ou une contre-visite entraîne des frais supplémentaires et une immobilisation du véhicule.
</p>
        <p class="fs-5">
            Notre pré-visite de contrôle technique vous permet d'identifier et de corriger les défauts avant de vous présenter au centre agréé — pour passer du premier coup.
        </p>
         <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="margin-top: 15px;font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Prendre rendez-vous</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/controle1.jpg" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">



<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-list-check me-2" style="color:#ff5d17;margin-right: 15px !important"></i>Ce que nous contrôlons</h2>
        <?php
        $points = [
            ["bi-lightbulb",         "Éclairage",        "Phares, feux arrière, stop, clignotants, feux de recul et de brouillard"],
            ["bi-slash-circle",       "Freinage",          "Efficacité des freins avant et arrière, frein à main, liquide de frein"],
            ["bi-eye",                "Visibilité",        "Pare-brise, rétroviseurs, essuie-glaces, lave-glace"],
            ["bi-circle",             "Pneumatiques",      "Usure, pression, état des flancs et de la bande de roulement"],
            ["bi-arrows-move",        "Direction",         "Jeu de direction, rotules, biellettes et géométrie"],
            ["bi-wind",               "Pollution",        "Niveau d'émissions (gaz d'échappement, opacité diesel)"],
            ["bi-shield-check",       "Sécurité passive",  "Ceintures, airbags, système d'attache enfant"],
            ["bi-search",             "Dessous de caisse", "Liaisons au sol, châssis, ligne d'échappement, cardan"],
        ];
        foreach ($points as [$icon, $titre, $desc]): ?>
        <div class="d-flex align-items-start gap-3 mb-3">
            <i class="bi <?= $icon ?> flex-shrink-0 mt-1" style="font-size:1.7rem;color:#ff5d17;"></i>
            <div>
                <p class="mb-0 fw-semibold"><?= $titre ?></p>
                <p class="mb-0 text-muted small" style="font-size:17px;    margin-bottom: 5px !important;"><?= $desc ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;margin-right: 15px !important"></i>Les défauts les plus fréquents</h2>
        <ul class="list-group list-group-flush mb-3" style="font-family: 'Inter UI';
    font-size: 19px; line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Ampoule ou feu défaillant</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Pneus usés ou sous-gonflés</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Freins insuffisants ou déséquilibrés</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Pare-brise fissuré dans la zone de balayage</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Voyant moteur ou antipollution allumé</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Fuite d'huile ou de liquide de frein</li>
            <li class="list-group-item ps-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Émissions polluantes hors norme</li>
        </ul>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-lightbulb flex-shrink-0" style="font-size: 3.0rem;color:#ff5d17;margin-right: 30px;margin-top: 2px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Nous corrigeons les défauts constatés avant votre passage au centre de contrôle, avec votre accord.</p>
            </div>
        </div>
    </div>
</div>

<div style="margin-left:calc(-50vw + 50%);width:100vw;margin-bottom:0;">
    <img src="/assets/img/services/controle2.jpg" alt="Garage Mecano Auto" style="width:100%;height:auto;display:block;">
</div>

<div class="row mb-5 mt-4">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-gear me-2" style="color:#ff5d17;margin-right:15px !important"></i>Comment ça se passe?</h2>
    </div>
    <?php
    $etapes = [
        ["1", "bi-calendar-check",      "Prise de RDV",     "Vous réservez votre créneau en ligne ou par téléphone"],
        ["2", "bi-search",              "Pré-visite",        "Contrôle complet du véhicule sur les mêmes critères que le CT officiel"],
        ["3", "bi-file-earmark-text",   "Rapport",           "Remise d'un rapport détaillant les points conformes et les défauts identifiés"],
        ["4", "bi-wrench-adjustable",   "Réparations",       "Correction des défauts constatés avec votre accord, avant présentation au CT"],
        ["5", "bi-patch-check",         "Contrôle technique","Vous passez au centre de contrôle technique en toute confiance"],
    ];
    foreach ($etapes as [$num, $icon, $titre, $desc]): ?>
    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex gap-3 align-items-start p-4">
                <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width:2.2rem;height:2.2rem;background:#ff5d17;font-size:.9rem;">
                    <?= $num ?>
                </div>
                <div>
                    <h6 class="mb-1 fw-semibold" style="font-size:17px"><?= $titre ?></h6>
                    <p class="mb-0 text-muted small" style="font-size:15px"><?= $desc ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-patch-check mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Passez votre contrôle technique du premier coup</h2>
        <p class="lead opacity-75 mb-4">Anticipez votre contrôle technique avec une pré-visite chez nous. Nous identifions et corrigeons les défauts avant que le centre agréé ne les signale.</p>
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
