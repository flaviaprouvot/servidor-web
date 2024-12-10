<?php
session_start();
    if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
        header('Location: dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(darkblue,blue,lightblue);
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
            color: darkblue;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1rem;
            margin-bottom: 5px;
            color: blue;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: blue;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        .link {
            text-align: center;
        }

        .link p {
            font-size: 1rem;
            color: #555;
        }

        .link a {
            text-decoration: none;
            color: darkblue;
            font-weight: bold;
        }

        .link a:hover {
            color: darkblue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="dashboard.php" method="POST">
            <label for="login">Email:</label>
            <input type="text" name="login" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <input type="submit" value="Cadastrar">
        </form>
        <div class="link">
            <p>Crie sua conta!  <a href="cadastro.php">Cadastre-se</a></p>
        </div>
    </div>
</body>
</html>
