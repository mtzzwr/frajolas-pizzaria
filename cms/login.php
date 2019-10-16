<?php

require_once('./db/conexao.php');
$conexao = conexaoMysql();

$usuario = $_POST['txtUsuarioCms'];
$senha = $_POST['txtSenhaCms'];

$sql = "select tbl_usuario.*, tbl_nivel.* from tbl_usuario inner join tbl_nivel 
    on tbl_usuario.id_nivel = tbl_nivel.id_nivel 
    where tbl_usuario.status = 1 and tbl_usuario.usuario = '" . $usuario . "' and tbl_usuario.senha = '" . $senha . "' and 
    tbl_nivel.status = 1";

$select = mysqli_query($conexao, $sql);

if ($rs = mysqli_fetch_array($select)) {
    $userdb = $rs['usuario'];
    $senhadb = $rs['senha'];
    $idNivel = $rs['id_nivel'];
    $status = $rs['status'];
}

if ($status == 0) {
    echo 'Seu usuário foi criado, porém ainda não está ativo';
} else if ($status == 1) {
    if ($userdb == $usuario and $senhadb == $senha) {
        $_SESSION['login'] = $userdb;
        $_SESSION['senha'] = $senhadb;
        $_SESSION['idNivel'] = $idNivel;
        $_SESSION['status'] = $status;
        header('location:./cms/home.php');
    }
} else {
    echo 'erro';
}

// verificar se o nivel está ativo, se estiver, libera o acesso ao cms, se não, bloquear acesso
