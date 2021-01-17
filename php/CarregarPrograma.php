<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

$id= $_GET["id"]; 
$name = $_GET["nome"];


$data=array();


$q=mysqli_query($con, "select * from `tb_treino` where `nm_treino` = '$name'");


while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>