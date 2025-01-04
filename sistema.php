<?php
    session_start();
    include_once('config.php'); //conexão com o banco de dados
    if((!isset($_SESSION['loginAdm']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['loginAdm']);
        unset($_SESSION['senhaAdm']);
        header('Location: login.php');
    }
        $logado = $_SESSION['loginAdm'];
        $sql = "SELECT * FROM moradores ORDER BY id DESC";
        $result = $conexao -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif; /* Define a fonte Roboto para todos os elementos */
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
            overflow-x: hidden; 
            display: flex; 
            flex-direction: column;
            height: 100vh;
        }
        
        .cabecalho{
            background-color: #254011;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            z-index: 1000;
            justify-content: space-between;

        }

        .cabecalho button{
            background-color: #254011;
            border:none;
            display: flex;
            align-items: center;
        }

        .cabecalho img{
            width:40%;
            height: auto;
        }

        .cabecalho p{
            color:white;
            margin-right:3%;
        }
        
        .acima{
            margin-top:6%;
            display:flex;
            align-items: end;
            justify-content: space-between;
        }
        
        .acima h1{
            margin:0;
            margin-left:10%;
            color: #254011;
        }
        

        .acima a, img{
            background-color: #254011;
            width:30px;
            height:30px;
            border-radius:8px;
            justify-content:end;
            margin-right:12%;

        }

        .crud{
            display: flex;
            justify-content: center; 
        }

        .table{
            background-color:#254011;
            border-radius:10px;
            border: 1px solid #254011; 
            padding:50px;
            width:80%;
            margin:15px;
        }

        .table th:nth-child(1) {
            border-radius:10px 0px 0px 0px;
        }

        .table th:nth-child(4) {
            border-radius:0px 10px 0px 0px;
        }

        .table th, .table td{
            background-color:white;
            border: 1px solid #254011; 
            padding:15px;
            text-align: center;
        }
        

    </style>
</head>

<header>
    <div class="cabecalho">
        <button>        
            <a href="login.php">
                <img src="images/logo.png" alt="Page Home">
            </a>       
        </button>
        <p>
            <?php 
                print_r('Sessão ativa: '.$logado);
            ?>
        </p>
</div>
</header>

<body>

    <div class = "acima">
        <h1>Moradores cadastrados</h1>
        <a href="formulario.php">
            <img src="images/mais.png" alt="Adicionar">
        </a>   

    </div>

    <div class="crud">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>

                </tr>
            </thead>
            
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['id'];
                        echo "<td>".$user_data['nome'];
                        echo "<td>".$user_data['telefone'];
                        echo "<td>".$user_data['email'];                       
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>