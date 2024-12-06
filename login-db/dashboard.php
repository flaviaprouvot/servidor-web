<?php
    session_start();
    $loginCerto = 'bruno';
    $senhaCerto = '123';

    //Verifica se veio do Formulário
    if(isset($_POST['login'])){
        //Verifica se o login esta correto
        if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['senha'] = $_POST['senha'];
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