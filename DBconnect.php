<?php
require 'vendor/autoload.php';


   // conectando ao banco mongo
$m = new MongoDB\Client("mongodb://localhost:27017");
$db= $m->StarWars; // seleciona o banco de dados "Planetas"


// busca sua coleção de dados "Planetas", que podemos traduzir como "tabela" num banco relacional
$m = $db->selectCollection("Planetas");
?>