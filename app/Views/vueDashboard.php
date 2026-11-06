<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de remboursement - Laboratoire GSB</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/demande-remboursement.css') ?>">
</head>
<body class="page-remboursement">
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
                <a href="deconnexion">Déconnexion</a>
            </nav>
        </div>
    </header>

    <main class="contenu-remboursement">
        <section class="introduction-remboursement" aria-labelledby="page-title">
            <span class="surtitre-remboursement">Frais professionnels</span>
            <h1 id="page-title">Nouvelle demande de remboursement</h1>
            <p>Renseignez les dépenses liées à votre déplacement. Votre demande sera transmise à notre équipe pour traitement.</p>
        </section>

        <section class="carte-remboursement" aria-labelledby="form-title">
            <div class="entete-carte">
                <span class="icone-entete" aria-hidden="true">＋</span>
                <div>
                    <h2 id="form-title">Détail de vos frais</h2>
                    <p>Indiquez les quantités et la date de la dépense.</p>
                </div>
            </div>

            <?php if (!empty($message)): ?>
                <div class="dashboard-message" role="status"><?= esc($message) ?></div>
            <?php endif; ?>

            <form action="nouvelle-demande" method="post">
                <div class="champs-frais">
                    <div class="champ-frais">
                        <label for="etapes">
                            <span>Forfait étape</span>
                            <span class="tarif-frais">110 € / unité</span>
                        </label>
                        <input type="number" id="etapes" name="etapes" min="0" step="1" value="0" placeholder="0" required>
                    </div>
                    <div class="champ-frais">
                        <label for="nuitees">
                            <span>Nuitée d'hôtel</span>
                            <span class="tarif-frais">80 € / nuitée</span>
                        </label>
                        <input type="number" id="nuitees" name="nuitees" min="0" step="1" value="0" placeholder="0" required>
                    </div>
                    <div class="champ-frais">
                        <label for="kilometres">
                            <span>Frais kilométriques</span>
                            <span class="tarif-frais">0,62 € / km</span>
                        </label>
                        <input type="number" id="kilometres" name="kilometres" min="0" step="0.01" value="0" placeholder="0" required>
                    </div>
                    <div class="champ-frais">
                        <label for="repas">
                            <span>Unité repas</span>
                            <span class="tarif-frais">25 € / unité</span>
                        </label>
                        <input type="number" id="repas" name="repas" min="0" step="1" value="0" placeholder="0" required>
                    </div>
                    <div class="champ-frais date-frais">
                        <label for="date">Date de la dépense</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                </div>
                <div class="actions-formulaire">
                    <button type="submit" class="btn">Envoyer la demande</button>
                    <a href="retour-profil" class="btn btn-secondary">Annuler</a>
            </form>
        </section>
    </main>

    <footer class="pied-remboursement">
        <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
    </footer>

    <script src="visiteur.js"></script>
</body>
</html>
