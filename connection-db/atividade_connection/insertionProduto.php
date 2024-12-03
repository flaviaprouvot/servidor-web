<?php
include_once('connection.php');

$nome= $_POST['nome'];
$valor= $_POST['valor'];
$estoque= $_POST['estoque'];

$sql = "INSERT INTO produto (nome, valor, estoque) VALUES ('$nome', '$valor', '$estoque')";
if (mysqli_query($conexao, $sql)) {
    echo " Novo registro inserido com sucesso!";
    header('Location: index.php');
} 
else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>