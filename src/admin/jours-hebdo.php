<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Fermeture hebdomadaire';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_verify()) {
        flash('danger', 'Jeton de sécurité invalide.');
        redirect('/admin/jours-hebdo.php');
    }

    $closed_days = $_POST['closed'] ?? [];
    $stmt = $pdo->prepare('UPDATE weekly_closures SET is_closed = ? WHERE day_of_week = ?');
    for ($d = 0; $d <= 6; $d++) {
        $stmt->execute([in_array((string)$d, $closed_days) ? 1 : 0, $d]);
    }
    flash('success', 'Fermetures hebdomadaires mises à jour.');
    redirect('/admin/jours-hebdo.php');
}

$closures = $pdo->query('SELECT * FROM weekly_closures ORDER BY day_of_week')->fetchAll();
$closed_map = [];
foreach ($closures as $c) {
    $closed_map[$c['day_of_week']] = $c['is_closed'];
}

require __DIR__ . '/includes/header.php';
?>

<h1>Fermeture hebdomadaire</h1>
<p class="text-muted">Cochez les jours où le garage est fermé.</p>

<div class="card mt-3">
    <div class="card-body">
        <form method="post">
            <?= csrf_field() ?>
            <?php for ($d = 0; $d <= 6; $d++): ?>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" name="closed[]" value="<?= $d ?>" id="day<?= $d ?>"
                        <?= !empty($closed_map[$d]) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="day<?= $d ?>"><?= day_name($d) ?></label>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
        </form>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
