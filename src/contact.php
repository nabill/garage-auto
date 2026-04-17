<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Contact';
$body_bg = '#f3f3f3';
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

        // Send notification email
        $mail_body = '<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body style="font-family:Arial,sans-serif;color:#222;max-width:600px;margin:0 auto;padding:24px">'
            . '<div style="border-left:4px solid #ff5d17;padding-left:16px;margin-bottom:24px">'
            . '<h2 style="margin:0;color:#ff5d17">Nouveau message de contact</h2></div>'
            . '<table style="width:100%;border-collapse:collapse;margin-bottom:24px">'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600;width:120px">Nom</td><td style="padding:8px 12px;border-bottom:1px solid #eee">' . htmlspecialchars($nom) . '</td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600">Email</td><td style="padding:8px 12px;border-bottom:1px solid #eee"><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600">Sujet</td><td style="padding:8px 12px;border-bottom:1px solid #eee">' . htmlspecialchars($sujet) . '</td></tr>'
            . '</table>'
            . '<div style="background:#f9f9f9;border:1px solid #eee;border-radius:4px;padding:16px">'
            . '<p style="margin:0 0 8px;font-weight:600">Message :</p>'
            . '<p style="margin:0;white-space:pre-wrap">' . htmlspecialchars($message) . '</p></div>'
            . '</body></html>';
        @mail(
            'contact@mecanocestas.com',
            '=?UTF-8?B?' . base64_encode("Nouveau message : $sujet") . '?=',
            $mail_body,
            "From: noreply@mecanocestas.com\r\nReply-To: $email\r\nContent-Type: text/html; charset=UTF-8"
        );

        $success = true;
        $nom = $email = $sujet = $message = '';
    }
}

require __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4" style="color: black; font-weight: 700; border-left: 9px solid #ff5d17; padding-left: 15px;">Contactez-nous</h1>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">

            <div class="d-flex" style="margin-bottom: 7px;">
                <svg style="height:23px;margin-right: 15px;margin-left: 6px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192C0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67c-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80s-80 35.817-80 80s35.817 80 80 80z" fill="currentColor"></path></svg>
                <p class="fs-5" style="font-size: 18px !important;">3 Chemin des Arestieux, 33610 Cestas</p>
            </div>
            
            <div class="d-flex" style="margin-bottom: 7px;">
                <svg style="height: 27px;margin-right: 11px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.24 1.02l-2.21 2.2z" fill="currentColor"></path></svg>
                <a href="tel:0768708389" class="fs-5" style="margin-top:3px;font-size: 18px !important;color:inherit;text-decoration:none;">07 68 70 83 89</a>
            </div>

            <div class="d-flex" style="margin-bottom: 37px;margin-top:13px">
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
                                    <?php if ($h_row['open_time2'] && $h_row['close_time2']): ?>
                                        &nbsp;/&nbsp;<?= format_time($h_row['open_time2']) ?> – <?= format_time($h_row['close_time2']) ?>
                                    <?php endif; ?>
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
                    <button type="submit" class="btn btn-green" 
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
