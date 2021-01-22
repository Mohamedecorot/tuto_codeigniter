<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Controller;

class Livreor extends CI_Controller
{
	const NB_COMMENTAIRE_PAR_PAGE = 15;

	public function __construct()
	{
		parent::Controller();

		//	Chargement des ressources pour tout le contrôleur
		$this->load->database();
		$this->load->helper(array('url', 'assets'));
		$this->load->model('livreor_model', 'livreorManager');
	}

// ------------------------------------------------------------------------

	public function index($g_nb_commentaire = 1)
	{
		$this->voir($g_nb_commentaire);
	}

// ------------------------------------------------------------------------

    public function voir($g_nb_commentaire = 1)
    {
        $this->load->library('pagination');

        $data = array();

        //	Récupération du nombre total de messages sauvegardés dans la base de données
        $nb_commentaire_total = $this->livreorManager->count();

        //	On vérifie la cohérence de la variable $_GET
        if($g_nb_commentaire > 1)
        {
            //	La variable $_GET semblent être correcte. On doit maintenant
            //	vérifier s'il y a bien assez de commentaires dans la base de données.
            if($g_nb_commentaire <= $nb_commentaire_total)
            {
                //	Il y a assez de commentaires dans la base de données.
                //	La variable $_GET est donc cohérente.

                $nb_commentaire = intval($g_nb_commentaire);
            }
            else
            {
                //	Il n'y pas assez de messages dans la base de données.

                $nb_commentaire = 1;
            }
        }
        else
        {
            //	La variable $_GET "nb_commentaire" est erronée. On lui donne une
            //	valeur par défaut.

            $nb_commentaire = 1;
        }

        //	Mise en place de la pagination
        $this->pagination->initialize(array('base_url' => base_url() . 'index.php/livreor/voir/',
                            'total_rows' => $nb_commentaire_total,
                            'per_page' => self::NB_COMMENTAIRE_PAR_PAGE));

        $data['pagination'] = $this->pagination->create_links();
        $data['nb_commentaires'] = $nb_commentaire_total;

        //	Maintenant que l'on connaît le numéro du commentaire, on peut lancer
        //	la requête récupérant les commentaires dans la base de données.
        $data['messages'] = $this->livreorManager->get_commentaires(self::NB_COMMENTAIRE_PAR_PAGE, $nb_commentaire-1);

        //	On charge la vue
        $this->load->view('livreor/afficher_commentaires', $data);
    }

// ------------------------------------------------------------------------

	public function ecrire()
	{
		//    La page qui permet d'écrire un commentaire.
	}
}


/* End of file livreor.php */
/* Location: ./application/controllers/livreor.php */