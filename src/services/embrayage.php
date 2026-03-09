<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Embrayage';
require __DIR__ . '/../includes/header.php';
?>

<div class="row align-items-center mb-4">
    <div class="col-12">
        <h1 class="mb-3" 
        style="color: black; font-weight: 700; border-left: 9px solid #ff5d17; padding-left: 15px;">Remplacement d'embrayage</h1>
        <h3>Retrouvez des passages de vitesse fluides et une transmission optimale avec un embrayage en parfait état.</h3>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <p class="fs-5" style="margin-bottom:30px">L'embrayage est le lien mécanique entre votre moteur et votre boîte de vitesses. Il s'use progressivement à chaque démarrage et changement de rapport. Lorsqu'il est usé, les passages de vitesse deviennent difficiles et la puissance moteur n'est plus transmise correctement.
</p>
        <p class="fs-5">Le remplacement d'embrayage est une intervention de fond qui nécessite expertise et précision. Nos mécaniciens spécialisés réalisent l'opération avec le kit complet adapté à votre véhicule.</p>
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


<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;    margin-right: 15px !important;
    font-size: 2.5rem;"></i>Signes d'un embrayage usé</h2>
        <p class="fs-5 mb-4" style="line-height: 33px;">La durée de vie dépend:</p>
        
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Patinage de l'embrayage (régime moteur monte sans accélération)</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Difficulté ou dureté à passer les vitesses</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Bruit sourd ou grincement à la pédale d'embrayage</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Vibrations ou à-coups lors du relâchement de la pédale</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Odeur de brûlé lors des démarrages</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Point de patinage très haut (pédale presque relevée)</li>
        </ul>

        <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Continuer à rouler avec un embrayage usé peut endommager la boîte de vitesses ou le volant moteur.</p>
      
         <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-tools flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">Kit complet</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Nous remplaçons toujours l'ensemble du kit (disque + plateau + butée) pour une fiabilité maximale.</p>
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;margin-right: 15px !important;
    font-size: 2.5rem;"></i>Durée de vie & facteurs d'usure</h2>

    <div class="d-flex" style="background-color:#f4f4f4;padding: 20px;border-radius: 15px;padding-top: 25px;margin-bottom:20px">
            <i class="bi bi-speedometer2 flex-shrink-0" style="font-size: 3.5rem;color:#ff5d17;margin-right: 25px;margin-top: -5px;"></i>
            <div>
                <p class="fs-5 mb-4" style="line-height: 20px;font-weight: 600;margin-bottom:10px !important">80 000 à 150 000 km en moyenne</p>
                <p class="fs-5 mb-4" style="line-height: 30px;font-weight: 400;margin-bottom:10px !important">Variable selon le style de conduite et l'usage</p>
            </div>
        </div>

        <p class="fs-5 mb-4" style="line-height: 33px;">L'embrayage s'use plus vite en cas de:</p>
           
                
        <ul class="list-group list-group-flush mb-4" style="font-family: 'Inter UI';
    font-size: 19px;    line-height: 25px;">
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Conduite urbaine avec nombreux démarrages</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Remorquage fréquent ou charge lourde</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Habitude de garder le pied sur la pédale</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Conduite sportive ou en montagne</li>
        </ul>
      
                     <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Ignorer ces signes peut endommager les disques et augmenter significativement les coûts de réparation.</p>
   
        
    </div>
</div>


<hr class="my-5">

<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-patch-check me-2" style="color:#ff5d17;margin-right:15px !important""></i>Pourquoi remplacer le kit complet ?</h2>
        <p>Un kit d'embrayage comprend trois composants qui travaillent ensemble:</p>
    </div>
    <div class="">
        <div class="row g-3">
            <?php
            $composants = [
                ["bi-disc",      "Disque d'embrayage",   "S'use au fil des utilisations. C'est la pièce principale à remplacer."],
                ["bi-circle",    "Plateau d'embrayage",  "Presse le disque. Si usé ou déformé, il accélère la re-usure d'un nouveau disque."],
                ["bi-cpu",       "Butée d'embrayage",    "Actionne le mécanisme à chaque appui sur la pédale. Usure mécanique progressive."],
            ];
            foreach ($composants as [$icon, $nom, $desc]): ?>
            <div class="col-12 col-md-6 col-lg-3" style="font-family:'inter ui'">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body py-4">
                        <i class="bi <?= $icon ?> mb-2 d-block" style="font-size:2.5rem;color:#ff5d17;"></i>
                        <h6 class="fw-semibold mb-2" style="font-size:17px"><?= $nom ?></h6>
                        <p class="text-muted small mb-0" style="font-size:15px"><?= $desc ?></p>
                    </div>
                </div>
            </div>

            
            <?php endforeach; ?>

            <div class="col-12 col-md-6 col-lg-3 card text-white h-100" style="background-color:#ff5d17;">
                <div class="card-body text-center d-flex flex-column justify-content-center p-4" style="font-family: 'Inter UI';">
                <i class="bi bi-award mb-3" style="font-size:5rem;"></i>
    <p class="fs-5 mb-4" style="line-height: 33px;color:white;    margin-bottom: 0px !important;font-size: 19px !important;">Pièces adaptées</p>
    <p class="fs-5 mb-4" style="line-height: 33px;color:white;    margin-bottom: 0px !important;font-size: 19px !important;">Garantie pièces et la main-d'œuvre</p>
           
            </div>
            </div>
        </div>

          <p class="fs-5 mb-4 mt-4" style="line-height: 33px;">Remplacer uniquement le disque sans changer le plateau ni la butée expose au risque de re-usure rapide et d'une nouvelle intervention prématurée.</p>

    </div>
    
</div>



<?php require __DIR__ . '/../includes/footer.php'; ?>
