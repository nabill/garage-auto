<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Confirmation de rendez-vous';
require __DIR__ . '/includes/header.php';
?>

<div class="form-section text-center py-5">
    <div class="confirmation-box">
        <i class="bi bi-check-circle-fill text-success" style="font-size:4rem;"></i>
        <h1 class="mt-3">Demande envoyée !</h1>
        <p class="lead">Votre demande de rendez-vous a bien été enregistrée.</p>
        <p class="text-muted">Nous vous recontacterons dans les plus brefs délais pour confirmer votre créneau.</p>
        <a href="/" class="btn btn-primary mt-3">Retour à l'accueil</a>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
