<?php
require_once __DIR__ . '/../config/init.php';

$page_title = 'Nos services';
require __DIR__ . '/../includes/header.php';
?>

<h1 class="text-center mb-2">Nos services</h1>
<p class="text-center text-muted mb-5">Un atelier complet pour tous vos besoins automobiles — toutes marques, tous modèles.</p>

<div class="row g-4">
    <?php
    $services = [
        // Entretien
        ['icon' => 'bi-droplet-half',          'title' => 'Entretien / Vidange',          'desc' => 'Vidange moteur, remplacement des filtres, contrôle des niveaux et révisions complètes.',          'link' => '/services/entretien-vidange.php'],
        ['icon' => 'bi-tools',                 'title' => 'Révision Premium',             'desc' => 'Révision complète conforme aux exigences constructeur pour préserver performance et garantie.',   'link' => '/services/revision.php'],
        ['icon' => 'bi-patch-check',           'title' => 'Contrôle technique',           'desc' => 'Pré-visite complète pour passer votre contrôle technique du premier coup, sans mauvaise surprise.','link' => '/services/controle-technique.php'],
        // Mécanique
        ['icon' => 'bi-gear-wide-connected',   'title' => 'Mécanique générale',           'desc' => 'Réparations moteur, freins, embrayage, distribution et toutes interventions mécaniques.',         'link' => '/services/mecanique-generale.php'],
        ['icon' => 'bi-arrow-repeat',          'title' => 'Courroie de distribution',     'desc' => 'Remplacement du kit distribution (courroie, tendeurs, galets, pompe à eau) selon le constructeur.','link' => '/services/courroie-distribution.php'],
        ['icon' => 'bi-disc',                  'title' => 'Embrayage',                    'desc' => 'Remplacement du kit embrayage complet (disque, plateau, butée) sur toutes motorisations.',         'link' => '/services/embrayage.php'],
        // Sécurité & freinage
        ['icon' => 'bi-slash-circle',          'title' => 'Freins / Plaquettes',          'desc' => 'Remplacement des plaquettes, disques et vérification complète du circuit de freinage.',           'link' => '/services/freins.php'],
        ['icon' => 'bi-arrows-vertical',       'title' => 'Suspension / Amortisseurs',    'desc' => 'Diagnostic et remplacement des amortisseurs, ressorts, rotules et biellettes de suspension.',      'link' => '/services/suspension-amortisseurs.php'],
        // Équipements
        ['icon' => 'bi-battery-charging',      'title' => 'Batterie',                     'desc' => 'Diagnostic, remplacement et test de batterie. Plomb-acide, EFB et AGM pour tous véhicules.',       'link' => '/services/batterie.php'],
        ['icon' => 'bi-thermometer-snow',      'title' => 'Climatisation',                'desc' => 'Recharge de gaz, entretien, réparation et désinfection du système de climatisation.',              'link' => '/services/climatisation.php'],
        ['icon' => 'bi-circle',                'title' => 'Pneumatiques',                 'desc' => 'Montage, équilibrage, réparation de crevaison, géométrie et vente de pneus toutes marques.',       'link' => '/services/pneumatiques.php'],
        // Diagnostic & carrosserie
        ['icon' => 'bi-cpu',                   'title' => 'Diagnostic électronique',      'desc' => 'Lecture des codes défaut, diagnostic complet de tous les systèmes électroniques embarqués.',        'link' => '/services/diagnostic.php'],
        ['icon' => 'bi-brush',                 'title' => 'Carrosserie / Peinture',       'desc' => 'Réparation de carrosserie, débosselage, peinture assortie et prise en charge assurance.',          'link' => '/services/carrosserie-peinture.php'],
        ['icon' => 'bi-window',                'title' => 'Vitrage / Pare-brise',         'desc' => 'Réparation d\'impacts, remplacement de pare-brise et de vitrages. Prise en charge assurance.',     'link' => '/services/vitrage.php'],
    ];
    foreach ($services as $svc): ?>
    <div class="col-md-6">
        <div class="card service-card h-100">
            <div class="card-body d-flex">
                <div class="me-4">
                    <i class="bi <?= $svc['icon'] ?>" style="font-size:3rem;color:var(--primary);"></i>
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
    <a href="/rendez-vous.php" class="btn btn-primary btn-lg"><i class="bi bi-calendar-check me-2"></i>Prendre rendez-vous</a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
