<?php
$planeta=$_GET['nome'];
$json = file_get_contents("https://swapi.co/api/planets/?search=".$planeta."&format=json");
$json_data = json_decode($json, true);
$name =$json_data['results'][0]['name'];
$climate =$json_data['results'][0]['climate'];
$terrain =$json_data['results'][0]['terrain'];
$numerofilme =count($json_data['results'][0]['films']);

$url = $json_data['results'][0]['url'];
$url_array =explode('/', $url);
$id_url = $url_array[5];
?>