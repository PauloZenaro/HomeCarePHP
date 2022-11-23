<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Você não pode acessar esta página. Faça login: <p><a href=\"index.php?page=login.php\">Entrar</a></p>");
    }

?>