    </div>
</main>
<?php
$footer_hours = get_opening_hours($pdo);
?>
<footer class="site-footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="footer-brand">
                    <span class="brand-icon"><i class="bi bi-wrench-adjustable-circle"></i></span>
                    Garage Auto
                </div>
                <p class="footer-desc">Votre garage de confiance pour l'entretien et la réparation de votre véhicule. Professionnalisme et qualité depuis plus de 20 ans.</p>
            </div>
            <div class="col-md-4 mb-4">
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
                                    <span style="color:var(--gray-600);">Fermé</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 mb-4">
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
        <p class="text-center footer-bottom mb-0">&copy; <?= date('Y') ?> Garage Auto. Tous droits réservés.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
