
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Login Usando bD</h1>


<form method="post" action="conexao.php">
    <label for="name">Nome:</label><br>
    <input type="text" id="name" name="name" maxlength="8" required><br><br>

    <label for="username">Usuário:</label><br>
    <input type="text" id="username" name="username" maxlength="8" required><br><br>
    
    <label for="password">Senha:</label><br>
    <input type="password" id="password" name="password" maxlength="8" required><br><br>
    
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>

<?php
$nomeServidor   = "localhost";
$nomeBancoDados = "cadatro";
$nomeUsuario	= "root";
$senha		= "usbw";


// Criando a conexão

$conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomeBancoDados);


// Checando a conexão

if (!$conexao) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
echo "Conectado com Sucesso !";
mysqli_close($conexao);


?>

</body>
</html>

