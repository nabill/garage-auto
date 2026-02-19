    </div>
</main>
<?php
$footer_hours = get_opening_hours($pdo);
?>
<footer class="site-footer mt-5">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="footer-brand">
                    <span class="brand-icon"><i class="bi bi-wrench-adjustable-circle"></i></span>
                    Garage Auto
                </div>
                <p class="footer-desc">Votre garage de confiance pour l'entretien et la réparation de votre véhicule. Professionnalisme et qualité depuis plus de 20 ans.</p>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-2">
                <h5>Services</h5>
                <ul class="footer-links">
                    <li><a href="/services/mecanique-generale.php">Mécanique générale</a></li>
                    <li><a href="/services/entretien-vidange.php">Entretien / Vidange</a></li>
                    <li><a href="/services/pneumatiques.php">Pneumatiques</a></li>
                    <li><a href="/services/diagnostic.php">Diagnostic</a></li>
                    <li><a href="/services/carrosserie-peinture.php">Carrosserie</a></li>
                    <li><a href="/services/climatisation.php">Climatisation</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <h5>Horaires d'ouverture</h5>
                <table class="table table-sm table-dark mb-0">
                    <tbody>
                    <?php foreach ($footer_hours as $fh): ?>
                        <tr>
                            <td><?= day_name($fh['day_of_week']) ?></td>
                            <td class="text-end">
                                <?php if ($fh['open_time'] && $fh['close_time']): ?>
                                    <?= format_time($fh['open_time']) ?> – <?= format_time($fh['close_time']) ?>
                                <?php else: ?>
                                    <span style="color:var(--zinc-600);">Fermé</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <h5>Contact</h5>
                <ul class="contact-list">
                    <li><i class="bi bi-geo-alt-fill"></i> 123 Rue du Garage, 75000 Paris</li>
                    <li><i class="bi bi-telephone-fill"></i> 01 23 45 67 89</li>
                    <li><i class="bi bi-envelope-fill"></i> contact@garage-auto.fr</li>
                </ul>
                <a href="/contact.php" class="btn btn-outline-light btn-sm mt-2"><i class="bi bi-arrow-right me-1"></i>Nous contacter</a>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 pb-2">
            <p class="footer-bottom mb-0">&copy; <?= date('Y') ?> Garage Auto. Tous droits réservés.</p>
            <div class="d-flex gap-3">
                <a href="#" class="footer-bottom text-decoration-none" style="color:var(--zinc-500);">Politique de confidentialité</a>
                <a href="#" class="footer-bottom text-decoration-none" style="color:var(--zinc-500);">Mentions légales</a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
