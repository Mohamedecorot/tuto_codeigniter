<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
	protected $table = 'news';

	/**
	 *	Ajoute une news
	 *
	 *	@param string $auteur 	L'auteur de la news
	 *	@param string $titre 	Le titre de la news
	 *	@param string $contenu 	Le contenu de la news
	 *	@return bool		Le résultat de la requête
	 */
	public function ajouter_news($auteur, $titre, $contenu)
	{
		//	Ces données seront automatiquement échappées
		$this->db->set('auteur',  $auteur);
		$this->db->set('titre',   $titre);
		$this->db->set('contenu', $contenu);

		//	Ces données ne seront pas échappées
		$this->db->set('date_ajout', 'NOW()', false);
		$this->db->set('date_modif', 'NOW()', false);

		//	Une fois que tous les champs ont bien été définis, on "insert" le tout
		return $this->db->insert($this->table);
    }

    // Equivalent à
    // public function ajouter_news($auteur, $titre, $contenu)
    // {
	// return $this->db->set('auteur',	 $auteur)
	// 		->set('titre', 	 $titre)
	// 		->set('contenu', $contenu)
	// 		->set('date_ajout', 'NOW()', false)
	// 		->set('date_modif', 'NOW()', false)
	// 		->insert($this->table);
    // }

    /**
     *	Édite une news déjà existante
    *
    *	@param integer $id	L'id de la news à modifier
    *	@param string  $titre 	Le titre de la news
    *	@param string  $contenu Le contenu de la news
    *	@return bool		Le résultat de la requête
    */
    public function editer_news($id, $titre = null, $contenu = null)
    {
        //	Il n'y a rien à éditer
        if($titre == null AND $contenu == null)
        {
            return false;
        }

        //	Ces données seront échappées
        if($titre != null)
        {
            $this->db->set('titre', $titre);
        }
        if($contenu != null)
        {
            $this->db->set('contenu', $contenu);
        }

        //	Ces données ne seront pas échappées
        $this->db->set('date_modif', 'NOW()', false);

        //	La condition
        $this->db->where('id', (int) $id);

        return $this->db->update($this->table);
    }

	/**
	 *	Supprime une news
	 */
	public function supprimer_news()
	{

	}

	/**
	 *	Retourne le nombre de news
	 */
	public function count()
	{

	}

	/**
	 *	Retourne une liste de news
	 */
	public function liste_news()
	{

	}
}


/* End of file news_model.php */
/* Location: ./application/models/news_model.php */