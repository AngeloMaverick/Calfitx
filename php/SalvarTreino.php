<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

 $name=$_POST['name'];
 $Tipo=$_POST['Tipo'];
 $Tempo=$_POST['Tempo'];
 $exe1=$_POST['exe1'];
 $exe2=$_POST['exe2'];
 $exe3=$_POST['exe3'];
 $exe4=$_POST['exe4'];
 $exe5=$_POST['exe5'];
 $exe6=$_POST['exe6'];
 $exe7=$_POST['exe7'];
 $exe8=$_POST['exe8'];
 $exe9=$_POST['exe9'];
 $exe10=$_POST['exe10'];
 $cadastro=$_POST['cadastro'];
 
$q = mysqli_query($con, "INSERT INTO `tb_treino` (`nm_treino`, `tp_tipo`, `ds_tempo`, `cd_exercicio1`, `cd_exercicio2`, `cd_exercicio3`, `cd_exercicio4`, `cd_exercicio5`,  `cd_exercicio6`, `cd_exercicio7`, `cd_exercicio8`, `cd_exercicio9`, `cd_exercicio10`, `cd_cadastro`) VALUES ('$name', $Tipo, '$Tempo',$exe1,$exe2, $exe3, $exe4, $exe5, $exe6, $exe7, $exe8, $exe9, $exe10, $cadastro)");

 if($q)
  echo "success";
 else
  echo "error";
 ?>