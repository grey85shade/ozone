<?php

class userConfigController
{
    public function update()
    {
        if (!isset($_SESSION['idUser'])) {
            header('Location: /login');
            exit;
        }
        $db = new dbRepository();
        $user = $db->getUserById($_SESSION['idUser']);
        require_once("views/userConfig/update.php");
    }

    public function updateAction()
    {
        if (!isset($_SESSION['idUser'])) {
            header('Location: /login');
            exit;
        }
        if (!isset($_POST['name'], $_POST['surname'], $_POST['mail'])) {
            header('Location: /userConfig/update');
            exit;
        }
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $surname = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
        $password = isset($_POST['password']) && $_POST['password'] !== '' ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;

        $db = new dbRepository();
        $result = $db->updateUser($_SESSION['idUser'], $name, $surname, $mail, $password);
        header('Location: /userConfig/update');
    }

    // Procesar registro de usuario nuevo
    public function list()
    {
        if (!isset($_SESSION['idUser'])) {
            header('Location: /login');
            exit;
        }
        $db = new dbRepository();
        $users = $db->getAllUsers();
        require_once ("views/userConfig/list.php");
    }

    public function register()
    {
        if ($_SESSION['admin'] != true) {
            header('Location: /dash/index');
            exit;
        }
        require_once ("views/userConfig/register.php");
    }

    public function registerAction()
    {

        $user = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $surname = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $db = new dbRepository();
        $result = $db->addUser($user, $name, $surname, $password, $mail);

        if ($result) {
            header('Location: /dash/index');
        } else {
            header('Location: /userConfig/register');
        }
    }
}
