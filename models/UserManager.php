<?php
//require ('Manager.php');
class UserManager extends Manager
{
    public function getUser($user)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pseudo, pass, email FROM membres WHERE pseudo = ? ');
        $req->execute(array($user)); //var_dump($req);
        $user = $req->fetch();// var_dump($user);die;
        return $user;
    }

}
