<?php
$id_url=$_GET['id'];
$json = file_get_contents("https://swapi.co/api/planets/".$id_url."/?format=json");
$json_data = json_decode($json, true);
$name =$json_data['name'];
$climate =$json_data['climate'];
$terrain =$json_data['terrain'];
$numerofilme =count($json_data['films']);
?>