<?php
require 'api_id_max.php';
?>
<section class="content-header">
      <h1>
        Star Wars
        <small>Pesquisa de Planetas</small>
      </h1>
      
    <body>
      <form method="GET" action="cadastro.php">
      <div class="form-group">   
              <label>ID do Planeta:
              <input type='number' id='id' name='id' max='<?php print $count?>' min='0' required>        
              <button type="submit" id="button" name="button">&#x1F50D</button>
      </div>
      </form>

      <form method="GET" action="cadastro.php">    
      <div class="form-group">     
              <label>Nome do Planeta:
              <input type="text" id='nome' name='nome' required>
              <button type="submit" id="button" name="button">&#x1F50D</button>
      <div> 
      </form>                                
    </body>
  </section>
  
  <?php
   require 'read.php'
  ?>