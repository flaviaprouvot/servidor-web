<?php
session_start();
include_once("connection.php");

if (!isset($_SESSION['login']) || $_SESSION['login'] !== 'flavia@flavia.com') {
    header('Location: dashboard.php'); 
    exit();
}

if (isset($_POST['cadastrar'])) {
    $nome_produto = $_POST['nome_produto'];
    $preco_produto = $_POST['preco_produto'];
  
    $descricao_produto = isset($_POST['descricao_produto']) ? $_POST['descricao_produto'] : ''; 

    $sql = "INSERT INTO produtos (nome, preco, descricao) VALUES ('$nome_produto', '$preco_produto', '$descricao_produto')";
    if (mysqli_query($conexao, $sql)) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto: " . mysqli_error($conexao);
    }
}

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(darkblue,blue,lightblue);
    color: #333;
    padding: 20px;
    margin: 0;
}

h1 {
    text-align: center;
    color: #007bff;
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

input[type="text"],
textarea {
    width: 100%; 
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; 
}

input[type="submit"] {
    background-color: #007bff; 
    color: white; 
    border: none; 
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #007bff; 
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2; 
}

.logout-button {
    display: block;
    width: 150px;
    margin: 20px auto;
    padding: 10px;
    background-color: darkblue; 
    color: white;
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    transition: background-color 0.3s;
}

.logout-button:hover {
    background-color: darkblue;
}
    </style>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="" method="POST">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" name="nome_produto" required>
        <br>
        <label for="preco_produto">Preço do Produto:</label>
        <input type="text" name="preco_produto" required>
        <br>
        <label for="descricao_produto">Descrição do Produto:</label>
        <textarea name="descricao_produto" required></textarea>
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar Produto">
    </form>

    <h2>Produtos Cadastrados</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
        <?php while ($produto = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo ($produto['nome']); ?></td>
            <td><?php echo ($produto['preco']); ?></td>
            <td><?php echo ($produto['descricao']); ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="logout.php" class="logout-button">Logout</a>
</body>
</html>