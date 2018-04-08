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