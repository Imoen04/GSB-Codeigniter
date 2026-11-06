<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes remboursements | Laboratoire GSB</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<header>
    <div class="navbar">
        <h1>Laboratoire GSB</h1>
        <nav>
            <a href="<?= site_url('profil') ?>">Profil</a>
            <a href="<?= site_url('deconnexion') ?>">Déconnexion</a>
        </nav>
    </div>
</header>
<main class="login-section">
    <section class="login-card table-card">
        <h2>Historique des demandes</h2>
        <?php if (empty($remboursements)): ?>
            <p class="empty-message">Aucune demande de remboursement enregistrée.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr><th>Étapes</th><th>Nuitées</th><th>Kilomètres</th><th>Repas</th><th>Date dépense</th><th>Date demande</th></tr>
                    </thead>
                    <tbody>
                        <?php foreach ($remboursements as $row): ?>
                            <tr>
                                <td><?= esc((string) $row['etapes']) ?></td>
                                <td><?= esc((string) $row['nuitees']) ?></td>
                                <td><?= esc((string) $row['kilometres']) ?></td>
                                <td><?= esc((string) $row['repas']) ?></td>
                                <td><?= esc((string) $row['date_depense']) ?></td>
                                <td><?= esc((string) ($row['created_at'] ?? '-')) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
        <p class="register-link"><a href="<?= site_url('dashboard') ?>">Ajouter une demande</a></p>
    </section>
</main>
</body>
</html>