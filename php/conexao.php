<?php

    $host='127.0.0.1';
    $usuario='root';
    $senha='';
    $database='bd';
    $conexao = new mysqli($host,$usuario,$senha,$database);

    if($conexao->connect_error) {
        die("Falhou : " . $conexao->connect_error);
    }
?>