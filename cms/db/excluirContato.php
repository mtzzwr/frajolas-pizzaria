<?php 

    require_once '../../db/conexao.php';
    $conexao = conexaoMysql();

    $id = 0;

    $id = $_GET['codigo'];

    $sql = "DELETE FROM tbl_contato WHERE id = '".$id."'";

    if(mysqli_query($conexao, $sql))  header('location:../adm_fale_conosco.php');
    else echo 'erro ao excluir';

?>