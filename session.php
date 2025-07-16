<?php
class sessionManager
{
    function __construct() 
    {
        session_start();
    }

    public function setSession ($user, $id)
    {
        //session_set_cookie_params(['lifetime' => 3600, 'SameSite'=> 'Lax']);
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['idUser'] = $id;
    }

    public function sessionDestroy ()
    {
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = '';
        $_SESSION['idUser'] = null;
    }

    public function isLogged ()
    {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            return true;
        }
        return false;
    }
}