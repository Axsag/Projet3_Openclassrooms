<?php

require ('controllers/frontend.php');
require ('controllers/backend.php');
require ('Autoloader.php');

Autoloader::register();

if (isset($_GET['action'])) {
	
	//Page listPosts
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
   
    //Page Post + commentaires
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            throw new Exception('Pas d\'id de billet envoyé');
        }
    }

    //Page login
    elseif ($_GET['action'] == 'login') {
        if (isset($_POST['pseudo']) && ($_POST['pass'])) 
        {
           getUser($_POST['pseudo'], $_POST['pass']) ; 
        } 
        else 
        {           
            require ('views/backend/loginView.php');
        }

    	
    }
}
else {
    listPosts();
}


// try 
// {
// 	if (isset($_GET['action']))
// 	{
// 		if ($_GET['action'] == 'post')
// 			{
// 				if (isset($_GET['id'])
// 				{
// 					post();	
// 				}
// 				else 
// 				{
// 					throw new Exception('Pas d\'id de billet valide');
// 				}
// 			}
// 		else 
// 		{
// 			throw new Exception('Pas d\'id de billet valide');
// 		}	
// 	}
  	
//   	else
//   	{
//   		listPosts();
// 	}
// catch(Exception $e)
// {
//   echo 'Erreur : ' . $e->getMessage();
// }
// }