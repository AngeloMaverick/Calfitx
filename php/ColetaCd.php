<?php 
 header("Access-Control-Allow-Origin: *");

$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

$login = $_GET["login"];

$data=array();
$q=mysqli_query($con, "select *  from `tb_cadastro` where nm_login = '$login'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
 ?>