<?php
$host = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'empresa';

// Conectar ao banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);
// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
die('Erro na conexão: ' . mysqli_connect_error());
}
echo "Conexão bem-sucedida!<br>";
?>