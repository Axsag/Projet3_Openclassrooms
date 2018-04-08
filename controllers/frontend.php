<?php

function listPosts()
{
    $postManager = new PostsManager(); 
    $posts = $postManager->getPosts(); 
    require('views/frontend/listPostsView.php');
    
}

function post()
{
    $postManager = new PostsManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($_GET['id']); //var_dump($post);die;
    $comments = $commentManager->getComments($_GET['id']);
    
     require('views/frontend/postView.php');
}