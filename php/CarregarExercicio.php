<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

$Tempo= $_GET["Tempo"]; 
$Tipo = $_GET["Tipo"];
$exe1 = $_GET["exe1"];
$exe2 = $_GET["exe2"];
$exe3 = $_GET["exe3"];
$exe4 = $_GET["exe4"];
$exe5 = $_GET["exe5"];
$exe6 = $_GET["exe6"];
$exe7 = $_GET["exe7"];
$exe8 = $_GET["exe8"];
$exe9 = $_GET["exe9"];
$exe10 = $_GET["exe10"];

$data=array();

if($Tempo == "30")
{
    $q=mysqli_query($con, "select nm_exercicio, ds_rep_30, ds_imagem, tp_tipo, cd_musculo from `tb_exercicio` where `tp_tipo` = $Tipo and ( `cd_exercicio` = '$exe1' or `cd_exercicio` = '$exe2' or `cd_exercicio` = '$exe3' or `cd_exercicio` = '$exe4' or `cd_exercicio` = '$exe5' or `cd_exercicio` = '$exe6' or `cd_exercicio` = '$exe7' or `cd_exercicio` = '$exe8' or `cd_exercicio` = '$exe9' or `cd_exercicio` = '$exe10')");
}
if($Tempo == "45")
{
    $q=mysqli_query($con, "select nm_exercicio, ds_rep_45, ds_imagem, tp_tipo, cd_musculo from `tb_exercicio` where `tp_tipo` = $Tipo and ( `cd_exercicio` = '$exe1' or `cd_exercicio` = '$exe2' or `cd_exercicio` = '$exe3' or `cd_exercicio` = '$exe4' or `cd_exercicio` = '$exe5' or `cd_exercicio` = '$exe6' or `cd_exercicio` = '$exe7' or `cd_exercicio` = '$exe8' or `cd_exercicio` = '$exe9' or `cd_exercicio` = '$exe10')");
}
if($Tempo == "60")
{
    $q=mysqli_query($con, "select nm_exercicio, ds_rep_60, ds_imagem, tp_tipo, cd_musculo from `tb_exercicio` where `tp_tipo` = $Tipo and ( `cd_exercicio` = '$exe1' or `cd_exercicio` = '$exe2' or `cd_exercicio` = '$exe3' or `cd_exercicio` = '$exe4' or `cd_exercicio` = '$exe5' or `cd_exercicio` = '$exe6' or `cd_exercicio` = '$exe7' or `cd_exercicio` = '$exe8' or `cd_exercicio` = '$exe9' or `cd_exercicio` = '$exe10')");
}
if($Tempo == "90")
{
    $q=mysqli_query($con, "select nm_exercicio, ds_rep_90, ds_imagem, tp_tipo, cd_musculo from `tb_exercicio` where `tp_tipo` = $Tipo and ( `cd_exercicio` = '$exe1' or `cd_exercicio` = '$exe2' or `cd_exercicio` = '$exe3' or `cd_exercicio` = '$exe4' or `cd_exercicio` = '$exe5' or `cd_exercicio` = '$exe6' or `cd_exercicio` = '$exe7' or `cd_exercicio` = '$exe8' or `cd_exercicio` = '$exe9' or `cd_exercicio` = '$exe10')");
}

while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>