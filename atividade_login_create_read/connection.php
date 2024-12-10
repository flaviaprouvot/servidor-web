<?php

$host = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'floricultura';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);
if (!$conexao) {
die('Erro na conexão: ' . mysqli_connect_error());
}
echo "Conexão bem-sucedida!"."<br>";
?>