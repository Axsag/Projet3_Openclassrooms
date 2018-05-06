<?php
//require ('Manager.php');
class UserManager extends Manager
{
    public function getUser($user)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pseudo, pass, email FROM membres WHERE pseudo = ? ');
        $req->execute(array($user)); //var_dump($req);
        $user = $req->fetch(PDO::FETCH_ASSOC); //var_dump($user);die;
        $this->_sessiondata($user);
        return $user;
    }



	private function _sessiondata($user)
	{
		if(!empty($user))
		{
			$_SESSION['auth'] = $user;		
		}
	}

	public static function checkSession()
	{
		if (empty($_SESSION['auth']))
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	public static function noSession()
	{
		if (self::checkSession() == false)
		{
			header('Location: index.php');
			exit();
		}
	}
	public static function sessionExist()
	{
		if (self::checkSession() == true)
		{
			header('Location: index.php?action=homepageBackend');
		}
	}
}
