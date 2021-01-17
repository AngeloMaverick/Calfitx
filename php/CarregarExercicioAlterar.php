<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

$nome= $_GET["nome"]; 
$tipo = $_GET["tipo"];
$musculo = $_GET["musculo"];


$data=array();


    $q=mysqli_query($con, "select nm_exercicio, ds_rep_30, ds_rep_45, ds_rep_60, ds_rep_90, ds_imagem from `tb_exercicio` where `tp_tipo` = $tipo and cd_musculo = $musculo and nm_exercicio != '$nome'");



while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>