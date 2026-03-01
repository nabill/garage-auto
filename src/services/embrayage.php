<?php
require_once __DIR__ . '/../config/init.php';
$page_title = 'Embrayage';
require __DIR__ . '/../includes/header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/services/">Services</a></li>
        <li class="breadcrumb-item active">Embrayage</li>
    </ol>
</nav>

<div class="row align-items-center mb-5">
    <div class="col-md-2 text-center d-none d-md-block">
        <i class="bi bi-disc service-detail-icon"></i>
    </div>
    <div class="col-md-10">
        <span class="badge text-uppercase mb-2" style="background-color:#ff5d17;letter-spacing:.08em;">Intervention spécialisée</span>
        <h1 class="mb-1">Remplacement d'embrayage</h1>
        <p class="lead text-muted">Retrouvez des passages de vitesse fluides et une transmission optimale avec un embrayage en parfait état.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8">
        <p class="fs-5">L'embrayage est le lien mécanique entre votre moteur et votre boîte de vitesses. Il s'use progressivement à chaque démarrage et changement de rapport. Lorsqu'il est usé, les passages de vitesse deviennent difficiles et la puissance moteur n'est plus transmise correctement.</p>
        <p>Le remplacement d'embrayage est une intervention de fond qui nécessite expertise et précision. Nos mécaniciens spécialisés réalisent l'opération avec le kit complet adapté à votre véhicule.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous
        </a>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center d-flex flex-column justify-content-center p-4">
                <i class="bi bi-tools mb-3" style="font-size:2.5rem;color:#ff5d17;"></i>
                <h5>Kit complet</h5>
                <p class="text-muted small mb-3">Nous remplaçons toujours l'ensemble du kit (disque + plateau + butée) pour une fiabilité maximale.</p>
                <a href="/rendez-vous.php" class="btn btn-outline-primary btn-sm">Prendre RDV</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <img src="/assets/img/services/embrayage.jpg" alt="Remplacement embrayage" class="w-100 rounded-3 shadow-sm" style="height:400px;object-fit:cover;object-position:center;">
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4"><i class="bi bi-exclamation-triangle me-2" style="color:#ff5d17;"></i>Signes d'un embrayage usé</h2>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Patinage de l'embrayage (régime moteur monte sans accélération)</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Difficulté ou dureté à passer les vitesses</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Bruit sourd ou grincement à la pédale d'embrayage</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Vibrations ou à-coups lors du relâchement de la pédale</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Odeur de brûlé lors des démarrages</li>
            <li class="list-group-item ps-0"><i class="bi bi-exclamation-circle-fill text-warning me-2"></i>Point de patinage très haut (pédale presque relevée)</li>
        </ul>
        <div class="card border-0 border-start border-4 border-warning bg-light">
            <div class="card-body py-3">
                <p class="mb-0 small text-muted"><i class="bi bi-exclamation-circle me-1 text-warning"></i>Continuer à rouler avec un embrayage usé peut endommager la boîte de vitesses ou le volant moteur.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="mb-4"><i class="bi bi-clock-history me-2" style="color:#ff5d17;"></i>Durée de vie & facteurs d'usure</h2>
        <div class="card border-0 bg-light mb-3">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <i class="bi bi-speedometer2 flex-shrink-0" style="font-size:1.8rem;color:#ff5d17;"></i>
                <div>
                    <p class="mb-0 fw-semibold">80 000 à 150 000 km en moyenne</p>
                    <p class="mb-0 text-muted small">Variable selon le style de conduite et l'usage</p>
                </div>
            </div>
        </div>
        <p>L'embrayage s'use plus vite en cas de :</p>
        <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Conduite urbaine avec nombreux démarrages</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Remorquage fréquent ou charge lourde</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Habitude de garder le pied sur la pédale</li>
            <li class="mb-2"><i class="bi bi-arrow-right-short me-1 text-muted"></i>Conduite sportive ou en montagne</li>
        </ul>
    </div>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-gear me-2" style="color:#ff5d17;"></i>Ce que comprend l'intervention</h2>
    </div>
    <?php
    $etapes = [
        ["1", "bi-search",              "Diagnostic",       "Vérification de l'embrayage, de la commande hydraulique ou câblée et du volant moteur"],
        ["2", "bi-file-earmark-text",   "Devis",            "Proposition transparente avec le détail des pièces et de la main-d'œuvre"],
        ["3", "bi-wrench-adjustable",   "Dépose",           "Dépose de la boîte de vitesses pour accéder au mécanisme d'embrayage"],
        ["4", "bi-disc",               "Remplacement",      "Pose du kit complet : disque, plateau d'embrayage et butée d'embrayage"],
        ["5", "bi-check2-all",          "Contrôle final",   "Réglage de la commande, test de fonctionnement et vérification sur route"],
    ];
    foreach ($etapes as [$num, $icon, $titre, $desc]): ?>
    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex gap-3 align-items-start p-4">
                <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width:2.2rem;height:2.2rem;background:#ff5d17;font-size:.9rem;">
                    <?= $num ?>
                </div>
                <div>
                    <h6 class="mb-1 fw-semibold"><?= $titre ?></h6>
                    <p class="mb-0 text-muted small"><?= $desc ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<hr class="my-5">

<div class="row mb-5">
    <div class="col-12 mb-3">
        <h2><i class="bi bi-patch-check me-2" style="color:#ff5d17;"></i>Pourquoi remplacer le kit complet ?</h2>
    </div>
    <div class="col-md-8">
        <p>Un kit d'embrayage comprend trois composants qui travaillent ensemble :</p>
        <div class="row g-3">
            <?php
            $composants = [
                ["bi-disc",      "Disque d'embrayage",   "S'use au fil des utilisations. C'est la pièce principale à remplacer."],
                ["bi-circle",    "Plateau d'embrayage",  "Presse le disque. Si usé ou déformé, il accélère la re-usure d'un nouveau disque."],
                ["bi-cpu",       "Butée d'embrayage",    "Actionne le mécanisme à chaque appui sur la pédale. Usure mécanique progressive."],
            ];
            foreach ($composants as [$icon, $nom, $desc]): ?>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body py-4">
                        <i class="bi <?= $icon ?> mb-2 d-block" style="font-size:2rem;color:#ff5d17;"></i>
                        <h6 class="fw-semibold mb-2"><?= $nom ?></h6>
                        <p class="text-muted small mb-0"><?= $desc ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="text-muted small mt-3">Remplacer uniquement le disque sans changer le plateau ni la butée expose au risque de re-usure rapide et d'une nouvelle intervention prématurée.</p>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
                <h6 class="fw-semibold mb-3"><i class="bi bi-award me-2" style="color:#ff5d17;"></i>Notre engagement</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="bi bi-check2 me-2 text-success"></i>Kit complet de marque (LUK, Valeo, Sachs…)</li>
                    <li class="mb-2"><i class="bi bi-check2 me-2 text-success"></i>Pièces adaptées à votre motorisation exacte</li>
                    <li class="mb-2"><i class="bi bi-check2 me-2 text-success"></i>Devis transparent avant intervention</li>
                    <li><i class="bi bi-check2 me-2 text-success"></i>Garantie sur les pièces et la main-d'œuvre</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card text-white mb-5 border-0" style="background:#111;">
    <div class="card-body text-center py-5">
        <i class="bi bi-disc mb-3 d-block" style="font-size:3rem;color:#ff5d17;"></i>
        <h2 class="mb-2">Un embrayage qui glisse ou qui résiste ?</h2>
        <p class="lead opacity-75 mb-4">Ne tardez pas. Un embrayage défaillant peut endommager la boîte de vitesses et multiplier la facture de réparation. Nos spécialistes vous remettent sur la route rapidement.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="/rendez-vous.php" class="btn btn-lg fw-semibold" style="background-color:#ff5d17;color:#fff;">
                <i class="bi bi-calendar-plus me-2"></i>Prendre rendez-vous
            </a>
            <a href="/contact.php" class="btn btn-lg btn-outline-light fw-semibold">
                <i class="bi bi-telephone me-2"></i>Nous appeler
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
