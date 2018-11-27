
<?php
require('Controller_connect.php');
 $m = (new MongoDB\Client)->StarWars->Planetas;
	
 // select a database
 $cursor = $m->find();
 // iterate cursor to display title of documents
  
 foreach ($cursor as $document) {
    echo 'ID: ' . $document["id"] . "\n";
    echo '</br>';
    echo 'Name: '.$document["name"] . "\n";
    echo '</br>';
    echo 'Terrain: '.$document["terrain"] . "\n";
    echo '</br>';
    echo 'Climate: '.$document["climate"] . "\n";
    echo '</br>';
    echo 'Aparições em Filmes: '.$document["Qtaparicoes"] . "\n";
    echo '</br>';
    echo '<form method="post" action="Controller_delete.php">
             <div class="form-group">';
    echo '    <button id="apagar" name="apagar" value="'.$document["id"].'">Apagar</button>';
    echo '     </br>';
    echo '   </div>
          </form>';
    echo '</br>';
 }
 ?>