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

	public function getPost($postId)
    {
        $db = $this->dbConnect();
         $req = $db->prepare('SELECT id, titre, contenu, date_creation FROM article WHERE id = ?');
        $req->execute(array($postId)); //var_dump($req);
     	$post = $req->fetch(PDO::FETCH_ASSOC); //var_dump($post);die;
     	
        return $post; 
    }

    public function insertPost($titre, $contenu)
    {
        //var_dump($titre,$contenu);die;
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO article(titre, contenu, date_creation) VALUES(?,?, NOW())');
        // $affectedLines = $req->execute(array($_POST['titre'],$_POST['contenu']));
        $affectedLines = $req->execute(array($titre, $contenu)); //var_dump($affectedLines);die;

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
        $req = $db->prepare('DELETE FROM posts WHERE id=:id');
        $req->execute(array('id' => $id));
    }
}