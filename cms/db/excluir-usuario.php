<?php 

require_once '../../db/conexao.php';
$conexao = conexaoMysql();

$id = $_GET['codigo'];

$sql = "DELETE FROM tbl_usuario WHERE id_usuario = ".$id."";

if(mysqli_query($conexao, $sql))  header('location:../controle_usuario.php');
else echo 'erro ao excluir';

?>