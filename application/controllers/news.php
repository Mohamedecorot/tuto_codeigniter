<?php
class News extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->accueil();
	}

	// public function accueil()
	// {
	// 	$data = array();
	// 	$data['pseudo'] = 'Arthur';
	// 	$data['email'] = 'email@ndd.fr';
	// 	$data['en_ligne'] = true;

	// 	//	Maintenant, les variables sont disponibles dans la vue
    //     $this->load->view('news/vue', $data, false);
    //     $this->load->helper('url');
    //     $this->load->helper('assets');

    // }
    public function accueil()
    {
	$this->load->model('news_model', 'newsManager');

	$resultat = $this->newsManager->ajouter_news('Arthur',
						     'Un super titre',
						     'Un super contenu !');
	var_dump($resultat);
    }
}