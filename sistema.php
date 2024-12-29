<?php
    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['loginAdm']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['loginAdm']);
        unset($_SESSION['senhaAdm']);
        
        header('Location: login.php');
    }
    
    else{
        $logado = $_SESSION['loginAdm'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA</title>
</head>
<body>
    
</body>
</html>