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

<h1 class="mb-4" style="color: #ff5d17;font-weight: 700;">Contactez-nous</h1>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">

            <div class="d-flex" style="margin-bottom: 7px;">
                <svg style="height:23px;margin-right: 15px;margin-left: 6px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192C0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67c-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80s-80 35.817-80 80s35.817 80 80 80z" fill="currentColor"></path></svg>
                <p class="fs-5" style="font-size: 18px !important;">3 Chemin des Arestieux<br>33610 Cestas</p>
            </div>
            
            <div class="d-flex" style="margin-bottom: 35px;">
                <svg style="height: 29px;margin-right: 9px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><g fill="none"><path d="M5.25 4h13.5a3.25 3.25 0 0 1 3.245 3.066L22 7.25v9.5a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75v-9.5a3.25 3.25 0 0 1 3.066-3.245L5.25 4h13.5h-13.5zM20.5 9.373l-8.15 4.29a.75.75 0 0 1-.603.043l-.096-.042L3.5 9.374v7.376a1.75 1.75 0 0 0 1.606 1.744l.144.006h13.5a1.75 1.75 0 0 0 1.744-1.607l.006-.143V9.373zM18.75 5.5H5.25a1.75 1.75 0 0 0-1.744 1.606L3.5 7.25v.429l8.5 4.473l8.5-4.474V7.25a1.75 1.75 0 0 0-1.607-1.744L18.75 5.5z" fill="currentColor"></path></g></svg>
                <p class="fs-5" style="font-size: 18px !important;">contact@mecanocestas.com</p>
            </div>

            <div class="d-flex" style="margin-bottom: 7px;">
                <svg style="height: 27px;margin-right: 11px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm.5-13H11v6l5.2 3.2l.8-1.3l-4.5-2.7V7z" fill="currentColor"></path></svg>
                <p class="fs-5" style="font-size: 18px !important;">Horaires</p>
            </div>

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

    <div class="col-md-6">
        <?php if ($success): ?>
            <div class="alert alert-success" style="font-size: 17px; font-weight: 600; line-height: 25px;">
                <i class="bi bi-check-circle"></i> Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.
            </div>
        <?php endif; ?>

        <?php foreach ($errors as $e): ?>
            <div class="alert alert-danger"><?= h($e) ?></div>
        <?php endforeach; ?>

        <div class="card shadow">
            <div class="card-body">
                <h3 style="margin-top: 0px; margin-bottom: 25px;">Envoyez-nous un message</h3>
                
                <form method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nom" class="form-label" style="font-size: 15px;">Nom *</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?= h($nom ?? '') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-size: 15px;">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= h($email ?? '') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="sujet" class="form-label" style="font-size: 15px;">Sujet *</label>
                        <input type="text" class="form-control" id="sujet" name="sujet" value="<?= h($sujet ?? '') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label" style="font-size: 15px;">Message *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required><?= h($message ?? '') ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-green" id="btnRDV" onclick="window.location.href='/rendez-vous.php'" 
                    style="width: auto; font-size: 16px;padding: 9px; height: 49px">
                                    <p style="padding-top:9px" id="trackLabel">
                                    Envoyer</p>
                                </button> 
                </form>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
