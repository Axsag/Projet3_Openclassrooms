<?php

function listPosts()
{
    $postManager = new PostsManager(); 
    $posts = $postManager->getPosts(); 
    require('views/frontend/listPostsView.php');
    
}