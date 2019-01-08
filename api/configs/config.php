<?php

    define('DS', '/');
    define("ROOT", "C:/xampp/htdocs/WeekenDays/www/php/api");    
    define("ROOT2", "http://localhost/WeekenDays/www/php/api");    
    /*DEFINE ("VISTAS", ROOT . DS . "vistas");
    DEFINE ("CSS", ROOT2 . DS . "vistas" . DS . "css");
    DEFINE ("IMAGENES", ROOT2 . DS ."imagenes");
    DEFINE ("FICHEROS", ROOT2 . DS ."ficheros");
    DEFINE ("FICHEROS2", ROOT . DS ."ficheros");
    DEFINE ("AVATARES", ROOT2 . DS ."avatares");
    DEFINE ("AVATARES2", ROOT . DS ."avatares");
    DEFINE ("NOMBREAVATAR", "avatar");
    DEFINE ("EQUIPO", "Lakers");*/

    return array(
        "site" => array(
            "name" => "nba.com",
            "title"  => "LAKERS",
            "coreMVC" => ROOT . DS . "core" . DS . "MVC" . DS,
            "configs" => ROOT . DS . "configs" . DS,
            "resources" => ROOT . DS . "app" . DS . "resources" . DS, 
        )
    );