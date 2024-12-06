<?php
    session_start();
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        header('Location: dashboard.php');
    }    
    if(isset($_SESSION['erro'])){
        echo '<p style="color:red">' . $_SESSION['erro'] .'</p><br>';
        session_unset($_SESSION['erro']);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="dashboard.php" method="POST">
            <label>Login: </label>
            <input type="text" name="login">
            <br>
            <label>Senha: </label>
            <input type="text" name="senha">
            <br>
            <input type="submit">
        </form>
    </div>
</body>
</html>