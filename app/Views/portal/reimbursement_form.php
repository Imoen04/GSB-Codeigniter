<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle demande | Laboratoire GSB</title>
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
    <section class="login-card">
        <h2>Demande de remboursement</h2>
        <?php if (! empty($message)): ?>
            <p class="dashboard-message"><?= esc($message) ?></p>
        <?php endif; ?>
        <?php if (! empty($error)): ?>
            <p class="error-message"><?= esc($error) ?></p>
        <?php endif; ?>
        <form method="post" action="<?= site_url('dashboard') ?>">
            <?= csrf_field() ?>
            <label for="etapes">Forfait étape (110 €/unité)</label>
            <input id="etapes" name="etapes" type="number" min="0" step="1" value="0" required>
            <label for="nuitees">Nuitées hôtel (80 €/nuitée)</label>
            <input id="nuitees" name="nuitees" type="number" min="0" step="1" value="0" required>
            <label for="kilometres">Frais kilométriques (0,62 €/km)</label>
            <input id="kilometres" name="kilometres" type="number" min="0" step="0.01" value="0" required>
            <label for="repas">Repas (25 €/unité)</label>
            <input id="repas" name="repas" type="number" min="0" step="1" value="0" required>
            <label for="date">Date de la dépense</label>
            <input id="date" name="date" type="date" required>
            <button type="submit" class="btn">Envoyer la demande</button>
        </form>
        <p class="register-link"><a href="<?= site_url('liste-remboursements') ?>">Voir mes remboursements</a></p>
    </section>
</main>
</body>
</html>