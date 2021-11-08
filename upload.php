<?php

require 'db/connection.php';

$connection = connection();

if(!$connection){
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){

    $validation = @getimagesize($_FILES['photo']['tmp_name']);

    if($validation != false){

        $destination_directory = 'photos/';

        if(!is_dir($destination_directory)){
            mkdir($destination_directory);
        }

        $upload_file = $destination_directory . $_FILES['photo']['name'];

        move_uploaded_file($_FILES['photo']['tmp_name'], $upload_file);

        $statement = $connection->prepare('INSERT INTO photos (title, description, photo) 
        VALUES (:title, :description, :photo)');

        $statement->execute(
            [
                ':title' => $_POST['title'],
                ':photo' => $upload_file,
                ':description' => $_POST['description']
            ]
        );

        header('Location: index.php');
    } else {
        $errors = "El archivo no es una imagen o es muy pesado";
    }

}

require 'views/upload.view.php';