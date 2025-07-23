<?php

class ajaxController
{ 
    public function getUser($id)
    {
        if (!isset($_SESSION['idUser']) || $_SESSION['admin'] != 1) {
            http_response_code(403);
            echo json_encode(['error' => 'No autorizado']);
            exit;
        }
        $db = new dbRepository();
        $user = $db->getUserById((int)$id);
        if ($user) {
            echo json_encode($user);
        } else {
            echo json_encode(['error' => 'Usuario no encontrado']);
        }
        exit;
    }
}
