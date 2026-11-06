<?php

namespace App\Controllers;

use App\Models\VisiteurModel;
use CodeIgniter\HTTP\ResponseInterface;

class Controleur extends BaseController
{
    public function index()
    {
        return view('vueIndex');
    }

    public function laboratoire()
    {
        return view('vueLe-laboratoire');
    }

    public function espaceVisiteur()
    {
        return view('vueEspace-visiteur', [
            'error' => null,
            'success' => session()->getFlashdata('success'),
        ]);
    }

    public function accueil() {
	    //================
		//acces au modele
		//================
		$Modele = new \App\Models\Modele();
		
	    //===============================
		//Appel d'une fonction du Modele
		//===============================	
		$donnees = $Modele->getBillets();
		
		//=================================================================================
		//!!! Création d'un jeu de données $data sécurisé pouvant etre passé à la vue
		//!!! on créé une variable qui récupère le résultat de la requete : $getBillets();
		//=================================================================================
		$data['resultat']=$donnees;
		
		//==========================================
		//on charge la vue correspondante
		//et on envoie le jeu de données $data à la vue
		//la vue aura acces a une variable $resultat
		//==========================================s
		echo view('vueAccueil',$data);
}
    public function authenticate()
    {
        $identifiant = $this->request->getPost('identifiant');
        $password = $this->request->getPost('mdp');

        if (! is_string($identifiant) || ! is_string($password) || trim($identifiant) === '') {
            return $this->response->setStatusCode(400)
                ->setBody(view('vueEspace-visiteur', ['error' => 'Veuillez saisir votre identifiant et votre mot de passe.']));
        }

        $Modele = new \App\Models\Modele();
        $visiteur = $Modele->getVisiteur($identifiant, $password);

        if (isset($visiteur[0]->id )){
            if(!session_id()){
                session_start();
            }
            $_SESSION['id'] = $visiteur[0]->id;
            echo view('vueProfil');
        }
        else{
            
            echo view('vueEspace-visiteur', ['error' => 'Identifiant ou mot de passe incorrect.']);
        }
        /*
        

        if ($visitor === null || ! password_verify($password, (string) $visitor['password_hash'])) {
            return $this->response->setStatusCode(401)
                ->setBody(view('vueEspace-visiteur', ['error' => 'Identifiant ou mot de passe incorrect.']));
        }

        $session = session();
        $session->regenerate(true);
        $session->set([
            'visitor_id' => $visitor['id'],
            'identifiant' => $visitor['identifiant'],
        ]);

        return redirect()->to(site_url('profil'));*/
    }

    public function profil()
    {
        $session = session();
        $identifiant = $session->get('identifiant');

        if (! is_string($identifiant) || $session->get('visitor_id') === null) {
            return redirect()->to(site_url('espace-visiteur'));
        }

        return view('portal/profile', ['identifiant' => $identifiant]);
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(site_url('espace-visiteur'));
    }

    public function resetPassword()
    {
        return view('vueReset-password');
    }
    public function listeRemboursements()
    {
        $Modele = new \App\Models\Modele();

            if(!session_id()){
                session_start();
            }

        $km = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'KM' );
        $nuit = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'NUI' );
        $etape = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'ETP' );
        $repas = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'REP' );
        $horsForfait = $Modele->getFraisHorsForfait($_SESSION['id'], date('Ym') );
        $data = [
            'remboursements' => [
                'etapes' => $etape,
                'nuitees' => $nuit,
                'kilometres' => $km,
                'repas' => $repas,
                'horsForfait' => $horsForfait
            ]
        ];
        return view('vueListe-remboursement', $data );
        
    }
     public function dashboard()
    {
        return view('vueDashboard');
     }
    public function nouvelleDemande()
    {
        $Modele = new \App\Models\Modele();

        if(!session_id()){
            session_start();
        }

        $etapes = $this->request->getPost('etapes');
        $nuitees = $this->request->getPost('nuitees');
        $kilometres = $this->request->getPost('kilometres');
        $repas = $this->request->getPost('repas');
        $date = $this->request->getPost('date');

        if ($etapes !== null && $nuitees !== null && $kilometres !== null && $repas !== null && $date !== null) {
            // Appel de la fonction du modèle pour enregistrer les données
            $Modele->ajoutFicheFrais($_SESSION['id'], date('Ym'), 0, 0, date('Y-m-d'), 'CR');
            $Modele->enregistrerDemandeRemboursement($_SESSION['id'], date('Ym'), $etapes, 'ETP' );
            $Modele->enregistrerDemandeRemboursement($_SESSION['id'], date('Ym'), $nuitees, 'NUI' );
            $Modele->enregistrerDemandeRemboursement($_SESSION['id'], date('Ym'), $kilometres, 'KM' );
            $Modele->enregistrerDemandeRemboursement($_SESSION['id'], date('Ym'), $repas, 'REP' );

            // Redirection vers la page de confirmation ou de liste des remboursements
        }
        if(!session_id()){
                session_start();
            }

        $km = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'KM' );
        $nuit = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'NUI' );
        $etape = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'ETP' );
        $repas = $Modele->getFraisForfait($_SESSION['id'], date('Ym'), 'REP' );
        $horsForfait = $Modele->getFraisHorsForfait($_SESSION['id'], date('Ym') );
        $data = [
            'remboursements' => [
                'etapes' => $etape,
                'nuitees' => $nuit,
                'kilometres' => $km,
                'repas' => $repas,
                'horsForfait' => $horsForfait
            ]
        ];
        print_r($data['remboursements']['horsForfait']); // Affiche les données pour le débogage
        return view('vueListe-remboursement', $data ); 
    }
     public function retourProfil()
    {
        return view('vueProfil');
    }
}