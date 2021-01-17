<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

$id= $_GET["id"]; 



$data=array();


$q=mysqli_query($con, "select nm_usuario, nm_login, ds_email, dt_idade, ds_sexo, tp_perfil from `tb_cadastro` where `cd_cadastro` = $id");


while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>