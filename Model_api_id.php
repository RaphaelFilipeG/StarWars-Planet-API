<?php
//definindo Get para buscar o planeta pelo ID
$id_url=$_GET['nome'];
$json = file_get_contents("https://swapi.co/api/planets/".$id_url."/?format=json");

//Convertendo site Para formato de Array
$json_data = json_decode($json, true);

//Informações do Planeta
$name =$json_data['name'];//nome
$climate =$json_data['climate'];//clima
$terrain =$json_data['terrain'];//terreno
$numerofilme =count($json_data['films']);//Quantidade numero de filmes
?>