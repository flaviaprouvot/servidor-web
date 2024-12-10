<?php
include_once("connection.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if (mysqli_query($conexao, $sql)) {
    echo "Novo registro!";
    header("location:index.php");
} 
else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>