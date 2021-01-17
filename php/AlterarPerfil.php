<?php

 header("Access-Control-Allow-Origin: *");
 $con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");
 
 if(isset($_POST['update']))
 {
 $nome=$_POST['nome'];
 $login=$_POST['login'];
 $email=$_POST['email'];
 $idade=$_POST['idade'];
 $sexo=$_POST['sexo'];
 $id=$_POST['id'];
 if($sexo == "Masculino") $sexo = "M";
 if($sexo == "Feminino") $sexo = "F";
 
 $q=mysqli_query($con,"UPDATE `tb_cadastro` SET `nm_usuario` = '$nome' , `nm_login` = '$login', `ds_email` = '$email', `dt_idade` = '$idade', `ds_sexo` = '$sexo' WHERE `cd_cadastro` = $id");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>