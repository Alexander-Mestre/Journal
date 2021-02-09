<?php

/*
*Proxy connection to the phpmotors database
*/



function journalConnect(){
    $server = 'localhost';
    $dbname = 'journal';
    $username = 'iClient';
    $password = 'password';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try{
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    }catch (PDOException $e){
            header('Location: /Journal/view/500.php');

    }
}

