<?php
    //composer de env si no se quiere usar simple eliminar y las paginas $_ENV eliminarlas
    require 'vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $dotenv->load();
    ///
    $url=explode("/",$_GET["url"]);
    if(empty($url[0])){
        require_once "views/home.php";
    }
    //else if(){
//      seccion para controladores
//    }
    else{
        require_once "views/home.php";
    }
?>