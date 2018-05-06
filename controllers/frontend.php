<?php

function listPosts($limit)
{
    $postManager = new PostsManager(); 
    $posts = $postManager->getPosts($limit);
    require('views/frontend/listPostsView.php');
    
}

function post()
{
    $postManager = new PostsManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
     require('views/frontend/postView.php');
}

function addComment($postId, $auteur, $commentaire)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $auteur, $commentaire);
    if ($affectedLines === false) 
    {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else 
    {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function editComment($postId, $commentId, $auteur=null, $commentaire=null)
{
    $postManager = new PostsManager();
    $commentManager = new CommentManager();

    if ($auteur != null && $commentaire != null) 
    {
        $affectedLines = $commentManager->updateComment($commentId, $auteur, $commentaire);

        if ($affectedLines === false) 
        {
            throw new Exception('Impossible de modifier le commentaire !');
        }
        else 
        {
            header('Location: index.php?action=post&id=' . $postId);
        }
	}
    

    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);
    
    require('views/frontend/postView.php');
}

function subMyString( $contenu, $limite, $separateur = '...' ) 
{
    if( strlen($contenu) >= $limite ) 
    {
        $contenu = substr( $contenu, 0, $limite );
        $contenu = substr( $contenu, 0, strrpos($contenu, ' ') );
        $contenu .= $separateur;
    }
     
    return $contenu;
}