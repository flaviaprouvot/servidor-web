<?php
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: index.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(darkblue,blue,lightblue);
            display: flex;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 40px;
            color: darkblue;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 29px;
            color: darkblue;
            margin-bottom: 15px;
        }


        p {
            font-size: 19px;
            margin-bottom: 20px;
        }


        ul {
            list-style-type: none;
        }

        a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .login-box {
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?php echo ($_SESSION['login']); ?>!</h1>
        <p>Você está logado como um usuário comum.</p>
        
        <h2>Informações da Conta</h2>
        <p>Email: <?php echo ($_SESSION['login']); ?></p>

        <h2>Ações</h2>
        <ul>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>
