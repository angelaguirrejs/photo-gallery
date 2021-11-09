<?php

require 'db/connection.php';

$connection = connection();

if(!$connection){
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: index.php');
}

$statement = $connection->prepare('SELECT * FROM photos WHERE id = :id');
$statement->execute(['id' => $id]);
$photo = $statement->fetch();

if(!$photo){
    header('Location: index.php');
}

require 'views/photo.view.php';