<?php

   include_once('config.php');

   $codigo = $_POST['codigo'];
   $acompanhamento = $_POST['acompanhamento'];
   $nivelprioridade = $_POST['nivelprioridade'];
   $origem = $_POST['origem'];
   $cronograma = $_POST['cronograma'];

   
   $insere_usuarios = "INSERT INTO usuarios (codigo, acompanhamento, nivelprioridade,origem, cronograma, tipohistoria) VALUES ('$nome','$acompanhamento','$nivelprioridade','$origem','$cronograma')";

   $resultado_usuarios  = mysqli_query ($conn ,   $insere_usuarios)
?>