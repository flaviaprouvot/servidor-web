<?php
    session_start();
    session_destroy();
    setcookie('login', '', -3600, '/');
    setcookie('senha', '', -3600, '/');
    header('Location: index.php');
?>