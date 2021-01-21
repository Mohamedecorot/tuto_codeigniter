<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();

		if( ! isAdmin())
			exit("Vous n'avez pas le droit de voir cette page.");
	}

	public function activer_maintenance()
	{
		/* ---- */
	}

	public function ajouter_rang()
	{
		/* ---- */
	}
}