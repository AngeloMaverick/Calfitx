<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");


$data=array();


$q=mysqli_query($con, "SELECT DISTINCT tb_programa.cd_programa, tb_programa.nm_programa, tb_programa.ds_programa, tb_programa.ds_tempo, tb_programa.tp_tipo, tb_programa.cd_cadastro, (select nm_login from tb_cadastro where tb_cadastro.cd_cadastro = tb_programa.cd_cadastro) as Nome, cd_treino FROM `tb_programa`, `tb_cadastro`");


while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>