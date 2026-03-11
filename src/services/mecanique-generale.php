<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Mécanique générale';
require __DIR__ . '/../includes/header.php';
?>

<!-- Page header -->
<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" 
        style="color: black; font-weight: 700; border-left: 9px solid #ff5d17; padding-left: 15px;">Mécanique générale</h1>
        <h3>Réparation, entretien et remise en état de tous les organes mécaniques de votre véhicule.</h3>
    </div>
</div>

<!-- ##### -->
<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5 mb-4" style="line-height: 33px;">Notre équipe de mécaniciens qualifiés prend en charge toutes les réparations mécaniques, des plus courantes aux plus complexes. Nous intervenons sur toutes les marques et tous les modèles de véhicules.</p>
        <p class="fs-5 mb-4" style="line-height: 33px;">Chaque intervention fait l'objet d'un devis détaillé et transparent avant réparation. Aucun travail supplémentaire n'est effectué sans votre accord.</p>
        <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="width: 100%; font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Prendre rendez-vous</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <img src="/assets/img/services/mecanique1.jpg" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;"> 
    </div>
</div>
<!-- ##### -->
 

<hr class="my-5">

<div class="row mb-4">
    <div class="col-12">
        <h2>Nos prestations</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">Du moteur à la suspension, nous maîtrisons l'ensemble de la mécanique automobile.</p>
        </div>
</div>

<!-- Nos prestations -->
<div class="row mb-5" style="    font-size: 17px;">
    <div class="col-12 mb-3">
        
    </div>
    <?php
    $prestations = [
        ["bi-speedometer",          "Moteur",                   "Réparation, révision et remplacement moteur. Joints, culasse, pistons, distribution."],
        ["bi-slash-circle",         "Freinage",                 "Plaquettes, disques, tambours, étriers, maître-cylindre et liquide de frein."],
        ["bi-arrow-repeat",         "Embrayage",                "Remplacement du kit embrayage (disque, plateau, butée) sur toutes motorisations."],
        ["bi-gear",                 "Boîte de vitesses",        "Réparation et remplacement de boîtes manuelles, automatiques et robotisées."],
        ["bi-fan",                  "Distribution",             "Remplacement de la courroie ou chaîne de distribution, tendeurs et galets."],
        ["bi-arrows-move",          "Suspension & direction",   "Amortisseurs, ressorts, rotules, biellettes, cardans et crémaillère de direction."],
        ["bi-wind",                 "Échappement",              "Remplacement du pot d'échappement, catalyseur, filtre à particules (FAP)."],
        ["bi-thermometer-half",     "Refroidissement",          "Radiateur, pompe à eau, thermostat, durites — prévention de la surchauffe moteur."],
    ];
    foreach ($prestations as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2" style="font-size: 17px;"><?= $titre ?></h6>
                <p class="text-muted small mb-0"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div style="margin-left:calc(-50vw + 50%);width:100vw;margin-bottom:0;">
    <img src="/assets/img/services/mecanique2.jpg" alt="Garage Mecano Auto" style="width:100%;height:auto;display:block;">
</div>

<!-- Signes d'alerte + Notre méthode -->
<div class="row mb-5 mt-4">
    <div class="col-md-6 mb-4 mb-md-0" style="font-size:17px">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Signes qui doivent alerter</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">Consultez-nous dès que vous remarquez :</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Un voyant moteur, huile ou température allumé</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des bruits suspects (claquements, grincements, sifflements)</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une perte de puissance ou des ratés moteur</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une consommation de carburant ou d'huile anormale</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Des vibrations inhabituelles dans le volant ou le châssis</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Une difficulté à passer les rapports ou à embrayer</li>
        </ul>
        <p class="mt-3">Agir tôt évite souvent des réparations plus coûteuses.</p>
    </div>
    <div class="col-md-6" style="font-size: 21px;">
        <h2 class="mb-4"><i class="bi bi-patch-check me-2" style="color:#ff5d17;"></i>Notre méthode</h2>
        <?php
        $methode = [
            ["1", "Diagnostic",   "Identification précise de la panne par nos techniciens et notre équipement électronique"],
            ["2", "Devis",        "Proposition détaillée et transparente avant tout travaux, sans engagement"],
            ["3", "Réparation",   "Intervention avec des pièces de qualité, conformes aux normes constructeur"],
            ["4", "Contrôle",     "Vérification complète du véhicule avant restitution"],
        ];
        foreach ($methode as [$num, $titre, $desc]): ?>
        <div class="d-flex gap-3 mb-3 align-items-start">
            <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width:2.2rem;height:2.2rem;background:#ff5d17;font-size:20px;">
                <?= $num ?>
            </div>
            <div>
                <p class="mb-0 fw-semibold"><?= $titre ?></p>
                <p class="mb-0 text-muted small"><?= $desc ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<hr class="my-5">

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-gear-wide-connected mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Un problème mécanique ? On s'en occupe.</h2>
        <p class="lead opacity-75 mb-4">Quelle que soit la panne, nos mécaniciens qualifiés trouvent la solution et remettent votre véhicule sur la route dans les meilleurs délais.</p>
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
