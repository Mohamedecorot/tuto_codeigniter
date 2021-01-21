<?php
// Les URL sont formées à partir des contrôleurs en suivant ce modèle :
// http://www.nomdedomaine.tld/index.php/classe_controleur/methode_controleur/.
// En résumé
// Un contrôleur est donc un fichier qui contient une unique classe et ce sera son nom qui s'affichera dans l'URL.

// Pour que CodeIgniter puisse savoir où est situé le contrôleur à appeler, vous devez nommer votre fichier du même nom que votre classe mais sans la majuscule. De plus, le nom de la classe doit toujours commencer par une majuscule.


class Forum extends CI_Controller
{
    private $titre_defaut;

	public function __construct()
	{
		//	Obligatoire
		parent::__construct();

		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'Mon super site';
		echo 'Bonjour !';
    }

    public function index()
	{
		$this->accueil();
    }

	public function accueil()
	{
		echo 'Bonjour';
	}

	//	L'affichage de la variable $output est le comportement par défaut.
	public function _output($output)
	{
		var_dump($output);
	}

	//	Cette page accepte une variable $_GET facultative
	public function bonjour($pseudo = '')
	{
		echo 'Salut à toi : ' . $pseudo;
	}

	//	Cette page accepte deux variables $_GET facultatives
	public function manger($plat = '', $boisson = '')
	{
		echo 'Voici votre menu : <br />';
		echo $plat . '<br />';
		echo $boisson . '<br />';
		echo 'Bon appétit !';
	}
}