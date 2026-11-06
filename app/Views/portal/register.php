<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription | Laboratoire GSB</title>
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
        <h2>Créer un compte visiteur</h2>
        <?php if (! empty($error)): ?>
            <p class="error-message"><?= esc($error) ?></p>
        <?php endif; ?>
        <form method="post" action="<?= site_url('inscription') ?>">
            <?= csrf_field() ?>
            <label for="identifiant">Identifiant</label>
            <input id="identifiant" name="identifiant" type="text" autocomplete="username" required>
            <label for="email">Adresse e-mail</label>
            <input id="email" name="email" type="email" autocomplete="email" required>
            <label for="mdp">Mot de passe (8 caractères minimum)</label>
            <input id="mdp" name="mdp" type="password" autocomplete="new-password" minlength="8" required>
            <button type="submit" class="btn">S'inscrire</button>
        </form>
        <p class="register-link"><a href="<?= site_url('espace-visiteur') ?>">Déjà inscrit ? Se connecter</a></p>
    </section>
</main>
</body>
</html>