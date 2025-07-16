<?php

class dashController
{
    public function index () 
    {
        $db = new dbRepository();
        $grupos = $db->getGruposByUser($_SESSION['idUser']);
        $links = $db->getLinksByUser($_SESSION['idUser']);
        
        require_once ("views/dash/index.php");
    }

    public function cosab () 
    {
        echo 'cosa b';
        echo password_hash('123456', PASSWORD_DEFAULT);
    }

    public function cosac () 
    {
        echo 'cccc';
    }
    
}
