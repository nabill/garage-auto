<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Accueil';

// Latest news
$news = $pdo->query("SELECT * FROM news WHERE published_at <= NOW() ORDER BY published_at DESC LIMIT 3")->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<!-- Hero -->
<div class="hero text-center">
    <div class="container position-relative" style="z-index:1;">
        <h1>Bienvenue chez<br><span style="color:#e8650a;">Garage Auto</span></h1>
        <p class="lead">Votre garage de confiance pour l'entretien et la réparation de votre véhicule</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg me-2"><i class="bi bi-calendar-check me-1"></i> Prendre rendez-vous</a>
        <a href="/services/" class="btn btn-outline-light btn-lg">Découvrir nos services</a>
    </div>
</div>

<!-- Services overview -->
<section class="mb-5">
    <h2 class="section-title">Nos services</h2>
    <div class="section-divider"></div>
    <p class="section-subtitle">Une gamme complète de prestations pour votre véhicule</p>
    <div class="row g-4">
        <?php
        $services = [
            ['icon' => 'bi-gear-wide-connected', 'title' => 'Mécanique générale', 'desc' => 'Réparations moteur, freins, embrayage, distribution et toutes interventions mécaniques.', 'link' => '/services/mecanique-generale.php'],
            ['icon' => 'bi-droplet-half', 'title' => 'Entretien / Vidange', 'desc' => 'Vidange, filtres, contrôles de niveaux et révisions complètes.', 'link' => '/services/entretien-vidange.php'],
            ['icon' => 'bi-circle', 'title' => 'Pneumatiques', 'desc' => 'Montage, équilibrage, réparation et vente de pneus toutes marques.', 'link' => '/services/pneumatiques.php'],
            ['icon' => 'bi-cpu', 'title' => 'Diagnostic', 'desc' => 'Diagnostic électronique complet de votre véhicule.', 'link' => '/services/diagnostic.php'],
            ['icon' => 'bi-brush', 'title' => 'Carrosserie / Peinture', 'desc' => 'Réparation carrosserie, peinture, débosselage sans peinture.', 'link' => '/services/carrosserie-peinture.php'],
            ['icon' => 'bi-snow', 'title' => 'Climatisation', 'desc' => 'Recharge, entretien et réparation de climatisation auto.', 'link' => '/services/climatisation.php'],
        ];
        foreach ($services as $svc): ?>
        <div class="col-md-4">
            <div class="card service-card h-100 text-center">
                <div class="card-body">
                    <div class="service-icon mx-auto">
                        <i class="bi <?= $svc['icon'] ?>"></i>
                    </div>
                    <h5 class="card-title mt-2"><?= $svc['title'] ?></h5>
                    <p class="card-text"><?= $svc['desc'] ?></p>
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
    <h2 class="section-title">Dernières actualités</h2>
    <div class="section-divider"></div>
    <p class="section-subtitle">Restez informé des nouveautés du garage</p>
    <div class="row g-4">
        <?php foreach ($news as $n): ?>
        <div class="col-md-4">
            <div class="card news-card h-100">
                <?php if ($n['image']): ?>
                    <img src="/assets/uploads/<?= h($n['image']) ?>" class="card-img-top" alt="<?= h($n['titre']) ?>">
                <?php else: ?>
                    <div class="news-placeholder">
                        <i class="bi bi-newspaper"></i>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?= h($n['titre']) ?></h5>
                    <p class="card-text text-muted" style="font-size:0.92rem;"><?= h(mb_strimwidth($n['contenu'], 0, 120, '...')) ?></p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                    <span class="news-date"><i class="bi bi-calendar3 me-1"></i><?= date('d/m/Y', strtotime($n['published_at'])) ?></span>
                    <a href="/actualite.php?id=<?= $n['id'] ?>" class="btn btn-sm btn-outline-primary">Lire</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="cta-section text-center mb-4">
    <div class="position-relative" style="z-index:1;">
        <h3>Besoin d'un rendez-vous ?</h3>
        <p class="mb-4">Prenez rendez-vous en ligne rapidement et facilement.</p>
        <a href="/rendez-vous.php" class="btn btn-lg"><i class="bi bi-calendar-check me-1"></i> Prendre rendez-vous</a>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
