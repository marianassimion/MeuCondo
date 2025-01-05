<?php
session_start();
    if (isset($_POST['submit']) && !empty($_POST['loginAdm']) && !empty($_POST['senhaAdm'])){
        include_once('config.php'); //conexão com o banco de dados
        $loginAdm = $_POST['loginAdm'];
        $senhaAdm = $_POST['senhaAdm'];

        // print_r('Login administrador: '. $loginAdm);
        // print_r('<br>');
        // print_r('Senha administrador: '. $senhaAdm);

        $sql = "SELECT * FROM administradores WHERE loginAdm = '$loginAdm' and senhaAdm = '$senhaAdm'";

        $result = $conexao -> query($sql);

        if (mysqli_num_rows($result) < 1){
            unset($_SESSION['loginAdm']);
            unset($_SESSION['senhaAdm']);
            header('Location: login.php');
        }

        else{
            $_SESSION['loginAdm'] = $loginAdm;
            $_SESSION['senhaAdm'] = $senhaAdm;
            header('Location: sistema.php');
        }
    }

    else{
        header('Location: login.php');
    }
?>