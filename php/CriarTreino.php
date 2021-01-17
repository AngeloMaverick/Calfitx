<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");

$Tipo= $_GET["tipo"]; 
$Tempo = $_GET["tempo"];
$abdomen = $_GET["Abdomen"];
$peitoral = $_GET["Peitoral"];
$ombro = $_GET["Ombro"];
$costas = $_GET["Costas"];
$biceps = $_GET["Biceps"];
$triceps = $_GET["Triceps"];
$perna = $_GET["Perna"];
$instr = "Hell yeah";
$cont = 0;

if($abdomen == 1)
{
	if($cont == 0)
	{
		$instr = "  cd_musculo = 1 ";
		$cont = 1;
	}
	else
	{
		$instr .= "OR cd_musculo = 1 ";
	}
}
if($peitoral == 1)
{
	if($cont == 0)
	{
		$instr ="  cd_musculo = 2 ";
		$cont = 1;
	}
	else
	{
		$instr .= "OR cd_musculo = 2 ";
	}
}
if($ombro == 1)
{
	if($cont == 0)
	{
		$instr ="  cd_musculo = 3 ";
		$cont = 1;
	}
	else
	{
		$instr .= "OR cd_musculo = 3 ";
	}
}
if($costas == 1)
{
	if($cont == 0)
	{
		$instr ="  cd_musculo = 4 ";
		$cont = 1;
	}
	else
	{
		$instr .= "OR cd_musculo = 4 ";
	}
}
if($biceps == 1)
{
	if($cont == 0)
	{
		$instr ="  cd_musculo = 5 ";
		$cont = 1;
	}
	else
	{
		$instr .= "OR cd_musculo = 5 ";
	}
}
if($triceps == 1)
{
	if($cont == 0)
	{
		$instr ="  cd_musculo = 6 ";
		$cont = 1;
	}
	else
	{
		$instr .= "OR cd_musculo = 6 ";
	}
}
if($perna == 1)
{
	if($cont == 0)
	{
		$instr ="  cd_musculo = 7 ";
		$cont = 1;
	}
	else
	{
		$instr .= "OR `cd_musculo` = 7 ";
	}
}



$data=array();

if($Tempo == "30")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and ( $instr ) order by rand() limit 4");
}
if($Tempo == "45")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and ( $instr ) order by rand() limit 5");
}
if($Tempo == "60")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and ( $instr ) order by rand() limit 7");
}
if($Tempo == "90")
{
    $q=mysqli_query($con, "select *  from `tb_exercicio` where `tp_tipo` = $Tipo and ( $instr ) order by rand() limit 10");
}

while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>