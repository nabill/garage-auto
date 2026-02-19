<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Accueil';

// Latest news
$news = $pdo->query("SELECT * FROM news WHERE published_at <= NOW() ORDER BY published_at DESC LIMIT 3")->fetchAll();

require __DIR__ . '/includes/header.php';
?>

</div><!-- /container from header -->

<!-- Hero (full-width) -->
<div class="hero text-center">
    <div class="container position-relative" style="z-index:1;">
        <div class="hero-badge mx-auto mb-3">
            <span class="dot"></span>
            <span>Votre garage de confiance depuis plus de 20 ans</span>
        </div>
        <h1>Bienvenue chez<br><span class="gradient-text">Garage Auto</span></h1>
        <p class="lead mx-auto">Votre partenaire de confiance pour l'entretien et la réparation de votre véhicule. Nos techniciens certifiés vous offrent un service d'excellence.</p>
        <a href="/rendez-vous.php" class="btn btn-primary btn-lg me-2"><i class="bi bi-calendar-check me-1"></i> Prendre rendez-vous</a>
        <a href="/services/" class="btn btn-outline-light btn-lg">Découvrir nos services</a>
    </div>
</div>

<div class="container"><!-- reopen container for the rest -->

<!-- Services overview -->
<section class="py-5 mb-3">
    <div class="text-center mb-4">
        <span class="section-label">Nos services</span>
        <h2 class="section-title">Prestations <span class="gradient-text">complètes</span></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle">Une gamme complète de prestations pour votre véhicule, assurées par des techniciens certifiés avec un matériel de pointe.</p>
    </div>
    <div class="row g-4">
        <?php
        $services = [
            ['icon' => 'bi-gear-wide-connected', 'color' => '',           'title' => 'Mécanique générale',  'desc' => 'Réparations moteur, freins, embrayage, distribution et toutes interventions mécaniques.', 'link' => '/services/mecanique-generale.php'],
            ['icon' => 'bi-droplet-half',        'color' => 'icon-blue',   'title' => 'Entretien / Vidange', 'desc' => 'Vidange, filtres, contrôles de niveaux et révisions complètes.', 'link' => '/services/entretien-vidange.php'],
            ['icon' => 'bi-circle',              'color' => 'icon-yellow', 'title' => 'Pneumatiques',        'desc' => 'Montage, équilibrage, réparation et vente de pneus toutes marques.', 'link' => '/services/pneumatiques.php'],
            ['icon' => 'bi-cpu',                 'color' => 'icon-purple', 'title' => 'Diagnostic',          'desc' => 'Diagnostic électronique complet de votre véhicule.', 'link' => '/services/diagnostic.php'],
            ['icon' => 'bi-brush',               'color' => 'icon-green',  'title' => 'Carrosserie / Peinture', 'desc' => 'Réparation carrosserie, peinture, débosselage sans peinture.', 'link' => '/services/carrosserie-peinture.php'],
            ['icon' => 'bi-snow',                'color' => 'icon-indigo', 'title' => 'Climatisation',       'desc' => 'Recharge, entretien et réparation de climatisation auto.', 'link' => '/services/climatisation.php'],
        ];
        foreach ($services as $svc): ?>
        <div class="col-md-4">
            <div class="card service-card h-100">
                <div class="card-body">
                    <div class="service-icon <?= $svc['color'] ?>">
                        <i class="bi <?= $svc['icon'] ?>"></i>
                    </div>
                    <h5 class="card-title"><?= $svc['title'] ?></h5>
                    <p class="card-text"><?= $svc['desc'] ?></p>
                    <a href="<?= $svc['link'] ?>" class="learn-more-link">
                        En savoir plus <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Latest news -->
<?php if (!empty($news)): ?>
<section class="mb-5" style="background: var(--zinc-50); border-radius: var(--radius-xl); padding: 3rem 2rem;">
    <div class="text-center mb-4">
        <span class="section-label">Actualités</span>
        <h2 class="section-title">Dernières <span class="gradient-text">nouveautés</span></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle">Restez informé des nouveautés du garage</p>
    </div>
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
<section class="cta-section text-center mb-5">
    <div class="position-relative" style="z-index:1;">
        <h3>Besoin d'un rendez-vous ?</h3>
        <p class="mb-4">Prenez rendez-vous en ligne rapidement et facilement.</p>
        <a href="/rendez-vous.php" class="btn btn-lg"><i class="bi bi-calendar-check me-1"></i> Prendre rendez-vous</a>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
