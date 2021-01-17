<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

 $cd=$_POST['cdPessoa'];
 $tpTreino=$_POST['tpTreino'];
 
 if($tpTreino == 1)
 {
     $q = mysqli_query($con, "INSERT INTO `tb_concluido`( `tp_tipo`, `cd_cadastro`, `dt_concluido`) VALUES (1,$cd,(SELECT CURDATE()))");
    $q = mysqli_query($con, "UPDATE `tb_cadastro` SET `qt_treino_musculo` = ((SELECT `qt_treino_musculo` where `cd_cadastro` = $cd) + 1) where cd_cadastro = $cd");
 }
 if($tpTreino == 2)
 {
     $q = mysqli_query($con, "INSERT INTO `tb_concluido`( `tp_tipo`, `cd_cadastro`, `dt_concluido`) VALUES (2,$cd,(SELECT CURDATE()))");
    $q = mysqli_query($con, "UPDATE `tb_cadastro` SET `qt_treino_gordura` = ((SELECT `qt_treino_gordura` where `cd_cadastro` = $cd) + 1) where cd_cadastro = $cd");
 }
 if($tpTreino == 3)
 {
     $q = mysqli_query($con, "INSERT INTO `tb_concluido`( `tp_tipo`, `cd_cadastro`, `dt_concluido`) VALUES (3,$cd,(SELECT CURDATE()))");
    $q = mysqli_query($con, "UPDATE `tb_cadastro` SET `qt_treino_movimento` = ((SELECT `qt_treino_movimento` where `cd_cadastro` = $cd) + 1) where cd_cadastro = $cd");
 }
 


 if($q)
  echo "success";
 else
  echo "error";
 ?>