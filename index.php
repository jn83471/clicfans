<?php
    require 'vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $dotenv->load();
    $url=explode("/",$_GET["url"]);
    if(empty($url[0])){
        require_once "views/home.php";
    }
?>