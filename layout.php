<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" id="global-css" href="/css/style.css" type="text/css" media="all" />
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script type="text/javascript" src="/js/js.js"></script>
        <script type="text/javascript" src="/js/jquery-3.5.1.min.js"></script>
        
        <title>Ozone</title>
    </head>
    <body>
        <div id='main'>     
            <div id="column-left">
                <a href="/login/logout">[X]</a>
                <br>
                <a href="/userConfig/update">Configurar usuario</a>
                <br>
                <a href="/userConfig/register">Registrar usuario nuevo</a>
                <br>
                <a href="/userConfig/list">Listar usuarios</a>
            </div>
            <div id="main-content">
                <?php 
                    $controllerInstance = new $controller;
                    $controllerInstance->$action();
                ?>
                
            </div>
        </div>
    </body>
</html>