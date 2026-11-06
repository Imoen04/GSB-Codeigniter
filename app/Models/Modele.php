<?php
//acces au Modele parent pour l heritage
namespace App\Models;
use CodeIgniter\Model;


//=========================================================================================
//définition d'une classe Modele (meme nom que votre fichier Modele.php) 
//héritée de Modele et permettant d'utiliser les raccoucis et fonctions de CodeIgniter
//  Attention vos Fichiers et Classes Controleur et Modele doit commencer par une Majuscule 
//  et suivre par des minuscules
//=========================================================================================
class Modele extends Model {

public function getBillets() {
    $db = db_connect();
    $query = $db->query('SELECT * FROM remboursements ORDER BY id DESC');
    return $query->getResultArray();
}

public function getDetails($idBillet) {
    $db = db_connect();
    $query = $db->query('SELECT * FROM remboursements WHERE id = ?', [(int) $idBillet]);
    $resultat = $query->getRowArray();

    if ($resultat === null) {
        return [];
    }

    return $resultat;
}

//==========================
// Code du modele
//==========================

//=========================================================================
// Fonction 1
// récupère les données BDD dans une fonction getBillets
// Renvoie la liste de tous les billets, triés par identifiant décroissant
//=========================================================================
public function getTable() { 

//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
	$db = db_connect();

//=============================
// rédaction de la requete sql
//=============================
    $sql = "CREATE TABLE IF NOT EXISTS remboursement (" .
        "id INT AUTO_INCREMENT PRIMARY KEY, " .
        "etapes INT NOT NULL, " .
        "nuitees INT NOT NULL, " .
        "kilometres DECIMAL(10,2) NOT NULL, " .
        "repas DECIMAL(10,2) NOT NULL, " .
        "date_depense DATE NOT NULL, " .
        "created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP" .
        ") ENGINE=InnoDB DEFAULT CHARSET=utf8";
	
//=============================
// execution de la requete sql
//=============================	
    $resultat = $db->query($sql);

//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================	
    return $resultat;
   
}


//=========================================================================
// Fonction 2 
// récupère les données BDD dans une fonction getDetails
// Renvoie le détail d'un billet précédemment sélectionné par son id
//=========================================================================
public function getCompte() {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ? AND COLUMN_NAME = ?';
	
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}

public function getRemboursement() {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'INSERT INTO remboursement (etapes, nuitees, kilometres, repas, date_depense) VALUES (?, ?, ?, ?, ?)';
	
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}

public function getRemboursements() {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'ALTER TABLE remboursement ADD COLUMN date_depense DATE NULL';
	
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}


public function getRemboursementss() {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'ALTER TABLE remboursement ADD COLUMN created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP';
	
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}

public function getVisiteur($login, $password) {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'SELECT id, nom, prenom FROM Visiteur WHERE login = ? AND mdp = ?';
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql, [$login, $password]);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}

public function getFraisForfait($idVisiteur, $mois, $idFraisForfait) {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'SELECT quantite FROM LigneFraisForfait WHERE idVisiteur = ? AND mois = ? AND idFraisForfait = ?';
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql, [$idVisiteur, $mois, $idFraisForfait]);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}

public function getFraisHorsForfait($idVisiteur, $mois) {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'SELECT * FROM LigneFraisHorsForfait WHERE idVisiteur = ? AND mois = ?';
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql, [$idVisiteur, $mois]);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}

public function enregistrerDemandeRemboursement($idVisiteur, $mois,$quantite, $idFraisForfait) {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'INSERT INTO LigneFraisForfait (idVisiteur, mois, idFraisForfait, quantite) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE quantite = VALUES(quantite)';
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql, [$idVisiteur, $mois, $idFraisForfait, $quantite]);
	
//=============================
// récupération des données de la requete sql
//=============================

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}

public function ajoutFicheFrais($idVisiteur, $mois, $justificatif, $montantValide, $date, $type) {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'INSERT INTO FicheFrais (idVisiteur, mois, nbJustificatifs, montantValide, dateModif, idEtat) VALUES (?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE  dateModif = VALUES(dateModif)';
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql, [$idVisiteur, $mois, $justificatif, $montantValide, $date, $type]);
	
//=============================
// récupération des données de la requete sql
//=============================

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
}
//==========================
// Fin Code du modele
//===========================


//fin de la classe
}


?>