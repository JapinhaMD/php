<?php

    $host = 'localhost';
    $user = 'root';
    $pass = ' ';
    $db = 'db_classiauto';
    $port = 3310;

    $_conn = mysqli_connect($host, $user, $pass, $db, $port)
        or die('Erro ao estabelecer conexão com o banco de dados');