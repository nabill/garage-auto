<?php
require_once __DIR__ . '/config/init.php';
$page_title = 'Accueil';
$news = $pdo->query("SELECT * FROM news WHERE published_at <= NOW() ORDER BY published_at DESC LIMIT 3")->fetchAll();
require __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════ HERO -->
<div style="margin-top:-40px;background:#111;margin-left:calc(-50vw + 50%);width:100vw;position:relative;overflow:hidden;margin-bottom:0;">
    <div style="position:absolute;inset:0;background:url('/assets/img/hero.jpg') center/cover no-repeat;opacity:0.22;"></div>
    <div style="position:relative;max-width:1200px;margin:0 auto;padding:90px 24px 80px;">
        <div style="max-width:680px;">
            <h1 style="color:#fff;font-size:clamp(36px,5vw,62px);line-height:1.08;font-weight:800;margin-bottom:20px;letter-spacing:-.02em;">
                Votre véhicule entre de <span style="color:#ff5d17;">bonnes mains.</span>
            </h1>
            <p style="color:rgba(255,255,255,.65);font-size:19px;line-height:1.6;margin-bottom:36px;max-width:520px;">
                Mécanique, entretien, carrosserie — diagnostics rapides, devis gratuit, prise en charge immédiate à Cestas.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:14px;">
                <a href="/rendez-vous.php" style="display:inline-flex;align-items:center;gap:9px;background:#ff5d17;color:#fff;font-weight:700;font-size:16px;padding:14px 28px;border-radius:8px;text-decoration:none;transition:background .15s;">
                    <i class="bi bi-calendar-plus"></i> Prendre rendez-vous
                </a>
                <a href="/services/" style="display:inline-flex;align-items:center;gap:9px;background:rgba(255,255,255,.1);color:#fff;font-weight:600;font-size:16px;padding:14px 28px;border-radius:8px;text-decoration:none;border:1px solid rgba(255,255,255,.2);transition:background .15s;">
                    <i class="bi bi-grid"></i> Nos services
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ═══════════════════════════════════════════════════════ QUICK STATS -->
<!-- <div style="background:#ff5d17;margin-left:calc(-50vw + 50%);width:100vw;margin-bottom:0;">
    <div style="max-width:1200px;margin:0 auto;padding:0 24px;display:grid;grid-template-columns:repeat(4,1fr);gap:0;">
        <?php foreach ([
            ['bi-wrench-adjustable','Toutes marques','Essence · Diesel · Hybride'],
            ['bi-calendar-check','Rendez-vous rapide','Prise en charge dès le lendemain'],
            ['bi-shield-check','Garantie','Pièces &amp; main d\'œuvre'],
            ['bi-chat-dots','Devis gratuit','Transparent, sans surprise'],
        ] as $s): ?>
        <div style="padding:20px 16px;text-align:center;border-right:1px solid rgba(255,255,255,.2);">
            <i class="bi <?= $s[0] ?>" style="font-size:1.5rem;color:#fff;opacity:.85;"></i>
            <div style="color:#fff;font-weight:700;font-size:14px;margin-top:6px;"><?= $s[1] ?></div>
            <div style="color:rgba(255,255,255,.7);font-size:12px;margin-top:2px;"><?= $s[2] ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</div> -->

<div style="height:60px;"></div>

<!-- ═══════════════════════════════════════════════════════ SERVICES -->
<div class="row mb-2" style="font-family:'inter ui'">
    <div class="col-12 text-center">
        <h2 style="font-weight:800;letter-spacing:-.02em;">Nos prestations</h2>
        <p style="color:#888;font-size:16px;margin-bottom:36px;">Un garage complet pour tous vos besoins automobiles.</p>
    </div>
</div>
<div class="row g-3 mb-5">
<?php
$services = [
    ['<i class="bi bi-droplet-half" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',       '#ff5d17', 'Entretien / Vidange',      'Vidange moteur, filtres, niveaux — conforme aux spécifications constructeur.',   '/services/entretien-vidange.php'],
    ['<i class="bi bi-tools" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',              '#ff5d17',    'Révision Premium',          'Révision complète 80 points selon le carnet constructeur.',                        '/services/revision.php'],
    ['<i class="bi bi-wrench-adjustable" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',  '#ff5d17', 'Mécanique générale',        'Moteur, boîte, freins, distribution — toutes réparations mécaniques.',            '/services/mecanique-generale.php'],
    ['<i class="bi bi-record-circle" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',      '#ff5d17',    'Freins / Plaquettes',       'Remplacement plaquettes, disques, liquide de frein, contrôle ABS.',               '/services/freins.php'],
    ['<i class="bi bi-arrow-repeat" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',       '#ff5d17', 'Courroie de distribution',  'Remplacement selon kilométrage — intervention critique à ne pas négliger.',        '/services/courroie-distribution.php'],
    ['<i class="bi bi-disc" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',               '#ff5d17',    'Embrayage',                 'Remplacement kit embrayage complet, cylindre récepteur, volant moteur.',           '/services/embrayage.php'],
    ['<i class="bi bi-arrows-vertical" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',    '#ff5d17', 'Suspension / Amortisseurs', 'Diagnostic, remplacement amortisseurs, silent-blocs, géométrie.',                 '/services/suspension-amortisseurs.php'],
    ['<svg style="    height: 41px;
    width: 41px;
    fill: #ff5d17;
    margin-bottom: 5px;
    margin-top: -5px;" fill="#000000" width="800px" height="800px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M 8 6 L 8 8 L 12 8 L 12 6 Z M 20 6 L 20 8 L 24 8 L 24 6 Z M 4 9 L 4 27 L 28 27 L 28 9 Z M 6 11 L 26 11 L 26 25 L 6 25 Z M 20 15 L 20 17 L 18 17 L 18 19 L 20 19 L 20 21 L 22 21 L 22 19 L 24 19 L 24 17 L 22 17 L 22 15 Z M 8 17 L 8 19 L 14 19 L 14 17 Z"/></svg>',   '#ff5d17',    'Batterie',                  'Test, remplacement et recyclage — toutes batteries 12V, EFB, AGM.',               '/services/batterie.php'],
    ['<i class="bi bi-snow2" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',              '#ff5d17', 'Climatisation',             'Recharge R134a / R1234yf, détection de fuites, désinfection habitacle.',           '/services/climatisation.php'],
    // ['bi-circle',             '#111',    'Pneumatiques',              'Montage, équilibrage, permutation, géométrie — toutes marques.',                   '/services/pneumatiques.php'],
    ['<i class="bi bi-cpu" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',                '#ff5d17', 'Diagnostic électronique',   'Lecture codes défauts OBD, remise à zéro, tests actuateurs.',                     '/services/diagnostic.php'],
    // ['bi-brush',              '#111',    'Carrosserie / Peinture',    'Débosselage, réparation chocs, peinture teintée à l\'identique.',                  '/services/carrosserie-peinture.php'],
    // ['bi-window',             '#ff5d17', 'Vitrage / Pare-brise',      'Réparation éclats, remplacement, recalibrage caméras ADAS.',                      '/services/vitrage.php'],
    ['<i class="bi bi-clipboard-check" style="font-size:2.1rem;color:#ff5d17;margin-bottom:10px;display:block;"></i>',    '#ff5d17',    'Contrôle technique',        'Accompagnement avant contrôle, contre-visite, mise en conformité.',               '/services/controle-technique.php'],
];
foreach ($services as $svc): ?>
<div class="col-6 col-md-4 col-lg-3" style="font-family:'inter ui'">
    <a href="<?= $svc[4] ?>" style="text-decoration:none;display:block;height:100%;">
        <div style="border:1px solid #eee;border-radius:10px;padding:22px 18px;height:100%;transition:box-shadow .15s,border-color .15s;background:#fff;" class="svc-card">
            <?= $svc[0] ?>
            <div style="font-weight:700;font-size:14px;color:#111;margin-bottom:5px;font-family:Montserrat-Variable,sans-serif;"><?= $svc[2] ?></div>
            <div style="font-size:14px;color:#888;line-height:1.5;"><?= $svc[3] ?></div>
        </div>
    </a>
</div>
<?php endforeach; ?>
</div>
<style>
.svc-card:hover { box-shadow:0 8px 24px rgba(0,0,0,.1); border-color:#ff5d17 !important; }
</style>

<!-- ═══════════════════════════════════════════════════════ FULL WIDTH IMAGE -->
<div style="margin-left:calc(-50vw + 50%);width:100vw;margin-bottom:0;">
    <img src="/assets/img/6687.jpg" alt="Garage Mecano Auto" style="width:100%;height:auto;display:block;">
</div>

<!-- ═══════════════════════════════════════════════════════ WHY US -->
<div style="background:#f7f7f7;margin-left:calc(-50vw + 50%);width:100vw;padding:60px 24px;margin-bottom:0;">
    <div style="max-width:1200px;margin:0 auto;font-family:'inter ui'">
        <h2 style="text-align:center;font-weight:800;letter-spacing:-.02em;margin-bottom:8px;">Pourquoi nous choisir ?</h2>
        <p style="text-align:center;color:#888;font-size:16px;margin-bottom:44px;">Chez Mecano Auto, chaque véhicule est traité comme le nôtre.</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:32px;">
            <?php foreach ([
                ['bi-award-fill',        '#ff5d17', 'Expertise confirmée',    'Des techniciens qualifiés avec des années d\'expérience en atelier.'],
                ['bi-clock-fill',        '#ff5d17',    'Délais respectés',       'Votre voiture prête à l\'heure promise, sans mauvaises surprises.'],
                ['bi-shield-fill-check', '#ff5d17', 'Garantie travaux',       'Pièces et main d\'œuvre garantis sur toutes nos interventions.'],
                ['bi-car-front-fill',    '#ff5d17',    'Toutes marques',         'Essence, diesel, hybride — nous intervenons sur toutes les marques sans exception.'],
            ] as $w): ?>
            <div style="text-align:center;padding:12px;">
                <div style="width:58px;height:58px;border-radius:50%;background:<?= $w[1] ?>;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                    <i class="bi <?= $w[0] ?>" style="font-size:1.4rem;color:#fff;"></i>
                </div>
                <div style="font-weight:700;font-size:15px;color:#111;margin-bottom:7px;font-family:Montserrat-Variable,sans-serif;"><?= $w[2] ?></div>
                <div style="font-size:13.5px;color:#888;line-height:1.6;"><?= $w[3] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div style="height:60px;"></div>

<!-- ═══════════════════════════════════════════════════════ RDV CTA -->
<div style="background:#111;border-radius:14px;padding:56px 40px;text-align:center;margin-bottom:64px;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-40px;right:-40px;width:200px;height:200px;border-radius:50%;background:#ff5d17;opacity:.07;"></div>
    <div style="position:absolute;bottom:-60px;left:-30px;width:250px;height:250px;border-radius:50%;background:#ff5d17;opacity:.05;"></div>
    <i class="bi bi-calendar-check-fill" style="font-size:2.5rem;color:#ff5d17;margin-bottom:16px;display:block;"></i>
    <h2 style="color:#fff;font-weight:800;letter-spacing:-.02em;margin-bottom:10px;">Prenez rendez-vous en ligne</h2>
    <p style="color:rgba(255,255,255,.6);font-size:17px;margin-bottom:32px;max-width:480px;margin-left:auto;margin-right:auto;">
        Réservez votre créneau en quelques clics. Intervention rapide, devis gratuit, pris en charge dès le lendemain.
    </p>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:14px;">
        <a href="/rendez-vous.php" style="display:inline-flex;align-items:center;gap:9px;background:#ff5d17;color:#fff;font-weight:700;font-size:16px;padding:14px 32px;border-radius:8px;text-decoration:none;">
            <i class="bi bi-calendar-plus"></i> Réserver maintenant
        </a>
        <!-- <a href="tel:+33556000000" style="display:inline-flex;align-items:center;gap:9px;background:rgba(255,255,255,.08);color:#fff;font-weight:600;font-size:16px;padding:14px 32px;border-radius:8px;text-decoration:none;border:1px solid rgba(255,255,255,.15);">
            <i class="bi bi-telephone"></i> Nous appeler
        </a> -->
    </div>
</div>

<!-- ═══════════════════════════════════════════════════════ NEWS -->
<!-- <?php if (!empty($news)): ?>
<div class="row mb-2">
    <div class="col-12 d-flex justify-content-between align-items-baseline">
        <h2 style="font-weight:800;letter-spacing:-.02em;">Actualités</h2>
        <a href="/actualites.php" style="font-size:14px;color:#ff5d17;font-weight:600;text-decoration:none;">Toutes les actualités →</a>
    </div>
</div>
<div class="row g-3 mb-5">
    <?php foreach ($news as $n): ?>
    <div class="col-md-4">
        <a href="/actualite.php?id=<?= $n['id'] ?>" style="text-decoration:none;display:block;height:100%;">
            <div style="border:1px solid #eee;border-radius:10px;overflow:hidden;height:100%;background:#fff;transition:box-shadow .15s;" class="svc-card">
                <?php if ($n['image']): ?>
                    <img src="/assets/uploads/<?= h($n['image']) ?>" alt="<?= h($n['titre']) ?>" style="width:100%;height:180px;object-fit:cover;">
                <?php else: ?>
                    <div style="width:100%;height:180px;background:#f3f3f3;display:flex;align-items:center;justify-content:center;">
                        <i class="bi bi-newspaper" style="font-size:2.5rem;color:#ccc;"></i>
                    </div>
                <?php endif; ?>
                <div style="padding:18px;">
                    <div style="font-size:11px;color:#ff5d17;font-weight:700;letter-spacing:.08em;text-transform:uppercase;margin-bottom:7px;">
                        <?= date('d/m/Y', strtotime($n['published_at'])) ?>
                    </div>
                    <div style="font-weight:700;font-size:15px;color:#111;margin-bottom:7px;font-family:Montserrat-Variable,sans-serif;"><?= h($n['titre']) ?></div>
                    <div style="font-size:13px;color:#888;line-height:1.55;"><?= h(mb_strimwidth($n['contenu'], 0, 110, '…')) ?></div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?> -->

<!-- ═══════════════════════════════════════════════════════ CONTACT STRIP -->
<!-- <div style="background:#f7f7f7;margin-left:calc(-50vw + 50%);width:100vw;padding:40px 24px;margin-bottom:0;">
    <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:24px;text-align:center;">
        <div>
            <i class="bi bi-geo-alt-fill" style="font-size:1.4rem;color:#ff5d17;margin-bottom:8px;display:block;"></i>
            <div style="font-weight:700;font-size:14px;color:#111;margin-bottom:4px;">Adresse</div>
            <div style="font-size:13px;color:#888;">3 Chemin des Arestieux<br>33610 Cestas, France</div>
        </div>
        <div>
            <i class="bi bi-telephone-fill" style="font-size:1.4rem;color:#ff5d17;margin-bottom:8px;display:block;"></i>
            <div style="font-weight:700;font-size:14px;color:#111;margin-bottom:4px;">Téléphone</div>
            <div style="font-size:13px;color:#888;"><a href="tel:+33556000000" style="color:#888;text-decoration:none;">05 56 00 00 00</a></div>
        </div>
        <div>
            <i class="bi bi-envelope-fill" style="font-size:1.4rem;color:#ff5d17;margin-bottom:8px;display:block;"></i>
            <div style="font-weight:700;font-size:14px;color:#111;margin-bottom:4px;">Email</div>
            <div style="font-size:13px;color:#888;"><a href="mailto:contact@mecanocestas.com" style="color:#888;text-decoration:none;">contact@mecanocestas.com</a></div>
        </div>
        <div>
            <i class="bi bi-clock-fill" style="font-size:1.4rem;color:#ff5d17;margin-bottom:8px;display:block;"></i>
            <div style="font-weight:700;font-size:14px;color:#111;margin-bottom:4px;">Horaires</div>
            <div style="font-size:13px;color:#888;">Lun – Ven : 8h – 18h<br>Samedi : 9h – 13h</div>
        </div>
    </div>
</div> -->

<div style="height:1px;"></div>

<?php require __DIR__ . '/includes/footer.php'; ?>
