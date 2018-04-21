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

function addPost($titre, $contenu)
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
    	require ('views/backend/addpostView.php');
    }
}

function postEdition($id, $titre, $contenu)
{
    $postmanager = new PostManager();
    $postEditions = $postmanager->editPost($id, $titre, $contenu);
    
    if ($postEditions === false) 
    {
        die('Impossible d\'ajouter l\'article !');
    } 
    else 
    {
        require ('views/backend/updatepostView.php');
    }
}