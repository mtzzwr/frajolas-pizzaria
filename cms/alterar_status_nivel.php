<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$cod = @$_GET['codigo'];
$st = @$_GET['status'];

$sql = "select * from tbl_nivel where id_nivel = " . $cod . "";

$select_all = mysqli_query($conexao, $sql);

while ($rs = mysqli_fetch_array($select_all)) {
    $idNivel = $rs['id_nivel'];
    $nomeNivel = $rs['nome_nivel'];
    $descNivel = $rs['descricao_nivel'];
    $admConteudo = $rs['adm_conteudo'];
    $admFaleConosco = $rs['adm_fale_conosco'];
    $admUsuario = $rs['adm_usuario'];
    $status = $rs['status'];
}

if ($st == 0) {
    $sql = "UPDATE tbl_nivel SET nome_nivel = '".$nomeNivel."', descricao_nivel = '".$descNivel."', adm_conteudo = '".$admConteudo."', 
    adm_fale_conosco = '".$admFaleConosco."', adm_usuario = '".$admUsuario."', status = 1 WHERE id_nivel = ".$cod."";

    if ($select = mysqli_query($conexao, $sql)) {
        header('location:./controle_niveis.php');
    } else {
        echo 'erro';
    }
} else if ($st == 1) {
    $sql = "UPDATE tbl_nivel SET nome_nivel = '".$nomeNivel."', descricao_nivel = '".$descNivel."', adm_conteudo = '".$admConteudo."', 
    adm_fale_conosco = '".$admFaleConosco."', adm_usuario = '".$admUsuario."', status = 0 WHERE id_nivel = ".$cod."";

    if ($select = mysqli_query($conexao, $sql)) {
        header('location:./controle_niveis.php');
    } else {
        echo 'erro';
    }
}
