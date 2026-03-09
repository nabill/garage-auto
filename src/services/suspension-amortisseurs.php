<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Suspension / Amortisseurs';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" 
        style="color: black; font-weight: 700; border-left: 9px solid #ff5d17; padding-left: 15px;">Suspension / Amortisseurs</h1>
        <h3>Un système de suspension en bon état, c'est confort, sécurité et maîtrise de votre véhicule.</h3>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5" style="margin-bottom:30px">
            La suspension absorbe les irrégularités de la route et maintient vos pneus en contact permanent avec le sol. Des amortisseurs défaillants dégradent la tenue de route, augmentent la distance de freinage et accélèrent l'usure des pneumatiques.
        </p>
        <p class="fs-5">
            Nos techniciens diagnostiquent l'ensemble de votre train roulant et vous proposent les réparations adaptées avec un devis clair avant toute intervention.
        </p>
         <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="margin-top: 15px;font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Faire vérifier ma suspension
        </p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/empty.png" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">

    </div>
</div>



 

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;    margin-right: 15px !important;"></i>Signes d'une suspension défaillante</h2>
        <ul class="list-group list-group-flush mb-3" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Le véhicule plonge excessivement au freinage</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Rebonds prolongés après un dos-d'âne</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Bruits de claquements ou craquements dans les virages</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Vibrations dans le volant ou le châssis</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Usure irrégulière des pneus</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Véhicule qui tire d'un côté</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Confort de conduite dégradé sur route normale</li>
        </ul>
        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">
            Des amortisseurs usés peuvent augmenter la distance de freinage de 20 % ou plus.</p>
    </div>
    <div class="col-md-6 mt-4 mt-md-0" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
        <h2 class="mb-4"><i class="bi bi-list-check me-2" style="color:#ff5d17;    margin-right: 15px !important;"></i>Nos prestations</h2>
        <?php
        $prestations = [
            ["bi-arrows-vertical",  "Amortisseurs",      "Diagnostic et remplacement des amortisseurs avant et arrière (par essieu)"],
            ["bi-circle",           "Ressorts",           "Contrôle et remplacement des ressorts de suspension affaissés ou cassés"],
            ["bi-link-45deg",       "Rotules & biellettes","Remplacement des rotules de suspension et biellettes de barre stabilisatrice"],
            ["bi-cpu",              "Silent-blocs",       "Remplacement des silent-blocs de triangle, berceau et barre stabilisatrice"],
            ["bi-arrows-move",      "Cardans",            "Diagnostic et remplacement des cardans et joints homocinétiques"],
            ["bi-rulers",           "Géométrie",          "Contrôle et réglage du parallélisme après toute intervention sur la suspension"],
        ];
        foreach ($prestations as [$icon, $titre, $desc]): ?>
        <div class="d-flex align-items-start gap-3 mb-3">
            <i class="bi <?= $icon ?> flex-shrink-0 mt-1" style="font-size:1.9rem;color:#ff5d17;"></i>
            <div>
                <p class="mb-0 fw-semibold"><?= $titre ?></p>
                <p class="mb-0 text-muted small"><?= $desc ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-clock-history me-2" style="color:#ff5d17;    margin-right: 15px !important;"></i>Durée de vie des amortisseurs</h2>
        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">En général, les amortisseurs doivent être contrôlés :</p>
        <div class="d-flex flex-column gap-2">

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-speedometer2 flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Tous les 50 000 à 80 000 km</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Selon l'usage et la qualité des routes</p>
            </div>
        </div>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-search flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">À chaque contrôle technique</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Un test de suspension est réalisé en centre agréé</p>
            </div>
        </div>

         
        </div>
        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Nous recommandons le remplacement par paire (avant ou arrière) pour un comportement homogène du véhicule.</p>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-rulers me-2" style="color:#ff5d17;    margin-right: 15px !important;"></i>L'importance de la géométrie</h2>
        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Après tout remplacement de pièces de suspension, un réglage de géométrie est indispensable pour :</p>
        <ul class="list-group list-group-flush mb-3" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Éviter l'usure prématurée des pneus</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Restaurer une tenue de route optimale</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Réduire la consommation de carburant</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Garantir la sécurité en virage et au freinage</li>
        </ul>
    </div>
</div>

<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-arrows-vertical mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Votre confort et votre sécurité commencent par la suspension</h2>
        <p class="lead opacity-75 mb-4">Ne laissez pas une suspension défaillante compromettre votre sécurité sur la route. Faites inspecter votre train roulant par nos experts.</p>
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
