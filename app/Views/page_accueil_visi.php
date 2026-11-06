<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8" />
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head> 
<?php
echo '<body class="acceuil">';
echo '    <nav>';
echo '        <div class="logo">';
echo '            <img src="' . base_url('images/logo.png') . '" alt="Logo">';  // Utiliser base_url pour le chemin d'image
echo '        </div>';
echo '        <ul>';
echo '            <li><a href="'. base_url("index.php?action=renseigner").'">Renseigner fiche frais</a></li>';
echo '            <li><a href="'. base_url("index.php?action=consulter").'">Consulter fiche frais</a></li>';
echo '            <li><a href="'. base_url("index.php?action=deconnexion").'">Déconnexion</a></li>';
echo '        </ul>';
echo '    </nav>';
echo '    <div class="principale">';
echo '        <p>Bonjour, bienvenue sur votre page de visiteur Médical, les seuls onglets disponibles pour vous sont la consultation de vos fiches de frais et la possibilité de renseigner une fiche de frais</p>';
echo '    </div>';
echo '</body>';
?>
</html>
