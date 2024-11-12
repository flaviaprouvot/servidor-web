<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Formulário</h1>


<form method="post" action="formulario.php">
    <label for="aluno">Aluno:</label><br>
    <input type="text" id="aluno" name="aluno" required><br><br>

    <label for="nAluno">Número da chamada:</label><br>
    <input type="text" id="nAluno" name="nAluno" maxlength="2" required><br><br>
    
    <label for="rm">RM:</label><br>
    <input type="text" id="Rm" name="RM" maxlength="4" required><br><br>

    <label for="patrimonio">Patrimônio máquina:</label><br>
    <input type="text" id="patrimonio" name="patrimonio" required><br><br>

    <label for="nMaquina">Número da máquina:</label><br>
    <input type="number" id="nMaquina" name="nMaquina" required><br><br>

    <label for="foto">Foto:</label><br>
    <input type="file" id="foto" name="foto" required><br><br>

    <label for="st">Service tag:</label><br>
    <input type="text" id="st" name="st" required><br><br>
    
    
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>

</body>
</html>