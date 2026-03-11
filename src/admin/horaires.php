<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Horaires d\'ouverture';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) {
        flash('danger', 'Jeton de sécurité invalide.');
        redirect('/admin/horaires.php');
    }

    $stmt = $pdo->prepare('UPDATE opening_hours SET open_time = ?, close_time = ?, open_time2 = ?, close_time2 = ? WHERE day_of_week = ?');
    for ($d = 0; $d <= 6; $d++) {
        $open  = $_POST["open_$d"]   ?? '';
        $close = $_POST["close_$d"]  ?? '';
        $open2  = $_POST["open2_$d"] ?? '';
        $close2 = $_POST["close2_$d"] ?? '';
        $stmt->execute([$open ?: null, $close ?: null, $open2 ?: null, $close2 ?: null, $d]);
    }
    flash('success', 'Horaires mis à jour.');
    redirect('/admin/horaires.php');
}

$hours = get_opening_hours($pdo);
$hours_map = [];
foreach ($hours as $h) {
    $hours_map[$h['day_of_week']] = $h;
}

require __DIR__ . '/includes/header.php';
?>

<h1>Horaires d'ouverture</h1>
<p class="text-muted">Laissez vide pour indiquer un jour fermé.</p>

<div class="card mt-3">
    <div class="card-body">
        <form method="post">
            <?= csrf_field() ?>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Jour</th>
                        <th colspan="2">Matin (1ère tranche)</th>
                        <th colspan="2">Après-midi (2ème tranche)</th>
                    </tr>
                    <tr class="text-muted small">
                        <th></th>
                        <th>Ouverture</th><th>Fermeture</th>
                        <th>Ouverture</th><th>Fermeture</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($d = 0; $d <= 6; $d++): ?>
                    <tr>
                        <td class="fw-semibold"><?= day_name($d) ?></td>
                        <td><input type="time" class="form-control" name="open_<?= $d ?>"   value="<?= h($hours_map[$d]['open_time']   ?? '') ?>"></td>
                        <td><input type="time" class="form-control" name="close_<?= $d ?>"  value="<?= h($hours_map[$d]['close_time']  ?? '') ?>"></td>
                        <td><input type="time" class="form-control" name="open2_<?= $d ?>"  value="<?= h($hours_map[$d]['open_time2']  ?? '') ?>"></td>
                        <td><input type="time" class="form-control" name="close2_<?= $d ?>" value="<?= h($hours_map[$d]['close_time2'] ?? '') ?>"></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
