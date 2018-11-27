<?php
require('Controller_connect.php');

$collection = (new MongoDB\Client)->StarWars->Planetas;
$deleteResult = $collection->deleteOne(['id' => $_POST['apagar']]);

header('Location: index.php');