<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$alterar = null;
$cod = 0;
$st = 0;

$alterar = $_GET['alterar'];
$cod = $_GET['codigo'];
$st = $_GET['status'];

if (isset($alterar)) {
    if ($alterar == 'usuario') {
        $nome_tabela = 'tbl_usuario';
        $id_tabela = 'id_usuario';
    } else if ($alterar == 'nivel') {
        $nome_tabela = 'tbl_nivel';
        $id_tabela = 'id_nivel';
    }else if($alterar == 'curiosidade'){
        $nome_tabela = 'tbl_curiosidade';
        $id_tabela = 'id_curiosidade';
    }else if($alterar == 'diferencial'){
        $nome_tabela = 'tbl_diferenciais';
        $id_tabela = 'id_diferencial';
    }else if($alterar == 'historia'){
        $nome_tabela = 'tbl_historia';
        $id_tabela = 'id_historia';
    }else if($alterar == 'loja'){
        $nome_tabela = 'tbl_loja';
        $id_tabela = 'id_loja';
    }else if($alterar == 'tituloLoja'){
        $nome_tabela = 'tbl_titulo_subtitulo';
        $id_tabela = 'id_titulo_subtitulo';
    }else if($alterar == 'produto'){
        $nome_tabela = 'tbl_produtos';
        $id_tabela = 'id_produto';
    }else if($alterar == 'categoria'){
        $nome_tabela = 'tbl_categoria';
        $id_tabela = 'id_categoria';
    }else if($alterar == 'subcategoria'){
        $nome_tabela = 'tbl_subcategoria';
        $id_tabela = 'id_subcategoria';
    }

    $sql = "SELECT * FROM ".$nome_tabela." WHERE ".$id_tabela." = ".$cod;

    $select = mysqli_query($conexao, $sql);

    while($rs = mysqli_fetch_array($select)){
        $status = $rs['status'];
    }

    if ($st == 0) $sql = "UPDATE ".$nome_tabela." SET status = 1 where ". $id_tabela." = " . $cod . ""; 
    else if ($st == 1) $sql = "UPDATE ".$nome_tabela." SET status = 0 where ". $id_tabela." = " . $cod . "";

    if ($select = mysqli_query($conexao, $sql)) echo '<script>window.history.go(-1);</script>';
    else echo $sql;
}


