<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login administração</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #254011;
            font-family: 'Questrial', sans-serif; 
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
            overflow-x: hidden; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            height: 100vh;
            text-align: center;
            color: white; 
        }

        .condo {
            padding: 30px 0;
            text-align: center;
        }

        .condo h1 {
            font-family: 'Roboto', sans-serif; 
            font-weight: 700;
            margin: 0;
        }

        .BlocoLogin {
            color: #254011;
            background-color: white;
            width: 40%;
            align-self: center;
            border-radius: 15px;
            padding: 20px;
            margin: 20px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .BlocoLogin p {
            font-family: 'Roboto', sans-serif;
            font-weight: 800;
            margin: 10px 0;
        }

        .Campos {
            display: flex; 
            flex-direction: column;
            justify-content: center; 
            align-items: center;
            gap: 15px; 
            margin-top: 20px;
        }

        .Campos img {
            width: 25px;
            height: 25px;
            padding: 0;
        }

        .CampoCpf,
        .CampoSenha {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%;
            padding: 10px;
            border: 1px solid #9F9F5F;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .CampoCpf input,
        .CampoSenha input {
            border: none;
            outline: none;
            margin-left: 10px;
            font-family: inherit; 
            width:400px;
        }

        .inputSubmit{
            font-family: 'Roboto', sans-serif;
            background-color: #254011;
            width: 30%;
            color:white;
            font-weight: 780;
            font-size: medium;
            border-radius: 5px;
            border: none;
            margin-top: 20px;
            padding: 8px;
        }


        a{
            color:white;
            text-decoration:none;

        }

        .EsqueceuSenha {
            font-size: 0.9rem;
            text-align: center;
            color: white;
            opacity: 0.8;
        }

    </style>
</head>

<body>
    <div class="condo">
        <img src="images/logo.png" alt="Logo MeuCondo">
        <h1>MeuCondo</h1>
    </div>

    <div class="BlocoLogin">

        <div class="Titulo">
            <p>Login</p>
        </div>

        <form action="testeLogin.php" method="POST">
            <div class="Campos">
                <div class="CampoCpf">
                    <img src="images/cadeado.png" alt="Cadeado Login">
                    <input type="text" name="loginAdm" placeholder="Login">
                </div>

                <div class="CampoSenha"> 
                    <img src="images/pessoa.png" alt="Pessoa Login">
                    <input type="text" name="senhaAdm" placeholder="Senha">
                </div>
            </div>
            <div class="Acessar">
                <input class ="inputSubmit" type = "submit" name = "submit" value = "Acessar" id="submit">
            </div>
        </form>
    </div>

    <div class="EsqueceuSenha">
        <p>Caso tenha esquecido a senha, entre em contato com a administração.</p>
    </div>

</body>
</html>
