<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Accueil';

// Latest news
$news = $pdo->query("SELECT * FROM news WHERE published_at <= NOW() ORDER BY published_at DESC LIMIT 3")->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<h1>Test</h1>

<div>

        <div class="row">
            <div class="col-12 col-md-6">
1
            </div>
            <div class="col-12 col-md-6">

                                <div>

                        <div class="Stars" style="--rating: 4.5; margin-bottom: 10px;"></div>



                        <h2>The Ultimate Microscope</h2>
                        <p class="font-montserrat" style="font-size: 23px;color:#2a8703; font-weight: 600;">
                            Now <span>C$39.99</span>
                            <span style="font-size: 17px;color:#bbb"><s> C$49.99</s></span>
                            <span style="color: white;
                                background-color: #2a8703;
                                font-size: 13px;
                                padding: 1px;
                                padding-left: 5px;
                                padding-right: 5px;
                                margin-bottom: -7px;">SAVE 20%</span>
                        </p>


                        <p>Experience the power of a microscope, simplified into a portable device. The perfect gift for your kids.</p>

                        <p>
                            Ideal for ages 6 and up, this microscope will inspire curiosity and creativity in your child while they observe the tiny details of the world around them.
                        </p>

                        <div class="space3"></div>

                        <div class="d-flex space6">
                            <div style="width: 35px;">
                                <svg class="space5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 12 12"><g fill="none"><path d="M5.5 8a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm-1-7A1.5 1.5 0 0 0 3 2.5v7A1.5 1.5 0 0 0 4.5 11h3A1.5 1.5 0 0 0 9 9.5v-7A1.5 1.5 0 0 0 7.5 1h-3zM4 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-7z" fill="currentColor"></path></g></svg>
                            </div>
                            <p>Ditch the Screens in no Time</p>
                        </div>
                        <div class="d-flex space6">
                            <div style="width: 35px;">
                                <svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l4 4l-2 1l4 4l-3 1l4 4H5l4-4l-3-1l4-4l-2-1z"></path><path d="M14 17v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3"></path></g></svg>
                            </div>
                            <p>Explore the great outdoors</p>
                        </div>
                        <div class="d-flex space6">
                            <div style="width: 35px;">
                                <svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><g fill="none"><path d="M8 2.75A.75.75 0 0 1 8.75 2h1.5a.75.75 0 0 1 .75.75V3h1.25a.75.75 0 0 1 .75.75v1.785c.008 0 .017 0 .025.002A8.25 8.25 0 0 1 16.994 20.5h3.256a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1 0-1.5h8.527A6.75 6.75 0 0 0 13 7.042v5.208a.75.75 0 0 1-.75.75h-.75v1a2 2 0 1 1-4 0v-1h-.75a.75.75 0 0 1-.75-.75v-8.5A.75.75 0 0 1 6.75 3H8v-.25zM9 13v1a.5.5 0 0 0 1 0v-1H9zm-3.25 4.5a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5h-7.5z" fill="currentColor"></path></g></svg>
                            </div>
                            <p>Ready to use in seconds</p>
                        </div>
                        <div class="d-flex space6">
                            <div style="width: 35px;">
                                <svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"><path d="M16 25a6.99 6.99 0 0 1-5.833-3.129l1.666-1.107a5 5 0 0 0 8.334 0l1.666 1.107A6.99 6.99 0 0 1 16 25z" fill="currentColor"></path><path d="M20 14a2 2 0 1 0 2 2a1.98 1.98 0 0 0-2-2z" fill="currentColor"></path><path d="M12 14a2 2 0 1 0 2 2a1.98 1.98 0 0 0-2-2z" fill="currentColor"></path><path d="M30 16v-2h-2v-4a4.005 4.005 0 0 0-4-4h-2V2h-2v4h-8V2h-2v4H8a4.005 4.005 0 0 0-4 4v4H2v2h2v5H2v2h2v3a4.005 4.005 0 0 0 4 4h16a4.005 4.005 0 0 0 4-4v-3h2v-2h-2v-5zm-4 10a2.002 2.002 0 0 1-2 2H8a2.002 2.002 0 0 1-2-2V10a2.002 2.002 0 0 1 2-2h16a2.002 2.002 0 0 1 2 2z" fill="currentColor"></path></svg>
                            </div>
                            <p>Promote hands-on learning</p>
                        </div>

                        <div class="space5"></div>

                        <button id="addToCartButton"
                            onclick="log('Add To Cart', 'Count Before : '+document.getElementById('cart-items-count').innerHTML);"
                            class="btn add-to-cart btn-green" style="width: 100%; font-size: 17px;padding: 10px;margin: 8px;padding-left: 20px;padding-right: 20px;height:38px; " data-id="1" data-name="Kid Microscope" data-price="39.99">ADD TO CART</button>

                    </div>


        </div>
    </div>
</div>

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
