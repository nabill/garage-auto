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

<h1 class="admin-page-title">Tableau de bord</h1>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="stat-card stat-primary">
            <i class="bi bi-calendar-day stat-icon"></i>
            <div class="stat-label">RDV aujourd'hui</div>
            <div class="stat-value"><?= $rdv_today ?></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card stat-warning">
            <i class="bi bi-hourglass-split stat-icon"></i>
            <div class="stat-label">En attente</div>
            <div class="stat-value"><?= $rdv_pending ?></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card stat-success">
            <i class="bi bi-calendar-check stat-icon"></i>
            <div class="stat-label">Total RDV</div>
            <div class="stat-value"><?= $rdv_total ?></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card stat-danger">
            <i class="bi bi-envelope stat-icon"></i>
            <div class="stat-label">Messages non lus</div>
            <div class="stat-value"><?= $messages_unread ?></div>
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
