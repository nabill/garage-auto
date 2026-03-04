<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Entretien / Vidange';
require __DIR__ . '/../includes/header.php';
?>

<!-- Page header -->
<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" style="color: #ff5d17;font-weight: 700;">Entretien / Vidange</h1>
        <!-- <h2>Un entretien régulier est la meilleure protection pour la longévité et les performances de votre véhicule.</h2> -->
        <h3>Un entretien régulier est la meilleure protection pour la longévité et les performances de votre véhicule.</h3>
        <!-- <h4>Un entretien régulier est la meilleure protection pour la longévité et les performances de votre véhicule.</h4>
        <p class="lead text-muted">Un entretien régulier est la meilleure protection pour la longévité et les performances de votre véhicule.</p> -->
    </div>
</div>

<!-- ##### -->
<div class="row mb-5">
    <div class="col-md-6">
        <i class="bi bi-droplet mb-3" style="font-size:3.5rem;color:#ff5d17;"></i>
        <p class="fs-5 mb-4" style="line-height: 33px;margin-top:15px">La vidange est le geste d'entretien le plus important pour votre moteur. Elle consiste à remplacer l'huile usée et le filtre à huile pour garantir une lubrification optimale de l'ensemble des organes moteur.</p>
        <p class="fs-5 mb-4" style="line-height: 33px;">Nous utilisons des huiles et des filtres conformes aux spécifications de votre constructeur pour assurer les meilleures performances et préserver votre garantie.</p>
        <button type="button" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'"
        style="width: 100%; font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    <i class="bi bi-calendar3 me-2" style="font-size: 22px;"></i>
                                    Prendre rendez-vous</p>
                                </button>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <img src="/assets/img/services/vidange-huile-1.png" alt="Entretien et vidange" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;"> 
    </div>
</div>
<!-- ##### -->
 <div class="row mb-5 mt-5" style="margin-top:60px !important">
    <div class="col-md-6 mt-4 mt-md-0 mb-5">
        <img src="/assets/img/services/vidange-huile-2.png" alt="Entretien et vidange" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;"> 
    </div>
    <div class="col-md-6">
        <div class="d-flex">
            <!-- <i class="bi bi-exclamation-triangle mb-3" style="font-size:3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -15px;"></i> -->
            <h2 class="mb-4">Signes d'une huile à changer</h2>
        </div>
        
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0 d-flex" style="padding: 0px; margin-bottom: -15px;"><i class="bi bi-exclamation-circle-fill text-warning me-2" style="font-size: 21px;"></i><p class="fs-5 mb-4" style="line-height: 33px;">Voyant huile ou entretien allumé</p></li>
            <li class="list-group-item ps-0 d-flex" style="padding: 0px; margin-bottom: -15px;"><i class="bi bi-exclamation-circle-fill text-warning me-2" style="font-size: 21px;"></i><p class="fs-5 mb-4" style="line-height: 33px;">Huile noire ou très épaisse sur la jauge</p></li>
            <li class="list-group-item ps-0 d-flex" style="padding: 0px; margin-bottom: -15px;"><i class="bi bi-exclamation-circle-fill text-warning me-2" style="font-size: 21px;"></i><p class="fs-5 mb-4" style="line-height: 33px;">Bruits moteur plus prononcés au démarrage</p></li>
            <li class="list-group-item ps-0 d-flex" style="padding: 0px; margin-bottom: -15px;"><i class="bi bi-exclamation-circle-fill text-warning me-2" style="font-size: 21px;"></i><p class="fs-5 mb-4" style="line-height: 33px;">Consommation d'huile anormalement élevée</p></li>
            <li class="list-group-item ps-0 d-flex" style="padding: 0px; margin-bottom: -15px;"><i class="bi bi-exclamation-circle-fill text-warning me-2" style="font-size: 21px;"></i><p class="fs-5 mb-4" style="line-height: 33px;">Kilométrage ou délai constructeur atteint</p></li>
        </ul>

        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;">
            <i class="bi bi-exclamation-triangle mb-3" style="font-size:2.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <p class="fs-5 mb-4" style="line-height: 33px;">Rouler avec une huile dégradée peut provoquer une usure prématurée du moteur et entraîner des réparations coûteuses.</p>
        </div>
    </div>
</div>
<!-- ##### -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;    margin-right: 15px !important;
    font-size: 2.5rem;"></i>Quand faire la vidange?</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">La fréquence dépend de votre véhicule et de votre usage :</p>
        
        <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;">
            <i class="bi bi-speedometer2 mb-3" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -22px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Tous les 10 000 à 20 000 km</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Selon le constructeur et le type d'huile utilisé</p>
            </div>
        </div>

        <div class="d-flex mt-5" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;">
            <i class="bi bi-calendar3 mb-3" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -17px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Au minimum une fois par an</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Même si le kilométrage n'est pas atteint</p>
            </div>
        </div>

        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Un usage urbain avec de nombreux trajets courts accélère la dégradation de l'huile et nécessite un entretien plus fréquent.</p>
        
    </div>
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-droplet-fill me-2" style="color:#ff5d17;margin-right: 15px !important;
    font-size: 2.5rem;"></i>Le choix de l'huile</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">Toutes les huiles ne se valent pas. Nous sélectionnons rigoureusement l'huile adaptée à votre moteur :</p>
         
           
                <div class="d-flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="width:46px;height: 40px; color: green; margin-top: -10px;  margin-right: 7px; "><g fill="none"><path d="M10 2a8 8 0 1 1 0 16a8 8 0 0 1 0-16zm0 1a7 7 0 1 0 0 14a7 7 0 0 0 0-14zm3.358 4.646a.5.5 0 0 1 .058.638l-.058.07l-4.004 4.004a.5.5 0 0 1-.638.058l-.07-.058l-2-2a.5.5 0 0 1 .638-.765l.07.058L9 11.298l3.651-3.652a.5.5 0 0 1 .707 0z" fill="currentColor"></path></g></svg>
                    <p class="fs-5" style="line-height: 27px;font-weight: 400;margin-bottom:10px !important">
                        Viscosité conforme aux spécifications constructeur
                    </p>
                </div>
          
                 <div class="d-flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="width:46px;height: 40px; color: green; margin-top: -10px;  margin-right: 7px; "><g fill="none"><path d="M10 2a8 8 0 1 1 0 16a8 8 0 0 1 0-16zm0 1a7 7 0 1 0 0 14a7 7 0 0 0 0-14zm3.358 4.646a.5.5 0 0 1 .058.638l-.058.07l-4.004 4.004a.5.5 0 0 1-.638.058l-.07-.058l-2-2a.5.5 0 0 1 .638-.765l.07.058L9 11.298l3.651-3.652a.5.5 0 0 1 .707 0z" fill="currentColor"></path></g></svg>
                    <p class="fs-5 mb-5" style="line-height: 27px;font-weight: 400;margin-bottom:10px !important">
                        Normes ACEA et API respectées
                    </p>
                </div>
         
                 <div class="d-flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="width:46px;height: 40px; color: green; margin-top: -10px;  margin-right: 7px; "><g fill="none"><path d="M10 2a8 8 0 1 1 0 16a8 8 0 0 1 0-16zm0 1a7 7 0 1 0 0 14a7 7 0 0 0 0-14zm3.358 4.646a.5.5 0 0 1 .058.638l-.058.07l-4.004 4.004a.5.5 0 0 1-.638.058l-.07-.058l-2-2a.5.5 0 0 1 .638-.765l.07.058L9 11.298l3.651-3.652a.5.5 0 0 1 .707 0z" fill="currentColor"></path></g></svg>
                    <p class="fs-5 mb-5" style="line-height: 27px;font-weight: 400;margin-bottom:10px !important">
                        Homologations constructeur (VW, BMW, Mercedes, PSA…)
                    </p>
                </div>
          
                 <div class="d-flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="width:46px;height: 40px; color: green; margin-top: -10px;  margin-right: 7px; "><g fill="none"><path d="M10 2a8 8 0 1 1 0 16a8 8 0 0 1 0-16zm0 1a7 7 0 1 0 0 14a7 7 0 0 0 0-14zm3.358 4.646a.5.5 0 0 1 .058.638l-.058.07l-4.004 4.004a.5.5 0 0 1-.638.058l-.07-.058l-2-2a.5.5 0 0 1 .638-.765l.07.058L9 11.298l3.651-3.652a.5.5 0 0 1 .707 0z" fill="currentColor"></path></g></svg>
                    <p class="fs-5 mb-5" style="line-height: 27px;font-weight: 400;margin-bottom:10px !important">
                        Adaptée essence, diesel et hybride
                    </p>
                </div>
      
                
        
    </div>
</div>
<!-- ##### -->

<!-- CTA final -->
<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-droplet-half mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Votre prochaine vidange est pour bientôt ?</h2>
        <p class="lead opacity-75 mb-4">Prenez rendez-vous en quelques clics. Intervention rapide, huile et filtre conformes constructeur, carnet mis à jour.</p>
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
