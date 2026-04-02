<?php
require_once __DIR__ . '/config/init.php';

$page_title = 'Demande de devis';
$body_bg = '#f3f3f3';
$brands   = $pdo->query('SELECT * FROM car_brands ORDER BY nom')->fetchAll();
$services = $pdo->query('SELECT * FROM devis_services WHERE actif = 1 ORDER BY ordre')->fetchAll();
$errors   = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) { $errors[] = 'Jeton de sécurité invalide.'; }

    $client_nom   = trim($_POST['client_nom']   ?? '');
    $client_tel   = trim($_POST['client_tel']   ?? '');
    $client_email = trim($_POST['client_email'] ?? '');
    $brand_id     = (int)($_POST['brand_id']    ?? 0);
    $model_id     = (int)($_POST['model_id']    ?? 0);
    $notes        = trim($_POST['notes']        ?? '');
    $service_ids  = array_map('intval', $_POST['services'] ?? []);

    if ($client_nom === '')   $errors[] = 'Le nom est obligatoire.';
    if ($client_tel === '')   $errors[] = 'Le téléphone est obligatoire.';
    if (!filter_var($client_email, FILTER_VALIDATE_EMAIL)) $errors[] = 'L\'email n\'est pas valide.';
    if (!$brand_id)           $errors[] = 'Veuillez choisir une marque.';
    if (!$model_id)           $errors[] = 'Veuillez choisir un modèle.';
    if (empty($service_ids))  $errors[] = 'Veuillez sélectionner au moins un service.';

    // Validate model belongs to brand
    if ($brand_id && $model_id && empty($errors)) {
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM car_models WHERE id = ? AND brand_id = ?');
        $stmt->execute([$model_id, $brand_id]);
        if ($stmt->fetchColumn() == 0) $errors[] = 'Le modèle ne correspond pas à la marque.';
    }

    // Validate service IDs exist and are active
    if (!empty($service_ids) && empty($errors)) {
        $placeholders = implode(',', array_fill(0, count($service_ids), '?'));
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM devis_services WHERE id IN ($placeholders) AND actif = 1");
        $stmt->execute($service_ids);
        if ((int)$stmt->fetchColumn() !== count($service_ids)) $errors[] = 'Service invalide.';
    }

    if (empty($errors)) {
        // Insert devis request
        $stmt = $pdo->prepare('INSERT INTO devis_requests (client_nom, client_tel, client_email, brand_id, model_id, notes) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$client_nom, $client_tel, $client_email, $brand_id, $model_id, $notes ?: null]);
        $devis_id = $pdo->lastInsertId();

        // Insert pivot
        $pivot = $pdo->prepare('INSERT INTO devis_request_services (devis_id, service_id) VALUES (?, ?)');
        foreach ($service_ids as $sid) { $pivot->execute([$devis_id, $sid]); }

        // Fetch brand/model/service names for email
        $s = $pdo->prepare('SELECT nom FROM car_brands WHERE id = ?');
        $s->execute([$brand_id]);
        $brand_nom = $s->fetchColumn();

        $s = $pdo->prepare('SELECT nom FROM car_models WHERE id = ?');
        $s->execute([$model_id]);
        $model_nom = $s->fetchColumn();

        $placeholders = implode(',', array_fill(0, count($service_ids), '?'));
        $s = $pdo->prepare("SELECT nom FROM devis_services WHERE id IN ($placeholders) ORDER BY ordre");
        $s->execute($service_ids);
        $service_noms = $s->fetchAll(PDO::FETCH_COLUMN);

        $services_html = '<ul style="margin:0;padding-left:18px">';
        foreach ($service_noms as $sn) { $services_html .= '<li>' . htmlspecialchars($sn) . '</li>'; }
        $services_html .= '</ul>';

        $mail_body = '<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body style="font-family:Arial,sans-serif;color:#222;max-width:600px;margin:0 auto;padding:24px">'
            . '<div style="border-left:4px solid #ff5d17;padding-left:16px;margin-bottom:24px">'
            . '<h2 style="margin:0;color:#ff5d17">Nouvelle demande de devis</h2></div>'
            . '<table style="width:100%;border-collapse:collapse;margin-bottom:24px">'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600;width:120px">Nom</td><td style="padding:8px 12px;border-bottom:1px solid #eee">' . htmlspecialchars($client_nom) . '</td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600">Téléphone</td><td style="padding:8px 12px;border-bottom:1px solid #eee">' . htmlspecialchars($client_tel) . '</td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600">Email</td><td style="padding:8px 12px;border-bottom:1px solid #eee"><a href="mailto:' . htmlspecialchars($client_email) . '">' . htmlspecialchars($client_email) . '</a></td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600">Véhicule</td><td style="padding:8px 12px;border-bottom:1px solid #eee">' . htmlspecialchars("$brand_nom $model_nom") . '</td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f3f3f3;font-weight:600;vertical-align:top">Services</td><td style="padding:8px 12px;border-bottom:1px solid #eee">' . $services_html . '</td></tr>'
            . '</table>'
            . ($notes ? '<div style="background:#f9f9f9;border:1px solid #eee;border-radius:4px;padding:16px"><p style="margin:0 0 8px;font-weight:600">Notes :</p><p style="margin:0;white-space:pre-wrap">' . htmlspecialchars($notes) . '</p></div>' : '')
            . '</body></html>';

        @mail(
            'contact@mecanocestas.com',
            '=?UTF-8?B?' . base64_encode("Nouvelle demande de devis — $client_nom") . '?=',
            $mail_body,
            "From: noreply@mecanocestas.com\r\nReply-To: $client_email\r\nContent-Type: text/html; charset=UTF-8"
        );

        redirect('/devis-confirmation.php');
    }
}

require __DIR__ . '/includes/header.php';
?>

<div class="row" style="justify-content:center">
<div class="col col-12 col-lg-7">

<h1 class="mb-3" style="color:black;font-weight:700;border-left:9px solid #ff5d17;padding-left:15px;">Demande de devis</h1>
<p class="fs-5 mb-4" style="line-height:33px;margin-top:15px">Remplissez le formulaire ci-dessous et nous vous enverrons un devis personnalisé dans les plus brefs délais.</p>

<?php foreach ($errors as $e): ?>
    <div class="alert alert-danger"><?= h($e) ?></div>
<?php endforeach; ?>

<div class="card">
    <div class="card-body">
        <form method="post">
            <?= csrf_field() ?>

            <h3 class="mb-3">Vos informations</h3>
            <div class="mb-3">
                <label for="client_nom" class="form-label" style="font-size:15px">Nom complet *</label>
                <input type="text" class="form-control" id="client_nom" name="client_nom" value="<?= h($client_nom ?? '') ?>" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="client_tel" class="form-label" style="font-size:15px">Téléphone *</label>
                    <input type="tel" class="form-control" id="client_tel" name="client_tel" value="<?= h($client_tel ?? '') ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="client_email" class="form-label" style="font-size:15px">Email *</label>
                    <input type="email" class="form-control" id="client_email" name="client_email" value="<?= h($client_email ?? '') ?>" required>
                </div>
            </div>

            <hr>
            <h3 class="mb-3">Votre véhicule</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="brand_id" class="form-label" style="font-size:15px">Marque *</label>
                    <select class="form-select" id="brand_id" name="brand_id" required>
                        <option value="">-- Choisir une marque --</option>
                        <?php foreach ($brands as $b): ?>
                            <option value="<?= $b['id'] ?>" <?= ($brand_id ?? 0) == $b['id'] ? 'selected' : '' ?>><?= h($b['nom']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="model_id" class="form-label" style="font-size:15px">Modèle *</label>
                    <select class="form-select" id="model_id" name="model_id" required disabled>
                        <option value="">-- Choisir un modèle --</option>
                    </select>
                </div>
            </div>

            <hr>
            <h3 class="mb-3">Services souhaités *</h3>
            <div class="row g-2 mb-3">
                <?php foreach ($services as $svc): ?>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="services[]"
                            id="svc_<?= $svc['id'] ?>" value="<?= $svc['id'] ?>"
                            <?= in_array($svc['id'], $service_ids ?? []) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="svc_<?= $svc['id'] ?>" style="font-size:15px">
                            <?= h($svc['nom']) ?>
                        </label>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <hr>
            <h3 class="mb-3">Notes complémentaires</h3>
            <div class="mb-4">
                <textarea class="form-control" id="notes" name="notes" rows="4"
                    placeholder="Décrivez votre besoin, kilométrage, symptômes observés…"><?= h($notes ?? '') ?></textarea>
            </div>

            <button type="submit" class="btn btn-green" style="width:auto;font-size:16px;padding:9px;height:49px">
                <p style="padding-top:9px">Envoyer la demande</p>
            </button>
        </form>
    </div>
</div>

</div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
