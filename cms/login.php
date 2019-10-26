<?php

require_once('./db/conexao.php');
$conexao = conexaoMysql();

$usuario = $_POST['txtUsuarioCms'];
$senha = $_POST['txtSenhaCms'];

$status = 0;

// $sql = "select tbl_usuario.*, tbl_nivel.* from tbl_usuario inner join tbl_nivel 
//     on tbl_usuario.id_nivel = tbl_nivel.id_nivel 
//     where tbl_usuario.status = 1 and tbl_usuario.usuario = '" . $usuario . "' and tbl_usuario.senha = '" . $senha . "' and 
//     tbl_nivel.status = 1";

$sql_usuario = "select * from tbl_usuario where usuario = '".$usuario."' and senha = '".$senha."'";

$select = mysqli_query($conexao, $sql_usuario);

if ($rs = mysqli_fetch_array($select)) {
    $_SESSION['login'] = $rs['usuario'];
    $_SESSION['senha'] = $rs['senha'];
    $_SESSION['idNivel'] = $rs['id_nivel'];
    $_SESSION['status_usuario'] = $rs['status'];
}

$sql_nivel = "select * from tbl_nivel where id_nivel = ".$_SESSION['idNivel'];

$select_nivel = mysqli_query($conexao, $sql_nivel);

if($rs_nivel = mysqli_fetch_array($select_nivel)){
    $_SESSION['status_nivel'] = $rs_nivel['status'];
}

if($_SESSION['login'] != $usuario and $_SESSION['senha'] != $senha){
    echo '<script>alert("Usuário ou senha incorretos"); window.history.go(-1)</script>';
}else if($_SESSION['status_nivel'] == 0){
    echo '<script>alert("Nível desse usuário está desativado"); window.history.go(-1)</script>';
}else if($_SESSION['status_usuario'] == 0 ){
    echo '<script>alert("Esse usuário está desativado"); window.history.go(-1)</script>';
}else{
    header('location:./cms/home.php');
}

// if ($status == 0) {
//     echo '<script>alert("Sem permissão de acesso! Nivel ou usuário desativados"); window.history.go(-1)</script>';
// } else if ($status == 1) {
//     if ($userdb == $usuario and $senhadb == $senha) {
//         $_SESSION['login'] = $userdb;
//         $_SESSION['senha'] = $senhadb;
//         $_SESSION['idNivel'] = $idNivel;
//         $_SESSION['status'] = $status;
//         header('location:./cms/home.php');
//     }else{
//         echo '<script>alert("Esse usuário não existe"); window.history.go(-1)</script>';
//     }
// } else {
//     echo 'erro';
// }

// verificar se o nivel está ativo, se estiver, libera o acesso ao cms, se não, bloquear acesso
