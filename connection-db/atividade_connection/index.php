<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Connection </title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightgreen;
        }

        .form-container {
            display: flex;
            padding: 20px;
            background-color: lightblue;
            border-radius: 8px;
            margin: 20px;

        }

        form {
            width: 60%;
            padding: 20px;
            background-color: #fafafa;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
        }

        form label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .results-produtos {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-left: 20px;
            margin-right: 20px;
        }

        .results-clientes {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-left: 20px;
            margin-right: 20px;
        }

        h2 {
            color: #333;
        }

        .no-results {
            color: #f44336;
        }

        .results-container p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>

</head>
<body>
<div class="form-container">
<div>
    <h3>Produtos</h3>
    <form action='insertionProduto.php' method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label>Valor:</label>
        <input type="text" name="valor">
        <br><br>
        <label>Estoque:</label>
        <input type="text" name="estoque">
        <br><br>
        <input type="submit">
    </form>
    
    <div class="results-produtos">
        <?php
        include_once('connection.php');
        
        $sql = "SELECT * FROM produto ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);
        
        if (mysqli_num_rows($resultado) > 0) {
            echo "<h2>Produtos:</h2>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "Nome: " . $linha['nome'] . " - Valor: " . $linha['valor'] . " - Estoque: " . $linha['estoque'] . "<br>";
            }
        } else {
            echo "<p class='no-results'>Nenhum registro de produto encontrado.</p>";
        }
        ?>
    </div>
</div>

<div>
    <h3>Clientes</h3>
    <form action='insertionCliente.php' method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label>Email:</label>
        <input type="text" name="email">
        <br><br>
        <input type="submit">
    </form>
    
    <div class="results-clientes">
        <?php
        $sql = "SELECT * FROM cliente ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);
        
        if (mysqli_num_rows($resultado) > 0) {
            echo "<h2>Clientes:</h2>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . "<br>";
            }
        } else {
            echo "<p class='no-results'>Nenhum registro de cliente encontrado.</p>";
        }
        ?>
    </div>
</div>
</div>
</body>
</html>


