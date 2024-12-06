<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection DB</title>
    <style>
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
        }
        .horizontal div{
            padding: 20px;
            border: 1px solid lightgrey;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="horizontal">
        <div>
            <h1>Formulário cadastro</h1>
            <form action='insertion.php' method="POST">
                <label>Nome:</label>
                <input type="text" name="nome">
                <br>
                <label>Email:</label>
                <input type="text" name="email">
                <br>
                <label>Senha:</label>
                <input type="password" name="senha">
                <br>
                <input type="submit">
            </form>
            <br><br<<br>

            <?php
            include_once('connection.php');

            $sql = "SELECT * FROM funcionario ORDER BY nome ASC";
            $resultado = mysqli_query($conexao, $sql);

            // Verificar se há registros
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
            }
            } 
            else {
                echo "Nenhum registro encontrado.";
            }
            ?>
        </div>
        <div>
        <h1>Formulário consulta</h1>
            <form action="index.php" method="GET">
                <label>Nome:</label>
                <input type="text" name="nome">
                <br>
                <input type="submit">
            </form>

            <br><br<<br>

            <?php
                echo '<br>';
                if(isset($_GET['nome'])){
                $nome = $_GET['nome'];
                
                //Exemplo de pesquisa simples usando o "igual"
                //$sql = "SELECT * FROM funcionario WHERE nome = '$nome'";

                //Exemplo de pesquisa dinâmica usando o "LIKE"
                $sql = "SELECT * FROM funcionario WHERE nome LIKE= '$nome%'";
                $resultado = mysqli_query($conexao, $sql);

                // Verificar se há registros
                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
                }
                } 
                else {
                    echo "Nenhum registro encontrado.";
                }    
                }

            ?>
        </div>
    </div>
</body>
</html>