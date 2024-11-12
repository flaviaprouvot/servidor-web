<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Calculadora</h1>

<form method="post" action="">
    <label for="n1">Escreva um número:</label><br>
    <input type="text" id="n1" name="n1" maxlength="4" required><br><br>
    <label for="n2">Escreva outro número:</label><br>
    <input type="text" id="n2" name="n2" maxlength="4" required><br><br>

    <label for="op">Escolha a operação:</label>
    <select name="op" id="op" required>
        <option value="">Selecionar</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>  
<br><br>
    <input type="submit" value="Calcular">
    <input type="reset" value="Limpar">
</form>

<?php 
function soma($n1, $n2) {
    return $n1 + $n2;
}

function subtracao($n1, $n2) {
    return $n1 - $n2;
}

function multiplicacao($n1, $n2) {
    return $n1 * $n2;
}

function divisao($n1, $n2) {
    if ($n2 == 0) {
        return "Operação inválida";
    } else{
        return $n1 / $n2;
    }
}
    

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['op'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];

        switch ($op) {
            case "+":
                $resultado = soma($n1, $n2);
                break;
            case "-":
                $resultado = subtracao($n1, $n2);
                break;
            case "*":
                $resultado = multiplicacao($n1, $n2);
                break;
            case "/":
                $resultado = divisao($n1, $n2);
                break;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
}
?>

<br><br>
<a href="calculadora.php">Voltar</a>
</body>
</html>