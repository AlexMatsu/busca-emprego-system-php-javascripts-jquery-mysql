<?php
//unset apaga uma variável especifica, limpando assim a informação da memória do servidor
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: login.php");
?>