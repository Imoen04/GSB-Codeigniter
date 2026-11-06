<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Controleur::index');
$routes->get('le-laboratoire', 'Controleur::laboratoire');
$routes->get('espace-visiteur', 'Controleur::espaceVisiteur');
$routes->post('espace-visiteur', 'Controleur::authenticate');
$routes->get('inscription', 'Controleur::inscription');
$routes->post('inscription', 'Controleur::storeVisitor');
$routes->get('reset-password', 'Controleur::resetPassword');
$routes->get('profil', 'Controleur::profil');
$routes->get('deconnexion', 'Controleur::logout');
$routes->post('postdata', 'Controleur::index');
$routes->get('getdata', 'Controleur::index');
$routes->get('liste-remboursements', 'Controleur::listeRemboursements');
$routes->get('dashboard', 'Controleur::dashboard');
$routes->post('nouvelle-demande', 'Controleur::nouvelleDemande');
$routes->get('retour-profil', 'Controleur::retourProfil');
$routes->get('acceuil', 'Controleur::index');