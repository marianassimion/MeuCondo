<?php
    if(isset($_POST['submit'])){ 

        include_once('config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $nascimento = $_POST['nascimento'];
        $email = $_POST['email'];
        $senha = preg_replace('/\D/', '', $cpf); // Remove tudo que não é número

        $result = mysqli_query($conexao, "INSERT INTO moradores(nome,cpf,telefone,nascimento,email,senha) 
        VALUES('$nome', '$cpf', '$telefone', '$nascimento', '$email', '$senha')");

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
        body {
            font-family: 'Roboto', sans-serif; /* Define a fonte Roboto para todos os elementos */
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
            overflow-x: hidden; 
            display: flex; 
            flex-direction: column;
            height: 100vh;
        }

        .cabecalho {
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

        .cabecalho button {
            background-color: #254011;
            border: none;
            display: flex;
            align-items: center;
        }

        .cabecalho img {
            width: 40%;
            height: auto;
        }

        .box {
            justify-content: space-between;
            margin: 80px 20px 20px;
            padding: 10px;
            border: 1px solid #254011;
            border-radius: 10px;            
        }

        .box legend {
            margin-top: 20px;
            margin-left: 20px;
            color: #254011;
            font-weight: 900;
            font-size: x-large;
        }

        .inputBox {
            display: flex;
            align-items: center;
            margin: 10px;
            justify-items: center;  
            font-size: large;
            font-weight: bold;   
            color: #254011;
        }

        .inputBox label {
            width: 200px;
            text-align: end;
        }

        .inputBox input {
            margin-left: 10px;
            width: 300px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid #254011;
        }

        .licenca {
            display: flex;
            align-items: center;
        }

        .foto_perfil {
            margin-left: 80%;
            display: flex; 
            flex-direction: column;
            position: fixed;
            align-items: center;
            text-align: center;
        }

        .foto_perfil img {
            height: 150px;
            width: 130px;
            border-radius: 8px;
            border: 1px solid #254011;
            object-fit: cover;
        }

        .foto_perfil label {
            width: 130px;
            font-weight: bold;
            font-size: 16px;
            background-color: #254011;
            border: none;
            color: white;
            height: 30px;
            border-radius: 8px;
            margin-top: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            line-height: 30px;
        }

        .foto_perfil label:hover {
            background-color: white;
            border: 1px solid #254011;
            color: #254011;
        }

        .foto_perfil span {
            margin-top: 5px;
            font-size: 14px;
            color: #254011;
        }

        .enviar {
            align-self: flex-end;
            margin-right: 2%;
        }

        #submit {
            font-weight: bold;
            font-size: 16px;
            background-color: #254011;
            border: none;
            color: white;
            width: 100px;
            height: 30px;
            border-radius: 8px;
        }

        #submit:hover {
            background-color: white;
            border: 1px solid #254011;
            color: #254011;
            cursor: pointer;
        }
    </style>
</head>

<header>
    <div class="cabecalho">
        <button>        
            <a href="sistema.php">
                <img src="images/logo.png" alt="Page Home">
            </a>       
        </button>
    </div>
</header>

<body>
    <div class="box">
        <form action="formulario.php" method="POST"> 

            <div class="foto_perfil">
                <img src="images/perfil.png" alt="Foto de Perfil" id="foto-preview">
                <input type="file" id="file" name="file" accept="image/*" style="display: none;">
                <label for="file" class="custom-upload">Adicionar foto</label>
                <span id="file-name">Nenhuma foto selecionada</span>
            </div>


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

                <div class="licenca">
                    <div class="inputBox">
                        <label for="file">Licença-médica</label>
                    </div>
                    <input type="file" id="file" name="file" required>                
                </div>

                
            </div>
            <a href = "sistema.php"><input type="submit" name="submit" id="submit"></a>
        </form>
    </div>

    <script>
        const fileInput = document.getElementById("file");
        const fileNameDisplay = document.getElementById("file-name");
        const fotoPreview = document.getElementById("foto-preview");

        fileInput.addEventListener("change", function () {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                fileNameDisplay.textContent = file.name;

                // Atualizar a pré-visualização da imagem
                const reader = new FileReader();
                reader.onload = function (e) {
                    fotoPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                fileNameDisplay.textContent = "Nenhuma foto selecionada";
                fotoPreview.src = "images/perfil.png"; // Voltar para a imagem padrão
            }
        });

    </script>
</body>
</html>