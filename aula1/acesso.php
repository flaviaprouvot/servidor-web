<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<body>
<?php
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if ($username === "aluno" && $password === "sesi") {
        echo "Acesso liberado";
    } else {
        echo "Acesso negado";
    }
?>
<a href="login.php"> Voltar </a>
</html>
