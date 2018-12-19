<?php
    header('Access-Control-Allow-Origin: *');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    try {
        $mysql = new PDO("mysql:dbname=proyecto;host=127.0.0.1", "root", "");
        $mysql->exec("set names utf8");
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "<p>Error: Cannot connect to database server.</p>\n";
        echo $e;
        exit();
    }
    
    
    $config = require_once "./configs/config.php";
    require_once("./core/AutoLoad.php");

    use \core as core;
    use \core\MVC\Controller as Controller;
    
    $globals = core\Globals::getInstance();

    $globals->set("mysql", $mysql);

    //Utilizar el método set de $globals para añadir $config ($key será "config")
    $globals->set("config", $config);

    //Crear un nuevo objeto de tipo Controller
    $controller = new Controller();

    //Llamar al método run del objeto creado anteriormente
    $controller->run();

