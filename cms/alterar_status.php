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
        $sql = "select * from tbl_usuario where id_usuario = " . $cod . "";

        $select_all = mysqli_query($conexao, $sql);

        while ($rs = mysqli_fetch_array($select_all)) {
            $status = $rs['status'];
        }

        if ($st == 0) {
            $sql = "UPDATE tbl_usuario SET status = 1 where id_usuario = " . $cod . "";

            if ($select = mysqli_query($conexao, $sql)) {
                header('location:./controle_usuario.php');
            } else {
                echo 'erro';
            }
        } else if ($st == 1) {
            $sql = "UPDATE tbl_usuario SET status = 0 where id_usuario = " . $cod . "";

            if ($select = mysqli_query($conexao, $sql)) {
                header('location:./controle_usuario.php');
            } else {
                echo 'erro';
            }
        }
    } else if ($alterar == 'nivel') {

        $sql = "select * from tbl_nivel where id_nivel = " . $cod . "";

        $select_all = mysqli_query($conexao, $sql);

        while ($rs = mysqli_fetch_array($select_all)) {
            $status = $rs['status'];
        }

        if ($st == 0) {
            $sql = "UPDATE tbl_nivel SET status = 1 WHERE id_nivel = " . $cod . "";

            if ($select = mysqli_query($conexao, $sql)) {
                header('location:./controle_niveis.php');
            } else {
                echo 'erro';
            }
        } else if ($st == 1) {
            $sql = "UPDATE tbl_nivel SET status = 0 WHERE id_nivel = " . $cod . "";

            if ($select = mysqli_query($conexao, $sql)) {
                header('location:./controle_niveis.php');
            } else {
                echo 'erro';
            }
        }
    }else if($alterar == 'curiosidade'){
        $sql = "select * from tbl_curiosidade where id_curiosidade = " . $cod . "";

        $select_all = mysqli_query($conexao, $sql);

        while ($rs = mysqli_fetch_array($select_all)) {
            $status = $rs['status'];
        }

        if($st == 0){
            $sql = "UPDATE tbl_curiosidade SET status = 1 WHERE id_curiosidade = " . $cod . "";

            if ($select = mysqli_query($conexao, $sql)) {
                header('location:./conteudo_curiosidades.php');
            } else {
                echo 'erro';
            }
        }else if($st == 1){
            $sql = "UPDATE tbl_curiosidade SET status = 0 WHERE id_curiosidade = " . $cod . "";

            if ($select = mysqli_query($conexao, $sql)) {
                header('location:./conteudo_curiosidades.php');
            } else {
                echo 'erro';
            } 
        }
    }
}
