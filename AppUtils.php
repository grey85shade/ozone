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

    // Loguear eventos en la aplicación
    public static function logEvent($message, $type = 'INFO') {
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $type = strtoupper($type);
        $logLine = "[$date] - [$time] - [$type] - $message\n";
        $logFile = __DIR__ . "/log/log" . date('Ymd') . ".txt";
        file_put_contents($logFile, $logLine, FILE_APPEND | LOCK_EX);
    }
}