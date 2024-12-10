<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
    header('Location: login_usuario.php');
    exit();
}
if (isset($_SESSION['erro'])) {
    echo '<p style="color:darkblue">' . $_SESSION['erro'] . '</p><br>';
    unset($_SESSION['erro']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(darkblue,blue,lightblue);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }

  
        h1 {
            font-size: 2rem;
            color: darkblue;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: darkblue;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: blue;
        }

        p {
            color: red;
            font-weight: bold;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Formulário Cadastro</h1>
        <form action='insertion.php' method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
            <br>
            <label for="email">Email: </label>
            <input name="email" type="email" required>
            <br>
            <label for="senha">Senha: </label>
            <input name="senha" type="password" required>
            <br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </form>
        <br><br><br>
    </div>
</body>
</html>
