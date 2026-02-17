<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Contact';
$hours = get_opening_hours($pdo);
$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) { $errors[] = 'Jeton de sécurité invalide.'; }

    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $sujet = trim($_POST['sujet'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($nom === '') $errors[] = 'Le nom est obligatoire.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'L\'email n\'est pas valide.';
    if ($sujet === '') $errors[] = 'Le sujet est obligatoire.';
    if ($message === '') $errors[] = 'Le message est obligatoire.';

    if (empty($errors)) {
        $stmt = $pdo->prepare('INSERT INTO contact_messages (nom, email, sujet, message) VALUES (?, ?, ?, ?)');
        $stmt->execute([$nom, $email, $sujet, $message]);

        // Attempt to send email (silent fail if SMTP not configured)
        @mail(
            'contact@garage-auto.fr',
            "Nouveau message : $sujet",
            "De : $nom ($email)\n\n$message",
            "From: noreply@garage-auto.fr\r\nReply-To: $email"
        );

        $success = true;
        $nom = $email = $sujet = $message = '';
    }
}

require __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4">Contactez-nous</h1>

<div class="row">
    <div class="col-md-5 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5><i class="bi bi-geo-alt-fill text-primary"></i> Adresse</h5>
                <p>123 Rue du Garage<br>75000 Paris</p>

                <h5><i class="bi bi-telephone-fill text-primary"></i> Téléphone</h5>
                <p>01 23 45 67 89</p>

                <h5><i class="bi bi-envelope-fill text-primary"></i> Email</h5>
                <p>contact@garage-auto.fr</p>

                <h5><i class="bi bi-clock-fill text-primary"></i> Horaires</h5>
                <table class="table table-sm">
                    <tbody>
                    <?php foreach ($hours as $h_row): ?>
                        <tr>
                            <td><?= day_name($h_row['day_of_week']) ?></td>
                            <td>
                                <?php if ($h_row['open_time'] && $h_row['close_time']): ?>
                                    <?= format_time($h_row['open_time']) ?> – <?= format_time($h_row['close_time']) ?>
                                <?php else: ?>
                                    <span class="text-muted">Fermé</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <?php if ($success): ?>
            <div class="alert alert-success">
                <i class="bi bi-check-circle"></i> Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.
            </div>
        <?php endif; ?>

        <?php foreach ($errors as $e): ?>
            <div class="alert alert-danger"><?= h($e) ?></div>
        <?php endforeach; ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Envoyez-nous un message</h5>
                <form method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom *</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?= h($nom ?? '') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= h($email ?? '') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="sujet" class="form-label">Sujet *</label>
                        <input type="text" class="form-control" id="sujet" name="sujet" value="<?= h($sujet ?? '') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required><?= h($message ?? '') ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
