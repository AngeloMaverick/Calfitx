<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

$Tipo= $_GET["tipo"]; 
$Tempo = $_GET["tempo"];
$movimento = $_GET["movimento"];



$data=array();

if($Tempo == "30")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and `cd_movimento` = $movimento order by rand() limit 4");
}
if($Tempo == "45")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and `cd_movimento` = $movimento order by rand() limit 5");
}
if($Tempo == "60")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and `cd_movimento` = $movimento order by rand() limit 7");
}
if($Tempo == "90")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and `cd_movimento` = $movimento order by rand() limit 10");
}

while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>