<?php
    session_start();

    //Verifica se veio do Formulário
    if(isset($_POST['login'])){

        //Verifica se o login esta correto
        include_once('connection.php');
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM funcionario WHERE email = '$login' and senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);

        //Verifica se há registros 
        if (mysqli_num_rows($resultado) > 0){
            //Converte em array associativo
            $linha = mysqli_fetch_assoc($resultado);
            //Grava os dados da sessão
            $_SESSION['login'] = $linha['email'];
            $_SESSION['senha'] = $linha['senha'];
        }else{
            $_SESSION['erro'] = "Login ou senha inválida";
        }
    }

    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        echo '<br>';
        echo $_SESSION['login'];
        echo '<br>';
        echo $_SESSION['senha'];
        echo '<br><br>';
        echo "<form action='cookie.php' method='POST'>
                <input type='submit'>
            </form>";
        echo '<a href="logout.php"><button>Logout</button></a>';
    }else{
        header('Location: index.php');
    }


    

?>