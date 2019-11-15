<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$modo = null;
$cod = 0;

$modo = @$_GET['modo'];
$cod = @$_GET['codigo'];

if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_historia WHERE id_historia = " . $cod . "";

        if (mysqli_query($conexao, $sql))  header('location:./adm_historia.php');
        else echo 'erro ao excluir';
    }
}

if (isset($_POST['btn-cadastrar'])) {
    $titulo = $_POST['txt-titulo'];
    $desc = $_POST['txt-desc'];
    $status = $_POST['status'];

    $sql = "insert into tbl_historia values(null, '" . $titulo . "', '" . $desc . "', " . $status . ")";

    if (mysqli_query($conexao, $sql)) {
        echo 'funfou';
    } else {
        echo $sql;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/add_curiosidade.css">
    <title>Adicionar História - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Nova sessão - História</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post">
                <input type="text" name="txt-titulo" id="" placeholder="Titulo do diferencial"> <br>
                <textarea name="txt-desc" placeholder="Descrição do diferencial" id="" cols="30" rows="10"></textarea>
                <div class="rg-sexo">
                    <input type="radio" name="status" value="1" id="" checked>Online
                    <input type="radio" name="status" value="0" id="">Offline
                </div>
                <input type="submit" name="btn-cadastrar" value="Cadastrar">
            </form>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>