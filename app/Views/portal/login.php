<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Laboratoire GSB</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<header>
    <div class="navbar">
        <h1>Laboratoire GSB</h1>
        <nav><a href="<?= site_url('/') ?>">Accueil</a></nav>
    </div>
</header>
<main class="login-section">
    <section class="login-card">
        <h2>Connexion à l'espace visiteur</h2>
        <?php if (! empty($error)): ?>
            <p class="error-message"><?= esc($error) ?></p>
        <?php endif; ?>
        <form method="post" action="<?= site_url('espace-visiteur') ?>">
            <?= csrf_field() ?>
            <label for="identifiant">Identifiant</label>
            <input id="identifiant" name="identifiant" type="text" autocomplete="username" required>
            <label for="mdp">Mot de passe</label>
            <input id="mdp" name="mdp" type="password" autocomplete="current-password" required>
            <button type="submit" class="btn">Se connecter</button>
        </form>
        <p class="register-link"><a href="<?= site_url('inscription') ?>">Créer un compte</a></p>
        <p class="register-link"><a href="<?= site_url('reset-password') ?>">Mot de passe oublié ?</a></p>
    </section>
</main>
</body>
</html>