<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/includes/auth-check.php';

$page_title = 'Tableau de bord';

// Stats
$rdv_today = $pdo->query("SELECT COUNT(*) FROM appointments WHERE date_rdv = CURDATE()")->fetchColumn();
$rdv_pending = $pdo->query("SELECT COUNT(*) FROM appointments WHERE statut = 'en_attente'")->fetchColumn();
$rdv_total = $pdo->query("SELECT COUNT(*) FROM appointments")->fetchColumn();
$messages_unread = $pdo->query("SELECT COUNT(*) FROM contact_messages WHERE is_read = 0")->fetchColumn();

// Upcoming appointments
$upcoming = $pdo->query("SELECT a.*, cb.nom AS marque, cm.nom AS modele
    FROM appointments a
    JOIN car_brands cb ON a.brand_id = cb.id
    JOIN car_models cm ON a.model_id = cm.id
    WHERE a.date_rdv >= CURDATE() AND a.statut IN ('en_attente','confirme')
    ORDER BY a.date_rdv ASC LIMIT 5")->fetchAll();

require __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4">Tableau de bord</h1>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">RDV aujourd'hui</h5>
                <p class="display-6"><?= $rdv_today ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title">En attente</h5>
                <p class="display-6"><?= $rdv_pending ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Total RDV</h5>
                <p class="display-6"><?= $rdv_total ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <h5 class="card-title">Messages non lus</h5>
                <p class="display-6"><?= $messages_unread ?></p>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Prochains rendez-vous</h5>
    </div>
    <div class="card-body">
        <?php if (empty($upcoming)): ?>
            <p class="text-muted">Aucun rendez-vous à venir.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Client</th>
                            <th>Véhicule</th>
                            <th>Statut</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($upcoming as $rdv): ?>
                        <tr>
                            <td><?= h($rdv['date_rdv']) ?></td>
                            <td><?= h($rdv['client_nom']) ?></td>
                            <td><?= h($rdv['marque'] . ' ' . $rdv['modele']) ?></td>
                            <td><span class="badge badge-<?= $rdv['statut'] ?>"><?= h($rdv['statut']) ?></span></td>
                            <td><a href="/admin/rendez-vous-detail.php?id=<?= $rdv['id'] ?>" class="btn btn-sm btn-outline-primary">Voir</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
