    <?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
    
    require('Model_search.php');
    require('Controller_connect.php');
    ?>
    <section class="content-header">
      <h1>
        Star Wars
        <small>Catalogo de Planetas</small>
      </h1>
      
    <body>    
          <form method="post" action="Controller_create.php">
          <div class="form-group">  
              <label>ID:
               <input type="text" id='id' name='id' required value=<?php echo $id_url?>><br>
              <label>Planeta:
              <input type="text" id='name' name='name' required placeholder="SEM INFORMAÇÃO" value=<?php echo $name?>><br>
              <label>Clima:
               <input type="text" id='climate' name='climate' required placeholder="SEM INFORMAÇÃO" value=<?php echo $climate?>><br>
              <label>Terreno:
               <input type="text" id='terrain' name='terrain' required placeholder="SEM INFORMAÇÃO" value=<?php echo $terrain?>><br>
              <label>Quantas vezes fez aparições:
               <input type="textbox" id='film' name='film' required placeholder="SEM INFORMAÇÃO" value=<?php echo $numerofilme?>><br>
          </div>
          <button type="submit" id="button" name="button">cadastrar</button>
          </form>            
    </body>
  </section>
  
  <!-- /.content-wrapper -->
 
