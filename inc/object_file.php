<?php
    include 'lib/Session.php';
    Session::init();
    include 'lib/Database.php';
    include 'helpers/Format.php';

    spl_autoload_register(function ($class){
        include_once "classes/".$class.".php";
    });

    $db                 = new Database();
    $fm                 = new Format();
    $demo               = new DemoRequest();
    $contact            = new Contact();
    $apply              = new Apply();
    $news               = new Newsletter();
    $clientRegister     = new ClientRegister();
?>

