    <?php
    require('api_search_id.nome.php');
    require('DBconnect.php');
    
    ?>
    <section class="content-header">
      <h1>
        Star Wars
        <small>Catalogo de Planetas</small>
      </h1>
      
    <body>
       
             
          <form method="post" action="create.php">
          <div class="form-group">  
              <label>ID:
               <input type="text" id='id' name='id' value=<?php echo $id_url?>><br>
              <label>Planeta:
              <input type="text" id='name' name='name' value=<?php echo $name?>><br>
              <label>Clima:
               <input type="text" id='climate' name='climate' value=<?php echo $climate?>><br>
              <label>Terreno:
               <input type="text" id='terrain' name='terrain' value=<?php echo $terrain?>><br>
              <label>Quantas vezes fez aparições:
               <input type="textbox" id='film' name='film' value=<?php echo $numerofilme?>><br>
          </div>
          <button type="submit" id="button" name="button">cadastrar</button>
          </form>            
    </body>
  </section>
  
  <!-- /.content-wrapper -->
 
