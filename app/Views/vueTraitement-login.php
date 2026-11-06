<?php
session_start();
require '1ere-connexion.php';

if (empty($_POST['identifiant']) || empty($_POST['mdp'])) {
    header('Location: espace-visiteur.php?error=empty');
    exit();
}

$identifiant = trim((string) $_POST['identifiant']);
$mdp = (string) $_POST['mdp'];


if ($user) {
    $storedPassword = (string) ($user['mdp'] ?? '');

    if (password_verify($mdp, $storedPassword) || hash_equals($storedPassword, $mdp)) {
        $_SESSION['user'] = $identifiant;
        header('Location: profil.php');
        exit();
    }
}

header('Location: espace-visiteur.php?error=invalid');
exit();
?>