<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST['login'])) {

    include_once("connection.php");
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $linha = mysqli_fetch_assoc($resultado);

        $_SESSION['login'] = $linha["email"];
        $_SESSION['senha'] = $linha["senha"];
        
        if ($linha["email"] === 'flavia@flavia.com') {
            header('Location: cadastro_produto.php'); 
            exit(); 
        } else {
            header('Location: login_usuario.php');
            exit();
        }
    } else {
        $_SESSION['erro'] = "Login ou Senha inválida";
        header('Location: index.php'); 
        exit();
    }
}

if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
    if ($_SESSION['login'] === 'flavia@flavia.com') {
        header('Location: cadastro_produto.php');
        exit(); 
    } else {
        header('Location: login_usuario.php');
        exit(); 
    }
} else {
    header('Location: index.php'); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(darkblue,blue,lightblue);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
        }
        p {
            text-align: center;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Dashboard</h1>
        <p>Por favor, faça login para continuar.</p>
        <form action="" method="POST">
            <input type="text" name="login" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Login">
        </form>

        <?php if (isset($_SESSION['erro'])): ?>
            <p style="color: red;"><?php echo $_SESSION['erro']; unset($_SESSION['erro']); 
            ?></p>

        <?php 
            endif; 
        ?>
    </div>
</body>
</html>