<?php

if (isset($_GET['nome']))
{
    if(empty($_GET['nome'])){
        echo "INSIRA ALGUM TEXTO";
    }else{
    require('api_nome.php');
    }
}
elseif (isset($_GET['id']))
{    
    if(empty($_GET['id'])){
        echo "INSIRA ALGUM TEXTO";
    }else{
    require('api_id.php');
    }
    
}else{
  echo 'Erro';
}
?>