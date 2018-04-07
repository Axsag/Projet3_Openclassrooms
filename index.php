<?php

require ('controllers/frontend.php');
require ('Autoloader.php');

Autoloader::register();

try 
{
  listPosts();
}
catch(Exception $e)
{
  echo 'Erreur : ' . $e->getMessage();
}
