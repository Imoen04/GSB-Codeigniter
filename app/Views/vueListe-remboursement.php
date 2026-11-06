<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des remboursements - Laboratoire GSB</title>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/liste-remboursement.css') ?>">
</head>
<body class="reimbursement-list-page">


<header>
    <div class="top-bar">
        📞 Contact : +33 00 00 00 00 00
    </div>

    <div class="navbar">
        <div class="logo">
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo GSB">
            <h1>Laboratoire GSB</h1>
        </div>

        <nav>
            <a href="acceuil">Accueil</a>
            <a href="retour-profil">Profil</a>
            <a href="#" onclick="logout()">Déconnexion</a>
        </nav>
    </div>
</header>

<section class="login-section">
    <div class="login-card table-card">
        <h2>Historique des demandes</h2>

        <?php if (empty($remboursements['etapes'][0]->quantite)): ?>
            <p class="empty-message">Aucune demande de remboursement enregistrée.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Étapes</th>
                            <th>Nuitées</th>
                            <th>Kilomètres</th>
                            <th>Repas</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><?php echo htmlspecialchars((string) ($remboursements['etapes'][0]->quantite ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars((string) ($remboursements['nuitees'][0]->quantite ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars((string) ($remboursements['kilometres'][0]->quantite ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars((string) ($remboursements['repas'][0]->quantite ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                            <?php foreach ($remboursements['horsForfait'] as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars((string) ($row['date_depense'] ?? '-'), ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars((string) ($row['created_at'] ?? '-'), ENT_QUOTES, 'UTF-8'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <div class="profile-actions">
            <a href="dashboard" class="btn">Ajouter une demande</a>
            <a href="retour-profil" class="btn">Retour au profil</a>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="visiteur.js"></script>
</body>
</html>
