<?php

//Recebimento do GET para buscar o Planeta Pelo Nome
$planeta=$_GET['nome'];
$json = file_get_contents("https://swapi.co/api/planets/?search=".$planeta."&format=json");

//Conversão do site formato em Array
$json_data = json_decode($json, true);

//Recebimento de Dados do Array
$name =$json_data['results'][0]['name'];//nome
$climate =$json_data['results'][0]['climate'];//clima
$terrain =$json_data['results'][0]['terrain'];//terreno
$numerofilme =count($json_data['results'][0]['films']);//quantidade de filmes

//Explode para Buscar o ID do Planeta
$url = $json_data['results'][0]['url'];//site do planeta
$url_array =explode('/', $url);//conversão em array
$id_url = $url_array[5];//numero de ID 
?>