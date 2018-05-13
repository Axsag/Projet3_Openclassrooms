<?php 
//require ('models/UserManager');

function getUser($user, $pass)
{
    $pass=md5($pass);
	$userManager = new UserManager();
	$userlog = $userManager->getUser($user, $pass);
	if ($pass == $userlog['pass'])
    {
        header('Location: index.php?action=homepageBackend');
    }
	else
    {
        header('Location: index.php?action=listPosts');
        exit;
    } 
}
function postAdmin()
{   
    UserManager::noSession();
	$postManager = new PostsManager();
	$commentManager = new CommentManager();
	$post = $postManager->getPost($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

	require ('views/backend/commentgestionView.php');
}

function addPost($titre, $contenu) //add new content
{   
    UserManager::noSession();
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
    UserManager::noSession();
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
    UserManager::noSession();     
    $postmanager = new PostsManager();
    $suppressionpost = $postmanager->deletePost($id);
    //echo 'done';die;
    header('Location: index.php?action=gestionPosts');
    exit();
}

function editshow($id)
{  
    UserManager::noSession();
    $postmanager = new PostsManager();
    $currentPost = $postmanager->getPost($id);
    require ('views/backend/editpostView.php');
}

function gestionPosts()
{   
    UserManager::noSession();
    $postsManager = new PostsManager();
    $listcourent = $postsManager->getPosts(100);
    require ('views/backend/updatepostView.php');
}

function commentSuppression($id)
{   
    UserManager::noSession();
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
    UserManager::noSession();
    $commentManager = new CommentManager();
    $removereport = $commentManager->removereports($id_comment);
    header('Location: index.php?action=gestionPosts');
    exit();
}

function logOut()
{   
    $test = new MembersManager();
    $test->checkSession();
    header('Location: index.php?action=listPosts');
    exit();
}

function homepageBackend()
{   
    UserManager::noSession();
    require ('views/backend/adminView.php');
}

function addpostBackend()
{
    UserManager::noSession();
    require ('views/backend/addpostView.php');
}