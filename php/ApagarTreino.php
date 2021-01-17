<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

 $cd=$_POST['cd'];
 $treino=$_POST['treino'];
 
$q = mysqli_query($con, "DELETE FROM `tb_treino` where cd_cadastro = $cd and cd_treino = $treino");

 if($q)
  echo "success";
 else
  echo "error";
 ?>