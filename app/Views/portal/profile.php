<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace visiteur | Laboratoire GSB</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<header>
    <div class="navbar">
        <h1>Laboratoire GSB</h1>
        <nav>
            <a href="<?= site_url('/') ?>">Accueil</a>
            <a href="<?= site_url('deconnexion') ?>">Déconnexion</a>
        </nav>
    </div>
</header>
<main class="dashboard-main">
    <section class="dashboard-intro">
        <h2>Bienvenue, <?= esc($identifiant ?? '') ?></h2>
        <p>Gérez vos demandes de remboursement et consultez leur historique.</p>
    </section>
    <section class="profile-actions">
        <a class="action-card" href="<?= site_url('liste-remboursements') ?>">Mes remboursements</a>
        <a class="action-card action-card-primary" href="<?= site_url('dashboard') ?>">Nouvelle demande</a>
    </section>
</main>
</body>
</html>