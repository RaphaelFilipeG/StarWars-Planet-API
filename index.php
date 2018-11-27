<?php
require 'Model_api_id_max.php';
?>
<section class="content-header">
      <h1>
        Star Wars
        <small>Pesquisa de Planetas</small>
      </h1>
      
    <body>
     
      <form method="GET" action="View_cadastro.php">    
      <div class="form-group">     
              <label>ID ou Nome do Planeta:
              <input type="text" id='nome' name='nome'required >
              <button type="submit" id="button" name="button">&#x1F50D</button>
      <div> 
      </form>                                
    </body>
  </section>
  
  <?php
   require 'Controller_read.php'
  ?>