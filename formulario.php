<?php
    if(isset($_POST['submit'])){ 

        include_once('config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $nascimento = $_POST['nascimento'];
        $email = $_POST['email'];

        $result = mysqli_query($conexao, "INSERT INTO moradores(nome,cpf,telefone,nascimento,email) 
        VALUES('$nome', '$cpf', '$telefone', '$nascimento', '$email')");

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>

    <!-- Link para a fonte Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

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

        .box{
            margin: 80px 20px 20px;
            padding: 10px;
            border: 1px solid #254011;
            border-radius: 10px;            
        }

        .box legend{
            margin-top: 20px;
            margin-left: 20px;
            color:#254011;
            font-weight:900;
            font-size: x-large;
        }

        .inputBox{
            display: flex;
            align-items: center;
            margin: 10px;
            justify-items: center;  
            font-size: large;
            font-weight: bold;   
            color: #254011;
        }

        .inputBox label{
            width: 200px;
            text-align: end;
        }

        .inputBox input{
            margin-left: 10px;
            width: 300px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid #254011;
        }

        .enviar{
            align-self:flex-end;
            margin-right: 2%;
        }

        #submit{
            background-color: #254011;
            border:none;
            color: white;
            width: 100px;
            height: 30px;
            border-radius: 8px;
        }

        #submit:hover{
            background-color: white;
            border:#254011;
            color: #254011;
            width: 100px;
            height: 30px;
            border-radius: 8px;
        }

    </style>
</head>

<header>
    <div class="cabecalho">
        <button>        
            <img src="images/logo.png" alt="Page Home">        
        </button>
    </div>
</header>

<body>
    
    <div class="box">
        <form action="formulario.php" method="POST"> 
            <legend>Dados Pessoais</legend>
            <br>
            <div class="campos">
                <div class="inputBox">
                    <label for="nome">Nome completo*</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="cpf">CPF*</label>
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="telefone">Telefone Celular*</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="nascimento">Data de Nascimento*</label>
                    <input type="date" name="nascimento" id="nascimento" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="inputUser">
                </div>
            </div>
            <input type="submit" name="submit" id="submit">  <!-- Corrigido: Botão dentro do form -->
        </form>
    </div>

</body>
</html>
