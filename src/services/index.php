<?php
require_once __DIR__ . '/../config/init.php';

$page_title = 'Nos services';
require __DIR__ . '/../includes/header.php';
?>

<h1 class="text-center mb-5">Nos services</h1>

<div class="row g-4">
    <?php
    $services = [
        ['icon' => 'bi-gear-wide-connected', 'title' => 'Mécanique générale', 'desc' => 'Réparations moteur, freins, embrayage, distribution et toutes interventions mécaniques.', 'link' => '/services/mecanique-generale.php'],
        ['icon' => 'bi-droplet-half', 'title' => 'Entretien / Vidange', 'desc' => 'Vidange moteur, remplacement des filtres, contrôles de niveaux et révisions complètes.', 'link' => '/services/entretien-vidange.php'],
        ['icon' => 'bi-circle', 'title' => 'Pneumatiques', 'desc' => 'Montage, équilibrage, réparation de crevaison et vente de pneumatiques toutes marques.', 'link' => '/services/pneumatiques.php'],
        ['icon' => 'bi-cpu', 'title' => 'Diagnostic électronique', 'desc' => 'Lecture des codes défaut, diagnostic complet de l\'électronique embarquée.', 'link' => '/services/diagnostic.php'],
        ['icon' => 'bi-brush', 'title' => 'Carrosserie / Peinture', 'desc' => 'Réparation de carrosserie, débosselage, peinture et retouches.', 'link' => '/services/carrosserie-peinture.php'],
        ['icon' => 'bi-snow', 'title' => 'Climatisation', 'desc' => 'Recharge de gaz, entretien et réparation du système de climatisation.', 'link' => '/services/climatisation.php'],
    ];
    foreach ($services as $svc): ?>
    <div class="col-md-6">
        <div class="card service-card h-100">
            <div class="card-body d-flex">
                <div class="me-4">
                    <div class="service-icon" style="width:56px; height:56px;"><i class="bi <?= $svc['icon'] ?>"></i></div>
                </div>
                <div>
                    <h4 class="card-title"><?= $svc['title'] ?></h4>
                    <p class="card-text text-muted"><?= $svc['desc'] ?></p>
                    <a href="<?= $svc['link'] ?>" class="btn btn-outline-primary btn-sm">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="text-center mt-5">
    <a href="/rendez-vous.php" class="btn btn-primary btn-lg"><i class="bi bi-calendar-check"></i> Prendre rendez-vous</a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
