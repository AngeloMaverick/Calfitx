<?php
 header("Access-Control-Allow-Origin: *");
 $con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");
 
 if(isset($_POST['update']))
 {
 $name=$_POST['name'];
 $exe=$_POST['exe'];
 $Pessoa=$_POST['cdPessoa'];
 $Treino=$_POST['cdTreino'];
 $Tipo=$_POST['tipo'];
 $Musculo=$_POST['musculo'];
 
 $q=mysqli_query($con,"UPDATE `tb_treino` INNER JOIN `tb_exercicio` SET tb_treino.$exe = (select cd_exercicio from tb_exercicio where tb_exercicio.nm_exercicio = '$name' and tb_exercicio.tp_tipo = $Tipo and tb_exercicio.cd_musculo = $Musculo) where tb_treino.cd_treino = $Treino and tb_treino.cd_cadastro = $Pessoa");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>