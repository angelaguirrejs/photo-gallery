<?php

function connection (){
    try{
        $connection = new PDO('mysql:host=localhost;dbname=photos_gallery', 'root', '');
        return $connection;
        
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    return false;
}