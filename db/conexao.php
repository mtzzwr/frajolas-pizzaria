<?php

function conexaoMysql(){
    $host = (string) "127.0.0.1";
    $user = (string) "root";
    $password = (string) "bcd127";
    $db = (string) "db_pizzaria";

    $conexao = mysqli_connect($host, $user, $password, $db);

    return $conexao;
}

?>