<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Accueil';

// Latest news
$news = $pdo->query("SELECT * FROM news WHERE published_at <= NOW() ORDER BY published_at DESC LIMIT 3")->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<!-- Hero -->
<div class="hero text-center">
    <div class="container">
        <h1>Bienvenue chez Garage Auto</h1>
        <p class="lead mb-4">Votre garage de confiance pour l'entretien et la réparation de votre véhicule</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg me-2"><i class="bi bi-calendar-check"></i> Prendre rendez-vous</a>
        <a href="/services/" class="btn btn-outline-light btn-lg">Nos services</a>
    </div>
</div>

<!-- Services overview -->
<section class="mb-5">
    <h2 class="text-center mb-4">Nos services</h2>
    <div class="row g-4">
        <?php
        $services = [
            ['icon' => 'bi-gear-wide-connected', 'title' => 'Mécanique générale', 'desc' => 'Réparations moteur, freins, embrayage, distribution...', 'link' => '/services/mecanique-generale.php'],
            ['icon' => 'bi-droplet-half', 'title' => 'Entretien / Vidange', 'desc' => 'Vidange, filtres, contrôles, révisions complètes.', 'link' => '/services/entretien-vidange.php'],
            ['icon' => 'bi-circle', 'title' => 'Pneumatiques', 'desc' => 'Montage, équilibrage, réparation et vente de pneus.', 'link' => '/services/pneumatiques.php'],
            ['icon' => 'bi-cpu', 'title' => 'Diagnostic', 'desc' => 'Diagnostic électronique complet de votre véhicule.', 'link' => '/services/diagnostic.php'],
            ['icon' => 'bi-brush', 'title' => 'Carrosserie / Peinture', 'desc' => 'Réparation carrosserie, peinture, débosselage.', 'link' => '/services/carrosserie-peinture.php'],
            ['icon' => 'bi-snow', 'title' => 'Climatisation', 'desc' => 'Recharge, entretien et réparation de climatisation.', 'link' => '/services/climatisation.php'],
        ];
        foreach ($services as $svc): ?>
        <div class="col-md-4">
            <div class="card service-card h-100 text-center">
                <div class="card-body">
                    <i class="bi <?= $svc['icon'] ?>"></i>
                    <h5 class="card-title mt-3"><?= $svc['title'] ?></h5>
                    <p class="card-text text-muted"><?= $svc['desc'] ?></p>
                    <a href="<?= $svc['link'] ?>" class="btn btn-outline-primary btn-sm">En savoir plus</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Latest news -->
<?php if (!empty($news)): ?>
<section class="mb-5">
    <h2 class="text-center mb-4">Dernières actualités</h2>
    <div class="row g-4">
        <?php foreach ($news as $n): ?>
        <div class="col-md-4">
            <div class="card news-card h-100">
                <?php if ($n['image']): ?>
                    <img src="/assets/uploads/<?= h($n['image']) ?>" class="card-img-top" alt="<?= h($n['titre']) ?>">
                <?php else: ?>
                    <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center" style="height:200px;">
                        <i class="bi bi-newspaper text-white" style="font-size:3rem;"></i>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?= h($n['titre']) ?></h5>
                    <p class="card-text text-muted"><?= h(mb_strimwidth($n['contenu'], 0, 120, '...')) ?></p>
                </div>
                <div class="card-footer bg-white border-0">
                    <small class="text-muted"><?= date('d/m/Y', strtotime($n['published_at'])) ?></small>
                    <a href="/actualite.php?id=<?= $n['id'] ?>" class="btn btn-sm btn-outline-primary float-end">Lire</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="text-center bg-light rounded p-5 mb-4">
    <h3>Besoin d'un rendez-vous ?</h3>
    <p class="text-muted">Prenez rendez-vous en ligne rapidement et facilement.</p>
    <a href="/rendez-vous.php" class="btn btn-primary btn-lg"><i class="bi bi-calendar-check"></i> Prendre rendez-vous</a>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
