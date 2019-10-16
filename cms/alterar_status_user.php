<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$cod = @$_GET['codigo'];
$st = @$_GET['status'];

$sql = "select * from tbl_usuario where id_usuario = " . $cod . "";

$select_all = mysqli_query($conexao, $sql);

while ($rs = mysqli_fetch_array($select_all)) {

    $nome = $rs['nome'];
    $cpf = $rs['cpf'];
    $rg = $rs['rg'];
    $email = $rs['email'];
    $celular = $rs['celular'];
    $telefone = $rs['telefone'];
    $sexo = $rs['sexo'];
    $usuario = $rs['usuario'];
    $senha = $rs['senha'];
    $idNivel = $rs['id_nivel'];
    $status = $rs['status'];
}

if ($st == 0) {
    $sql = "UPDATE tbl_usuario SET nome = '" . $nome . "', cpf = '" . $cpf . "', rg = '" . $rg . "', email = '" . $email . "', celular = '" . $celular . "', telefone = '" . $telefone . "', 
    sexo = '" . $sexo . "', usuario = '" . $usuario . "', senha = '" . $senha . "', id_nivel = " . $idNivel . ", status = 1 where id_usuario = " . $cod . "";

    if ($select = mysqli_query($conexao, $sql)) {
        header('location:./controle_usuario.php');
    } else {
        echo 'erro';
    }
} else if ($st == 1) {
    $sql = "UPDATE tbl_usuario SET nome = '" . $nome . "', cpf = '" . $cpf . "', rg = '" . $rg . "', email = '" . $email . "', celular = '" . $celular . "', telefone = '" . $telefone . "', 
    sexo = '" . $sexo . "', usuario = '" . $usuario . "', senha = '" . $senha . "', id_nivel = " . $idNivel . ", status = 0 where id_usuario = " . $cod . "";

    if ($select = mysqli_query($conexao, $sql)) {
        header('location:./controle_usuario.php');
    } else {
        echo 'erro';
    }
}
