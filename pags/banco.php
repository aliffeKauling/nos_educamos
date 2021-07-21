<?php
 $db = "educa";
 function conecta()
 {
   $conexao = mysqli_connect("localhost","root","", "educa");
   return $conexao;
 }

?>
