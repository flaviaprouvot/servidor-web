<?php
    session_start();
    setcookie('login', $_SESSION['login'], time() + 3600, '/');
    setcookie('senha', $_SESSION['senha'], time() + 3600, '/');

    header('Location: dashboard.php');
?>