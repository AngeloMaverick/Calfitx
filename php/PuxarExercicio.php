<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");


$exe = $_GET["Exe"];


$data=array();


$q=mysqli_query($con, "select ds_imagem, ds_exercicio from `tb_exercicio` where `nm_exercicio` = '$exe' LIMIT 1");


while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>