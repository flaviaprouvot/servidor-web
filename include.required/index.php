<?php

    $idadeUsuario = 16;

    //Incluindo o cabeçalho
    include('head.html'); 

    //Incluindo o corpo
    if($idadeUsuario >= 16){
      include('body.html');  
    }
     else{
        include('body2.html');
     }

    //Incluindo corpo em PHP com require
    require_once('body.php');

    //Incluindo o rodapé
    include('footer.html'); 
?>