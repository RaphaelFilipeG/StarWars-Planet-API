<?php
$json = file_get_contents("https://swapi.co/api/planets/?format=json");
$json_data = json_decode($json, true);
$count =$json_data['count'];
?>