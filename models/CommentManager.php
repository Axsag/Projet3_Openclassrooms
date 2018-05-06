<?php

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, auteur, commentaire, signaler, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM commentaires WHERE id_article = ? ORDER BY date_commentaire DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $auteur, $commentaire)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO commentaires(id_article, signaler, auteur, commentaire, date_commentaire) VALUES(?, 0, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $auteur, $commentaire));
        return $affectedLines;
    }

    public function deleteComment($commentId)
    {
    	$db = $this->dbConnect();
    	$comments = $db->prepare('DELETE FROM commentaires WHERE id= ?');
    	$affectedLines = $comments->execute(array($commentId));

    	return $affectedLines;
    }

    public function reportComments($report)
    {
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE commentaires SET signaler=:signaler WHERE id=:signaler');
        $report = $report->execute(array('signaler' => $_GET['report']));
        return $report;

    }

    public function reportShow()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, id_article, signaler, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM commentaires WHERE signaler !=0');
        return $comments;

    }

    public function removereports($id_comment)
    {
        $db = $this->dbconnect();
        $back = $db->prepare('UPDATE commentaires SET signaler=:signaler WHERE id=:id ');
        $removereport = $back->execute(array('id' => $id_comment, 'signaler' => 0));
        return $removereport;
    }
}