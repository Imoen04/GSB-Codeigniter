<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tableau de bord - Laboratoire GSB</title>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/visiteur.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/profil.css') ?>">
</head>
<body>



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
            <a href="index.php">Accueil</a>
            <a href="deconnexion">Déconnexion</a>
        </nav>
    </div>
</header>
<main class="dashboard-main">
    <section class="dashboard-intro" aria-labelledby="dashboard-title">
        <span class="dashboard-eyebrow">Espace professionnel</span>
        <h2 id="dashboard-title">Bienvenue dans votre espace</h2>
        <p>Gérez vos demandes de remboursement simplement et retrouvez leur historique au même endroit.</p>
    </section>

    <section class="profile-actions" aria-label="Actions principales">
        <a href="liste-remboursements" class="action-card">
            <span class="action-icon" aria-hidden="true">↗</span>
            <span class="action-content">
                <strong>Mes remboursements</strong>
                <span>Consulter les demandes déjà enregistrées</span>
            </span>
        <a href="dashboard" class="action-card">
            <span class="action-icon" aria-hidden="true">＋</span>
            <span class="action-content">
                <strong>Nouvelle demande</strong>
                <span>Déclarer vos frais professionnels</span>
            </span>
            <span class="action-arrow" aria-hidden="true">→</span>
        </a>
    </section>
</main>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="visiteur.js"></script>
</body>
</html>