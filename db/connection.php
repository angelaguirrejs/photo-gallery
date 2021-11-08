<?php

/*
If your database has another name or you have different user and password,
you can modify the information in order to do the connection well
*/

function connection (){
    try{
        $connection = new PDO('mysql:host=localhost;dbname=photos_gallery', 'root', '');
        return $connection;

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    return false;
}