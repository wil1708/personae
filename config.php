<?php
    function loadClass($class){
        require $class.'.php';
    }

    spl_autoload_register('loadClass');

    try{
        $db = new PDO('mysql:host=localhost;dbname=personae', 'root', '');
    }
    catch (Exception $e){
        die('Erreur :'. $e-> getMessage());
    }
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $manager = new UserManager($db);