<?php

header("Access-Control-Allow-Origin: *");

    $con = mysqli_connect("localhost", "id5876035_calfitx", "senha123", "id5876035_calfitx") or die("connection error") or die("connection error");
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    
    
    
    if(isset($_POST['register']))
    {   
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];
        
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `tb_cadastro` WHERE `nm_login`='$name'"));
        if($register == 0)
        {
            $insert = mysqli_query($con,"INSERT INTO `tb_cadastro` (`cd_cadastro`,`nm_login`,`cd_senha`, `ds_email`, `nm_usuario`, `ds_sexo`, `dt_idade`, `tp_perfil`,`qt_treino_musculo`,`qt_treino_gordura`,`qt_treino_movimento`) VALUES (default,'$name','$password', '$email', '$nome', '$sexo' , '$idade', 1,0,0,0)");
            if($insert)
                echo "success";
            else
                echo "error";
        }
        else if($register != 0)
            echo "exist";
    }
    else if(isset($_POST['login']))
    {
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `tb_cadastro` WHERE `nm_login`='$name' AND `cd_senha`='$password'"));
        if($login != 0)
            echo "success";
        else
            echo "error";
    }
    mysqli_close($con);
?>