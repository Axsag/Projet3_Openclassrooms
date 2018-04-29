<?php

require ('controllers/frontend.php');
require ('controllers/backend.php');
//require ('models/PostsManager.php');
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

    //Ajout d'un post
    elseif ($_GET['action'] == 'addPost') 
    {
        addPost($_POST['titre'], $_POST['contenu']);
    }    

    //Ajout d'un commentaire
    elseif ($_GET['action'] == 'addComment') 
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            if (!empty($_POST['auteur']) && !empty($_POST['commentaire'])) 
            {
                addComment($_GET['id'], $_POST['auteur'], $_POST['commentaire']);
            }
            else 
            {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    // //Modifier commentaire 
    // elseif ($_GET['action'] == 'editComment') {
            
    //     if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['commentId']) && $_GET['commentId'] > 0) 
    //     {
    //         if (!empty($_POST['auteur']) && !empty($_POST['commentaire'])) 
    //         {
    //             editComment($_GET['id'], $_GET['commentId'], $_POST['auteur'], $_POST['commentaire'] );
    //         }
    //         else 
    //         {
    //             editComment($_GET['id'], $_GET['commentId']);
    //         }
    //     }
    //     else 
    //     {
    //         // sinon on affiche un message d'erreur 
    //         throw new Exception('Aucun identifiant de billet envoyé');
    //     }
    // }

    //Editer un article    
    elseif ($_GET['action'] == 'postEdition')
    {
        postEdition($_GET['id'], $_POST['titre'], $_POST['contenu']);
    }

    //Aller dans l'éditeur de texte
    elseif ($_GET['action'] == 'editshow')
    {
        editshow($_GET['id']);
    }

    //Afficher articles dans la page admin
    elseif ($_GET['action'] == 'gestionPosts')
    {
        gestionPosts();
    }

    //Supprimer un article
    elseif ($_GET['action'] == 'postSuppression')
    {
        postSuppression($_GET['id']);
    }

    // affichage des billets et des commentaires dans le backend
    elseif ($_GET['action'] == 'postAdmin')
    {
        postAdmin();
    }

    //Signaler un commentaire
    elseif ($_GET['action'] == 'reportcomment')
    {
        reportcomment($_GET['id'], $_GET['report']);
    }

    //Retirer un signalement
    elseif ($_GET['action'] == 'removereport')
    {
        removereport($_GET['id_comment']);
    }

    //Supprimer un commentaire
    elseif ($_GET['action'] == 'commentSuppression') 
    {
        commentSuppression($_GET['id']);
    }
}
else {
    listPosts();
}


