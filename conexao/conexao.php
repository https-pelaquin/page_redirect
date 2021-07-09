<?php

    $server="localhost";
    $user="root";
    $passwd="1234";
    $bd="page_redirect";

     if ($conexao = mysqli_connect($server, $user, $passwd, $bd)) {
          //echo "Conectado";
     } else {
          echo "Erro de conexão com o banco de dados";
     }
?>