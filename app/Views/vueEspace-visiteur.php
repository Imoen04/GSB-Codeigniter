
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Espace Visiteur - Laboratoire GSB</title>
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
        </nav>
    </div>
</header>

<section class="login-section">
    <div class="login-card">
        <h2>Connexion à l'Espace Visiteur</h2>
        <?php if (! empty($success)): ?>
            <p class="dashboard-message"><?= esc($success) ?></p>
        <?php endif; ?>
        <?php if (! empty($error)): ?>
            <p class="error-message"><?= esc($error) ?></p>
        <?php endif; ?>

        <form id="loginForm" method="post" action="<?= site_url('espace-visiteur') ?>">
            <?= csrf_field() ?>
            <input type="text" id="username" name="identifiant" placeholder="Identifiant" required>
            <input type="password" id="password" name="mdp" placeholder="Mot de passe" required>
            <button type="submit" class="btn">Se connecter</button>
        </form>

        <p class="register-link">
            Nouveau visiteur ? <a href="<?= site_url('inscription') ?>">Créer un compte</a>
        </p>
        <p class="register-link">
            <a href="<?= site_url('reset-password') ?>">Mot de passe oublié ?</a>
        </p>

        <p class="login-info">Accès réservé aux visiteurs médicaux</p>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

</body>
</html>