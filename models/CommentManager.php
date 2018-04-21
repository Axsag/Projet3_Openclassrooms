<?php

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM commentaires WHERE id_article = ? ORDER BY date_commentaire DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $auteur, $commentaire)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO commentaires(id_article, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $auteur, $commentaire));

        return $affectedLines;
    }

    public function updateComment($commentId, $auteur, $commentaire)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE commentaires SET auteur = ?, commentaire = ? WHERE id = ?');
        $affectedLines = $comments->execute(array($auteur, $commentaire, $commentId));

        return $affectedLines;
    }

    public function deleteComment($commentId)
    {
    	$db = $this->dbConnect();
    	$comments = $db->prepare('DELETE FROM comments WHERE id= ?');
    	$affectedLines = $comments->execute(array($commentId));

    	return $affectedLines;
    }
}