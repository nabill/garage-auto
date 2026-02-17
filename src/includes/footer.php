    </div>
</main>
<?php
$footer_hours = get_opening_hours($pdo);
?>
<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5><i class="bi bi-wrench-adjustable-circle"></i> Garage Auto</h5>
                <p class="text-muted">Votre garage de confiance pour l'entretien et la réparation de votre véhicule.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Horaires d'ouverture</h5>
                <table class="table table-sm table-dark mb-0">
                    <tbody>
                    <?php foreach ($footer_hours as $fh): ?>
                        <tr>
                            <td><?= day_name($fh['day_of_week']) ?></td>
                            <td>
                                <?php if ($fh['open_time'] && $fh['close_time']): ?>
                                    <?= format_time($fh['open_time']) ?> – <?= format_time($fh['close_time']) ?>
                                <?php else: ?>
                                    <span class="text-muted">Fermé</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Contact</h5>
                <ul class="list-unstyled text-muted">
                    <li><i class="bi bi-geo-alt"></i> 123 Rue du Garage, 75000 Paris</li>
                    <li><i class="bi bi-telephone"></i> 01 23 45 67 89</li>
                    <li><i class="bi bi-envelope"></i> contact@garage-auto.fr</li>
                </ul>
                <a href="/contact.php" class="btn btn-outline-light btn-sm">Nous contacter</a>
            </div>
        </div>
        <hr class="border-secondary">
        <p class="text-center text-muted mb-0">&copy; <?= date('Y') ?> Garage Auto. Tous droits réservés.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
