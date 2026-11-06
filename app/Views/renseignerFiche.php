<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8" />
<title>Renseigner-visiteurMedicale</title>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head> 
<?php
echo '<body class="acceuil">';
echo '    <nav>';
echo '        <div class="logo">';
echo '            <img src="' . base_url('images/logo.png') . '" alt="Logo">';  
echo '        </div>';
echo '        <ul>';
echo '            <li><a href="'. base_url("index.php?action=acceuil_visi").'">Accueil</a></li>';
echo '            <li><a href="'. base_url("index.php?action=renseigner").'">Renseigner fiche frais</a></li>';
echo '            <li><a href="'. base_url("index.php?action=consulter").'">Consulter fiche frais</a></li>';
echo '            <li><a href="'. base_url("index.php?action=deconnexion").'">Déconnexion</a></li>';
echo '        </ul>';
echo '    </nav>';
echo '    <div class="containe">';
echo '        <div class="formulaire">';
echo '            <h2>Frais Forfaitaires</h2>';
            // formulaire pour les frais forfait
echo '            <form action="'. base_url("index.php").'" method="GET">';
echo '                <label for="nuit">Nuit :</label>';
echo '                <input type="str" id="nuit" name="nuit" required>';
echo '                <label for="repas">Repas :</label>';
echo '                <input type="str" id="repas" name="repas" required>';
echo '                <label for="FraisKilo">Frais Kilométrique :</label>';
echo '                <input type="int" id="FraisKilo" name="FraisKilo" required>';
echo '                <label for="ForfaitEtape">Forfait Etape :</label>';
echo '                <input type="int" id="ForfaitEtape" name="ForfaitEtape" required>';
echo '                <button type="submit" class="bouton-renseigner" name="renseigneFrais" value="renseigneFrais" >renseigner votre fiche de frais</button>';
echo '            </form>';
echo '        </div>';
echo '        </br>';
echo '        <div class="formulaire">';
echo '            <h2>Autres frais</h2>';
            // formualaire pour les frais hors forfait
echo '            <form action="'. base_url("index.php").'" method="GET">';
echo '                <label for="libelle">Nom de la dépense :</label>';
echo '                <input type="str" id="libelle" name="libelle" required>';
echo '                <label for="Montant">Montant :</label>';
echo '                <input type="str" id="Montant" name="Montant" required>';
echo '                </br></br></br></br></br></br></br></br></br>';
echo '                <button type="submit" class="bouton-renseigner"name="renseigneFraisHors" value="renseigneFraisHors">renseigner autre frais</button>';
echo '            </form>';
echo '        </div>';
echo '    </div>';
echo '</body>';
?>

</html>