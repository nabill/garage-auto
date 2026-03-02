<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Remplacement des plaquettes de frein';
require __DIR__ . '/../includes/header.php';
?>

<!-- Page header -->
<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-slash-circle service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Sécurité prioritaire</span>
        <h1 class="mb-1">Remplacement des plaquettes de frein</h1>
        <p class="lead text-muted">Un système de freinage fiable, c'est votre sécurité et celle de vos passagers.</p>
    </div>
</div>

<!-- À quoi servent les plaquettes -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-question-circle me-2" style="color:#ff5d17;"></i>À quoi servent les plaquettes de frein ?</h2>
        <p class="fs-5">Les plaquettes de frein sont essentielles à votre sécurité. Elles pressent contre les disques pour ralentir ou arrêter votre véhicule.</p>
        <p>Avec le temps, la partie en contact (matériau de friction) s'use. Lorsque l'épaisseur devient trop faible, les plaquettes doivent être remplacées.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Faire vérifier mes freins
        </a>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
                <img src="/assets/img/services/freins1.png" alt="Changement de batterie" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">

        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-shield-fill-exclamation mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Contrôle gratuit</h5>
                <p class="text-muted small mb-3">Lors de chaque entretien, nous vérifions systématiquement l'état de vos freins.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <img src="/assets/img/services/freins.jpg" alt="Freins et plaquettes" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<!-- Quand les changer -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Quand faut-il les changer ?</h2>
        <p>La durée de vie dépend :</p>
        <ul class="list-unstyled mb-4">
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>De votre style de conduite</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>De votre environnement (ville ou autoroute)</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Du poids du véhicule</li>
        </ul>
        <h5 class="mb-3">En moyenne :</h5>
        <div class="d-flex flex-column gap-2">
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-arrow-up-circle flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Plaquettes avant</p>
                        <p class="mb-0 text-muted small">30 000 à 50 000 km</p>
                    </div>
                </div>
            </div>
            <div class="card border-0 bg-light">
                <div class="card-body d-flex align-items-center gap-3 py-3">
                    <i class="bi bi-arrow-down-circle flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                    <div>
                        <p class="mb-0 fw-semibold">Plaquettes arrière</p>
                        <p class="mb-0 text-muted small">60 000 à 90 000 km</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted small mt-3">Un contrôle régulier lors de l'entretien permet de savoir exactement quand les remplacer.</p>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Les signes d'usure</h2>
        <p>Faites vérifier vos freins si vous remarquez :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-volume-up-fill text-danger me-2"></i>Un bruit métallique au freinage</li>
            <li class="list-group-item ps-0"><i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>Une pédale plus molle ou qui descend bas</li>
            <li class="list-group-item ps-0"><i class="bi bi-sign-stop-fill text-danger me-2"></i>Une distance de freinage plus longue</li>
            <li class="list-group-item ps-0"><i class="bi bi-phone-vibrate-fill text-danger me-2"></i>Des vibrations au freinage</li>
            <li class="list-group-item ps-0"><i class="bi bi-rulers text-danger me-2"></i>Une épaisseur de plaquette inférieure à 3 mm</li>
        </ul>
        <div class="card border-0 border-start border-4 border-danger bg-light">
            <div class="card-body py-3">
                <p class="mb-0 small text-muted"><i class="bi bi-exclamation-circle me-1 text-danger"></i>Ignorer ces signes peut endommager les disques et augmenter significativement les coûts de réparation.</p>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Durée de l'intervention -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-stopwatch me-2" style="color:#ff5d17;"></i>Combien de temps dure l'intervention ?</h2>
        <p class="text-muted">Le remplacement des plaquettes prend environ <strong>1 heure</strong>. Nous en profitons pour effectuer un contrôle complet du système de freinage.</p>
    </div>
    <?php
    $controles = [
        ["bi-disc",              "Plaquettes",     "Remplacement des plaquettes usées par des pièces de qualité adaptées à votre véhicule"],
        ["bi-circle",            "Disques",         "Contrôle de l'état, de l'épaisseur et de la planéité des disques"],
        ["bi-droplet-half",      "Liquide de frein","Vérification du niveau et de la qualité du liquide de frein"],
        ["bi-check2-all",        "Système complet", "Test du bon fonctionnement de l'ensemble du circuit de freinage"],
    ];
    foreach ($controles as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
        <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2.2rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2"><?= $titre ?></h6>
                <p class="text-muted small mb-0"><?= $desc ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<hr class="my-5">

<!-- Plaquettes et disques + Liquide de frein -->
<div class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3"><i class="bi bi-link-45deg me-2" style="color:#ff5d17;"></i>Plaquettes et disques : un système lié</h2>
        <p>Les plaquettes et les disques travaillent ensemble. Si l'un est usé, l'autre peut l'être aussi.</p>
        <p>C'est pourquoi nous recommandons parfois de les remplacer ensemble pour garantir :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Un freinage optimal</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Une meilleure dissipation de la chaleur</li>
            <li class="list-group-item ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Une sécurité maximale</li>
        </ul>
    </div>
    <div class="col-md-6">
        <h2 class="mb-3"><i class="bi bi-droplet me-2" style="color:#ff5d17;"></i>Le liquide de frein : à ne pas oublier</h2>
        <p>Le liquide de frein transmet la pression de la pédale aux freins. Avec le temps, il absorbe l'humidité et perd en efficacité.</p>
        <div class="card border-0 bg-light mb-3">
            <div class="card-body d-flex align-items-start gap-3">
                <i class="bi bi-exclamation-triangle-fill flex-shrink-0 text-warning mt-1"></i>
                <p class="mb-0 small">Une pédale molle ou spongieuse peut indiquer que le liquide de frein doit être remplacé. Nous le vérifions systématiquement.</p>
            </div>
        </div>
        <a href="/rendez-vous.php" class="btn btn-sm btn-outline-primary">
            <i class="bi bi-calendar-check me-1"></i>Vérifier mon circuit de freinage
        </a>
    </div>
</div>

<hr class="my-5">

<!-- Pourquoi nous choisir -->
<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-trophy me-2" style="color:#ff5d17;"></i>Pourquoi faire remplacer vos plaquettes chez nous ?</h2>
    </div>
    <?php
    $atouts = [
        ["bi-gem",           "Pièces de qualité",          "Nous utilisons uniquement des plaquettes conformes aux normes constructeur."],
        ["bi-shield-check",  "Sécurité maximale",           "Chaque intervention est réalisée selon des procédures strictes de sécurité."],
        ["bi-search",        "Contrôle complet",            "Au-delà des plaquettes, tout le système de freinage est inspecté."],
        ["bi-lightning",     "Service rapide et transparent","Devis clair avant intervention, résultat en environ 1 heure."],
    ];
    foreach ($atouts as [$icon, $titre, $desc]): ?>
    <div class="col-md-6 col-lg-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi <?= $icon ?> mb-3 d-block" style="font-size:2rem;color:#ff5d17;"></i>
                <h6 class="fw-semibold mb-2"><?= $titre ?></h6>
                <p class="text-muted small mb-0"><?= $desc ?></p>
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
