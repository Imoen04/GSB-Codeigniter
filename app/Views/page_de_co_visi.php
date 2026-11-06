<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8" />
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head> 
<body>
<?php 
	echo '<body class="co" style="background-image: url(\''.base_url('images/fond_connexion.webp').'\'); background-size: cover; background-position: center;">';
	echo '<div class="container">';
	echo '<h4>Vous connecter à votre compte de visiteur médical</h4>';
	echo '<p id="infosco">Veuillez entrer vos informations ci-dessous :</p>';
	echo '<div class="monBloc">';
	//formulaire de connexion
	echo '<form action="'.base_url("index.php").'"  method="GET">';
	echo '<label for="username">Login:</label>';
	echo '<input type="text" id="username" name="username" required>';
	echo '<label for="password">Mot de passe:</label>';
	echo '<input type="password" id="password" name="password" required>';
	echo '<input type="submit" value="Se connecter" name="acceuil_visi">';
	echo '</form>';
	echo '<p>Vous n\'avez pas de compte ? <a href="'.base_url('Controleur/inscription_compta').'">Créer un compte</a></p>';
	echo '</div>';
	echo '</div>';
	echo '</body>';
?>
</body>
</html>