<?php 
//require ('models/UserManager');

function getUser($user, $pass)
{
	$userManager = new UserManager();
	$userlog = $userManager->getUser($user, $pass);
	if ($pass == $userlog['pass'])
		require ('views/backend/adminView.php');
	else echo "Mauvais mdp";
}

function postAdmin()
{
	$postManager = new PostsManager();
	$commentManager = new commentManager();
	$post = $postManager->getPost($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

	require ('views/backend/commentGestionView.php');
}

function addPost($titre, $contenu) //add new content
{
	$postsManager = new PostsManager();
	$affectedLines = $postsManager->insertPost($titre, $contenu); //var_dump($affectedLines);die;
	//require ('views/backend/adminView.php');
	if ($affectedLines === false) 
	{
    	die('Impossible d\'ajouter l\'article');
    } 
    else 
    {
    	header('Location: index.php?action=gestionPosts');
        exit();
    }
}

function postEdition($id, $titre, $contenu)
{
    $postmanager = new PostsManager();
    $postEditions = $postmanager->editPost($id, $titre, $contenu);
    
    if ($postEditions === false) 
    {
        die('Impossible d\'ajouter l\'article !');
    } 
    else 
    {
        header('Location: index.php?action=gestionPosts');
        exit();
    }
}

function postSuppression($id)
{        
    $postmanager = new PostsManager();
    $suppressionpost = $postmanager->deletePost($id);
    //echo 'done';die;
    header('Location: index.php?action=gestionPosts');
    exit();
}

function editshow($id)
{  
    $postmanager = new PostsManager();
    $currentPost = $postmanager->getPost($id);
    require ('views/backend/editpostView.php');
}

function gestionPosts()
{
    $postsManager = new PostsManager();
    $listcourent = $postsManager->getPosts();
    require ('views/backend/updatepostView.php');
}

function commentSuppression($id)
{
    $commentManager = new CommentManager();
    $supressioncomment = $commentManager->deleteComment($id);
    header('Location: index.php?action=gestionPosts');
    exit();
}

function reportcomment($id, $report)
{
	$commentManager = new CommentManager();
	$commentReport = $commentManager->reportComments($report);
	header('Location: index.php?action=post&id='. $id);
	exit();
}

function removereport($id_comment)
{
    $commentManager = new CommentManager();
    $removereport = $commentManager->removereports($id_comment);
    header('Location: index.php?action=gestionPosts');
    exit();
}