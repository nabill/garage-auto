<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($page_title ?? 'Garage Auto') ?> — Garage Auto</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NP55MDJJ');</script>
    <!-- End Google Tag Manager -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css?v=<?= APP_VERSION ?>" rel="stylesheet">
    <!-- <link href="/assets/css/style.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="/assets/fonts/Montserrat/css/montserrat.css?v=<?= APP_VERSION ?>">
<link rel="stylesheet" href="/assets/fonts/Hind/css/hind.css?v=<?= APP_VERSION ?>">
<link rel="stylesheet" href="/assets/fonts/JetBrainsMono/css/jet-brains-mono.css?v=<?= APP_VERSION ?>">
<link rel="stylesheet" href="/assets/fonts/Inter/css/inter.css?v=<?= APP_VERSION ?>">
    <link href="/assets/css/webflow.css?v=<?= APP_VERSION ?>" rel="stylesheet">
    <link href="/assets/css/theme.css?v=<?= APP_VERSION ?>" rel="stylesheet">
      <script>!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
 <style>
    /* ── Shared Docs Styles (included on every docs page) ── */
    .docs-subnav { background: var(--black); padding: 0 40px; border-bottom: 1px solid #1a1a1a; }
    .docs-subnav-inner { display: flex; max-width: 1200px; margin: 0 auto; overflow-x: auto; }
    .docs-subnav-link { font-family: Intertight,Arial,sans-serif; font-size: 13px; font-weight: 500; color: var(--gray-2); text-decoration: none; padding: 13px 16px; white-space: nowrap; border-bottom: 2px solid transparent; display: inline-block; transition: color .2s, border-color .2s; }
    .docs-subnav-link:hover, .docs-subnav-link.is-active { color: var(--white); border-bottom-color: var(--orange); }
    .docs-label { font-family: Intertight,Arial,sans-serif; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--gray-2); margin: 0 0 16px; display: block; }
    .docs-divider { border: none; border-top: 1px solid var(--gray-3); margin: 0; }
    .docs-code { font-family: 'Courier New',monospace; font-size: 12px; background: var(--gray-4); color: var(--gray-1); padding: 3px 8px; border-radius: 4px; border: 1px solid var(--gray-3); }
    .docs-section { padding: 64px 40px; }
    .docs-section-inner { max-width: 1200px; margin: 0 auto; }
    .docs-page-header { padding: 80px 40px 64px; background: var(--black); }
    .docs-page-header-inner { max-width: 1200px; margin: 0 auto; }
    /* Cards */
    .docs-card-grid { display: grid; grid-template-columns: repeat(auto-fill,minmax(260px,1fr)); gap: 1px; background: var(--gray-3); border: 1px solid var(--gray-3); margin-top: 24px; }
    .docs-card { background: var(--white); padding: 40px 32px; text-decoration: none; display: block; transition: background .2s; }
    .docs-card:hover { background: var(--gray-4); }
    .docs-card-num { font-family: Intertight,Arial,sans-serif; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--orange); margin-bottom: 10px; }
    .docs-card-title { font-family: Intertight,Arial,sans-serif; font-size: 22px; font-weight: 600; color: var(--black); margin: 0 0 8px; letter-spacing: -.02em; }
    .docs-card-desc { font-family: Intertight,Arial,sans-serif; font-size: 14px; color: var(--gray-1); margin: 0; line-height: 1.55; }
    .docs-card-arrow { margin-top: 24px; font-family: Intertight,Arial,sans-serif; font-size: 13px; font-weight: 600; color: var(--black); }
    /* File tree */
    .docs-file-tree { font-family: 'Courier New',monospace; font-size: 13px; line-height: 1.9; background: var(--black); color: #6a6a6a; padding: 32px; overflow-x: auto; }
    .docs-file-tree .hl { color: var(--white); }
    .docs-file-tree .accent { color: var(--orange); }
  </style>
</head>
<body<?= isset($body_bg) ? ' style="background-color:' . h($body_bg) . ';"' : '' ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP55MDJJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
<nav>
    <div class="nav-container">
        <div class="nav-content">
            <div class="left-section">
                <button class="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="logo"><img src="/assets/img/logo.png" alt="" style="height: 35px;cursor:pointer" onclick="window.open('/');"></div>
            </div>
            <div class="menu">
                
            




<!-- 

<div class="nav-right-wrap" style="margin-top: 6px;"><div class="nav-right">
            <a href="../contact.html" class="button-01 w-inline-block">
              <div class="button-01-arrow-wrap"><div class="button-01-arrow-box">
                <img src="/assets/svg/67ee27543bb05e34e590d1ee_arrow-right-1.svg" loading="lazy" alt="" class="button-01-arrow">
                <img src="/assets/svg/67ee275588f13b2e796f3c2b_arrow-right.svg" loading="lazy" alt="" class="button-01-arrow">
              </div></div>
              <div class="button-01-text">Let's discuss</div>
            </a>
          </div></div> -->

 




<ul role="list" class="nav-menus w-list-unstyled">
  <li class="nav-item">
                <div data-delay="600" data-hover="true" class="nav-dropdown w-dropdown" style="">
                  <div class="nav-dropdown-toggle w-dropdown-toggle" id="" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                    <div class="nav-link-text" style="color: rgb(0, 0, 0);" onclick="window.open('/');">Acceuil</div>
                    </div>
                    </div>
  </li>

              <li class="nav-item">
                <div data-delay="600" data-hover="true" class="nav-dropdown w-dropdown" style="">
                  <div class="nav-dropdown-toggle w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                    <div class="nav-link-text" style="color: rgb(0, 0, 0);">Services</div>
                    <div class="nav-dropdown-icon w-icon-dropdown-toggle" aria-hidden="true" style="color: rgb(0, 0, 0);"></div>
                  </div>
                  <nav class="nav-dropdown-list shadow-three mobile-shadow-hide _5 w-dropdown-list" 
                  id="w-dropdown-list-0" aria-labelledby="w-dropdown-toggle-0" 
                  style="width:260px;transform: translate3d(0px, 10%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 0;">
                    <div class="nav-dropdown-box" style="padding-top: 13px; padding-left: 24px; padding-bottom: 18px;">
                      <div class="nav-dropdown-menu-wrap">
                        <div class="nav-dropdown-menu">
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/entretien-vidange.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Entretien / Vidange</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/revision.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Révision Premium</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/mecanique-generale.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Mécanique générale</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/freins.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Freins / Plaquettes</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/courroie-distribution.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Courroie de distribution</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/embrayage.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Embrayage</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/suspension-amortisseurs.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Suspension / Amortisseurs</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/batterie.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Batteries</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/climatisation.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Climatisation</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/diagnostic.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Diagnostic électronique</a>
                          <a style="margin-bottom:3px;font-size: 15px;font-weight: 500;font-family: 'Inter UI';" href="/services/controle-technique.php" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Contrôle technique</a>
                        </div>

<!-- 
                         <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/revision.php">Révision Premium</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/controle-technique.php">Contrôle technique</a></li>
                           <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/diagnostic.php">Diagnostic électronique</a></li>
                         <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/vitrage.php">Vitrage / Pare-brise</a></li>
                         <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;color:#ff5d17;font-weight:600;" href="/services/">Tous nos services →</a></li>
                  



                         -->

                        <!-- <div class="nav-dropdown-menu center">
                          <p class="paragraph-small text-gray-2 bottom-padding">(THEME DOCS)</p>
                          <a href="index.html" class="nav-dropdown-menu-link paragraph-large w--current" tabindex="0">Overview</a>
                          <a href="colors.html" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Colors</a>
                          <a href="fonts.html" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Typography</a>
                          <a href="buttons.html" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Buttons</a>
                          <a href="header.html" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Headers</a>
                          <a href="empty.html" class="nav-dropdown-menu-link paragraph-large" tabindex="0">Empty Page</a>
                          <a href="1-col.html" class="nav-dropdown-menu-link paragraph-large" tabindex="0">1-Column</a>
                          <a href="2-col.html" class="nav-dropdown-menu-link paragraph-large" tabindex="0">2-Column</a>
                        </div> -->
                      </div>
                    </div>
                  </nav>
                </div>
              </li>
              <li class="nav-item" style="margin-left:9px">
                <div data-delay="600" data-hover="true" class="nav-dropdown w-dropdown" style="">
                  <div class="nav-dropdown-toggle w-dropdown-toggle" id="" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                    <div class="nav-link-text" style="color: rgb(0, 0, 0);" onclick="window.open('/contact.php');">Contact</div>
                    </div>
                    </div>
  </li>


             
        
              <!-- <li class="mobile-margin-top-12">
                <div class="nav-button-wrapper mobile">
                  <a href="/rendez-vous.php" class="button-01 w-inline-block">
                    <div class="button-01-arrow-wrap"><div class="button-01-arrow-box">
                      <img src="../assets/images/67ee27543bb05e34e590d1ee_arrow-right-1.svg" loading="lazy" alt="" class="button-01-arrow">
                      <img src="../assets/images/67ee275588f13b2e796f3c2b_arrow-right.svg" loading="lazy" alt="" class="button-01-arrow">
                    </div></div>
                    <div class="button-01-text">Let's discuss</div>
                  </a>
                </div>
              </li> -->
            </ul>


            











<!--           

                <a class="btn" href="/" style="padding: 11px;border-width:0px;font-size:17px;">Accueil</a>

                <a class="btn" style="padding: 11px;border-width:0px;font-size:17px;" href="/services/" role="button" data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/entretien-vidange.php">Entretien / Vidange</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/revision.php">Révision Premium</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/controle-technique.php">Contrôle technique</a></li>
                        <li><hr class="dropdown-divider mx-2"></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/mecanique-generale.php">Mécanique générale</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/courroie-distribution.php">Courroie de distribution</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/embrayage.php">Embrayage</a></li>
                        <li><hr class="dropdown-divider mx-2"></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/freins.php">Freins / Plaquettes</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/suspension-amortisseurs.php">Suspension / Amortisseurs</a></li>
                        <li><hr class="dropdown-divider mx-2"></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/batterie.php">Batterie</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/climatisation.php">Climatisation</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/pneumatiques.php">Pneumatiques</a></li>
                        <li><hr class="dropdown-divider mx-2"></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/diagnostic.php">Diagnostic électronique</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/carrosserie-peinture.php">Carrosserie / Peinture</a></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;" href="/services/vitrage.php">Vitrage / Pare-brise</a></li>
                        <li><hr class="dropdown-divider mx-2"></li>
                        <li><a class="btn" style="width: 235px;padding: 11px;border-width:0px;font-size:16px;color:#ff5d17;font-weight:600;" href="/services/">Tous nos services →</a></li>
                    </ul>

                <a class="btn" style="padding: 11px;border-width:0px;font-size:17px;" href="/contact.php">Contact</a> -->
            </div>
            <div>
                <a href="/rendez-vous.php" class="button-02 w-inline-block" 
            style="height: 40px; width: 205px; padding-left: 0px; padding-right: 5px;">
            <div class="button-icon-box">
              <img src="/assets/svg/67ee275588f13b2e796f3c2b_arrow-right.svg" loading="lazy" alt="" class="button-01-icon">
              <img src="/assets/svg/67eed5c086acbfab6b5131c3_arrow-right.svg" loading="lazy" alt="" class="button-01-icon hover-icon">
            </div>
            <div class="button-text-box"><div class="button-text">
              <div class="button-02-text">Prendre rendez-vous</div>
              <div class="button-02-text" style="margin-top:-1px; color:white">Prendre rendez-vous</div>
            </div></div>
            <div class="button-02-bg"></div>
            <div class="button-02-hover-bg"></div>
          </a>
                <!-- <button class="btn" style="padding-top: 5px;padding-bottom: 4px;border-width:0px" id="open-cart-button" onclick="log('Open Cart', 'Count : '+document.getElementById('cart-items-count').innerHTML);openCart()">
                    <svg width="30px" height="30px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M800.8 952c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56z m-448 0c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56zM344 792c-42.4 0-79.2-33.6-84-76l-54.4-382.4-31.2-178.4c-2.4-19.2-19.2-35.2-37.6-35.2H96c-13.6 0-24-10.4-24-24s10.4-24 24-24h40.8c42.4 0 80 33.6 85.6 76l31.2 178.4 54.4 383.2C309.6 728 326.4 744 344 744h520c13.6 0 24 10.4 24 24s-10.4 24-24 24H344z m40-128c-12.8 0-23.2-9.6-24-22.4-0.8-6.4 1.6-12.8 5.6-17.6s10.4-8 16-8l434.4-32c19.2 0 36-15.2 38.4-33.6l50.4-288c1.6-13.6-2.4-28-10.4-36.8-5.6-6.4-12.8-9.6-21.6-9.6H320c-13.6 0-24-10.4-24-24s10.4-24 24-24h554.4c22.4 0 42.4 9.6 57.6 25.6 16.8 19.2 24.8 47.2 21.6 75.2l-50.4 288c-4.8 41.6-42.4 74.4-84 74.4l-432 32c-1.6 0.8-2.4 0.8-3.2 0.8z" fill="" /></svg>
                    <div id="cart-items-count" style="position: absolute;
              background-color: #f25822;
              color: white;
              top: 3px;
              right: 3px;
              padding: 2px;
              font-size: 11px;
              border-radius: 3px;
              padding-left: 4px;
              padding-right: 4px;
                display:none">
                        
                    </div>
                </button>  -->
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div>
        
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:17px;" href="/">Accueil</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:17px;font-weight:600;" href="/services/">Services</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/entretien-vidange.php">Entretien / Vidange</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/revision.php">Révision Premium</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/mecanique-generale.php">Mécanique générale</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/freins.php">Freins / Plaquettes</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/courroie-distribution.php">Courroie de distribution</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/embrayage.php">Embrayage</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/suspension-amortisseurs.php">Suspension / Amortisseurs</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/batterie.php">Batterie</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/climatisation.php">Climatisation</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/diagnostic.php">Diagnostic électronique</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:15px;padding-left:39px;" href="/services/controle-technique.php">Contrôle technique</a>
            <a class="btn" style="border-left-width: 0px; border-right-width: 0px; text-align: start;border-color:#dddddd;font-size:17px;" href="/contact.php">Contact</a>
        </div>
    </div>
</nav>

<div style="height: 75px;"></div>
      <div class="d-none d-md-block" style="height: 30px;"></div>


<!--       
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><i class="bi bi-wrench-adjustable-circle"></i> Garage Auto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services/" role="button" data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services/mecanique-generale.php">Mécanique générale</a></li>
                        <li><a class="dropdown-item" href="/services/entretien-vidange.php">Entretien / Vidange</a></li>
                        <li><a class="dropdown-item" href="/services/pneumatiques.php">Pneumatiques</a></li>
                        <li><a class="dropdown-item" href="/services/diagnostic.php">Diagnostic électronique</a></li>
                        <li><a class="dropdown-item" href="/services/carrosserie-peinture.php">Carrosserie / Peinture</a></li>
                        <li><a class="dropdown-item" href="/services/climatisation.php">Climatisation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/services/">Tous nos services</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white ms-2 px-3" href="/rendez-vous.php">Prendre RDV</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<!-- <main class="py-4">
    <div class="container"> -->

<div class="container">
    
 
        <?= display_flash() ?>
