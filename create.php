<?php
require('DBconnect.php');
$collection = (new MongoDB\Client)->StarWars->Planetas;

$insertOneResult = $collection->insertOne([
    'id' => $_POST['id'] ,
    'name' =>  $_POST['name'],
    'terrain' => $_POST['terrain'],
    'climate' => $_POST['climate'],
    'Qtaparicoes' => $_POST['film']
]);
header('Location: index.php');
?>