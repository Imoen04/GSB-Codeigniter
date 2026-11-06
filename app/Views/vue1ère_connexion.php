<?php
$host = 'localhost';
$database = 'gsbV2';
$username = 'root';
$password = 'password';

try {
	$bdd = new PDO(
		"mysql:host=$host;dbname=$database;charset=utf8mb4",
		$username,
		$password,
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]
	);
} catch (PDOException $e) {
	die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>