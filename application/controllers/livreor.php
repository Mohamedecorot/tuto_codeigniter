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
		//    La page qui permet de voir les commentaires.
	}

// ------------------------------------------------------------------------

	public function ecrire()
	{
		//    La page qui permet d'écrire un commentaire.
	}
}


/* End of file livreor.php */
/* Location: ./application/controllers/livreor.php */