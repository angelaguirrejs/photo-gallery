<?php

require 'db/connection.php';

$photos_per_page = 8;

$current_page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

$start = ($current_page > 1) ? $photos_per_page * $current_page - $photos_per_page : 0;

$connection = connection();

if(!$connection){
    die();
}

$statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM photos LIMIT $start, $photos_per_page");
$statement->execute();

$photos = $statement->fetchAll();

if(!$photos) {
    header('Location: index.php');
}

$statement = $connection->prepare("SELECT FOUND_ROWS() as rows_number");
$statement->execute();
$rows_number = $statement->fetch()['rows_number'];

$pages_number = ceil($rows_number / $photos_per_page);

require 'views/index.view.php';