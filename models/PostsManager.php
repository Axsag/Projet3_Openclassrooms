<?php
//require ('models/Manager.php');

class PostsManager extends Manager
{
	public function getPosts()
	{
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM article ORDER BY date_creation DESC LIMIT 0, 5');
		 return $req;
	}


}