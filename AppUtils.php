<?php
class AppUtils {
    public static function setFlash($message, $type = 'success') {
        $_SESSION['flash'] = ['message' => $message, 'type' => $type];
    }
    
    public static function getFlash() {
        if (isset($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            unset($_SESSION['flash']);
            return $flash;
        }
        return null;
    }

    public static function sanitize($input) {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

    // Puedes añadir más métodos aquí...
}