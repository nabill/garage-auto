<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Courroie de distribution';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" style="color: #ff5d17;font-weight: 700;">Courroie de distribution</h1>
        <h3>La pièce la plus critique de votre moteur — ne négligez jamais son remplacement.</h3>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5" style="margin-bottom:30px">La courroie de distribution synchronise la rotation du vilebrequin et des arbres à cames. Elle assure l'ouverture et la fermeture des soupapes au bon moment. C'est l'une des pièces les plus critiques de votre moteur.</p>
        <p class="fs-5">Si elle casse ou saute, les pistons et les soupapes entrent en collision, provoquant des dégâts moteur souvent irréparables et très coûteux. Ne jamais dépasser l'échéance constructeur.</p>
         <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="margin-top: 15px;font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Vérifier mon échéance de distribution</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/courroie.jpg" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">

    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/courroie3.jpg" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">

    </div>
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;margin-right: 15px !important;
    font-size: 2.5rem;"></i>Quand la remplacer?</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">La fréquence dépend de votre constructeur, mais en général:</p>
      
        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-speedometer2 flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Tous les 80 000 à 120 000 km</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Selon le constructeur et le modèle du moteur</p>
            </div>
        </div>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-calendar3 flex-shrink-0" style="font-size: 3.1rem;
    color: #ff5d17;
    margin-right: 27px;
    margin-top: -5px;
    margin-left: 5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Tous les 5 à 7 ans maximum</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Le caoutchouc se dégrade avec le temps, même sans kilométrage élevé</p>
            </div>
        </div>
      
                     <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Lors de l'achat d'un véhicule d'occasion, vérifiez systématiquement l'historique de la distribution.</p>
   
    </div>
    
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-list-check me-2" style="color:#ff5d17;    margin-right: 15px !important;
    font-size: 2.5rem;"></i>Ce que comprend l'intervention</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">La fréquence dépend de votre constructeur, mais en général:</p>
        
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Remplacement de la courroie de distribution</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Remplacement des tendeurs et galets</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Remplacement de la pompe à eau (si entraînée par la courroie)</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Remplacement du joint de vilebrequin si nécessaire</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Contrôle du moteur avant et après l'intervention</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Mise à jour du carnet d'entretien</li>
        </ul>

        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Nous remplaçons toujours l'ensemble du kit distribution (courroie + tendeurs + galets) pour garantir une fiabilité maximale.</p>
    
    </div>
    <div class="col-md-6">
        <h2 class="mb-4">Courroie ou chaîne de distribution?</h2>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Courroie (caoutchouc)</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Présente sur la majorité des moteurs. Silencieuse, légère. Nécessite un remplacement périodique obligatoire.</p>
            </div>
        </div>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Chaîne (acier)</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Présente sur certains moteurs modernes. Plus robuste, en principe pour la durée de vie du moteur. Peut nécessiter un remplacement en cas d'usure ou de bruit caractéristique.</p>
            </div>
        </div>
        
    </div>
</div>

<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-arrow-repeat mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Ne jouez pas avec votre moteur</h2>
        <p class="lead opacity-75 mb-4">La courroie de distribution est la pièce la moins chère à entretenir — et la plus coûteuse à négliger. Vérifiez votre échéance dès aujourd'hui.</p>
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
