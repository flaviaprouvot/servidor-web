<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color:lightgreen;
            text-align:center;
        }
        
        form {
            margin: 0 auto;
            width: 300px;
            padding: 20px;
            background-color: lightgray;
            border-radius: 8px;
        }

</style>


<form method="post" action="acesso.php">
    <label for="username">Usuário:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Senha:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">
</form>

</body>
</html>







