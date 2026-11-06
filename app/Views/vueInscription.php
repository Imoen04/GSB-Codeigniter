<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inscription - Laboratoire GSB</title>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/visiteur.css') ?>">
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
            <a href="<?= site_url('/') ?>">Accueil</a>
            <a href="<?= site_url('espace-visiteur') ?>">Espace Visiteur</a>
        </nav>
    </div>
</header>

<section class="login-section">
    <div class="login-card">
        <h2>Créer un compte</h2>

        <?php if (! empty($error)): ?>
            <p class="error-message"><?= esc($error) ?></p>
        <?php endif; ?>
        <form id="registerForm" method="post" action="<?= site_url('inscription') ?>">
            <?= csrf_field() ?>
            <input type="text" id="newUsername" name="identifiant" placeholder="Identifiant" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="newPassword" name="mdp" placeholder="Mot de passe" minlength="8" required>
            <button type="submit" class="btn">S'inscrire</button>
        </form>

        <p class="register-link">
            Déjà inscrit ? <a href="<?= site_url('espace-visiteur') ?>">Se connecter</a>
        </p>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

</body>
</html>