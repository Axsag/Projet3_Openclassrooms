<?php
//require ('models/Manager.php');

class PostsManager extends Manager
{
	public function getPosts($limit)
	{  
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM article ORDER BY date_creation DESC LIMIT 0, '.$limit.'');
		 return $req;
	}

	public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM article WHERE id = ?');
        $req->execute(array($postId));
     	$post = $req->fetch(PDO::FETCH_ASSOC);
     	
        return $post; 
    }

    public function insertPost($titre, $contenu)
    {
        
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO article(titre, contenu, date_creation) VALUES(?,?, NOW())');
        $affectedLines = $req->execute(array($titre, $contenu));

        return $affectedLines;    
    }

    public function editPost($id, $titre, $contenu)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('UPDATE article SET titre=:titre, contenu=:contenu WHERE id=:id ');
        $req->execute(array('id' => $id, 'titre' => $titre,'contenu' => $contenu));
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM article WHERE id=:id');
        $req->execute(array('id' => $id));
    }
}