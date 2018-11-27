<?php
    if (is_numeric($_GET['nome'])) { 
        require('Model_api_id.php'); // Se tiver resultado redireciona   
    }elseif(is_string($_GET['nome'])){
        require('Model_api_nome.php'); // Se tiver resultado redireciona  
    }else{
        die;
    }

?> 