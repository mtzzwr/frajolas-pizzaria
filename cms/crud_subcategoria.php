<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$modo = null;
$cod = 0;

$modo = @$_GET['modo'];
$cod = @$_GET['codigo'];

$nome = null;
$categoria = null;
$status = 0;
$chkOn = null;
$chkOff = null;

if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_subcategoria WHERE id_subcategoria = " . $cod . "";

        if (mysqli_query($conexao, $sql)) {
            unlink('./db/files/' . $foto);
            header('location:./adm_categoria.php');
        } else {
            echo 'erro ao excluir';
        }
    }else if($modo == 'editar'){
        $btn = 'Editar';
        $sql = "SELECT * FROM tbl_subcategoria WHERE id_subcategoria = ".$cod;

        $select = mysqli_query($conexao, $sql);

        if ($rs = mysqli_fetch_array($select)) {
            $nome = $rs['nome_subcategoria'];
            $categoria = $rs['id_categoria'];
            $status = $rs['status'];
        }

        ($status == 1) ? $chkOn = "checked" : $chkOff = "checked";
    }
}

if (isset($_POST['btn-cadastrar'])) {

    $nome = $_POST['txt-nome'];
    $categoria = $_POST['select-cat'];
    $status = $_POST['status'];

    if($modo == 'editar'){
        $sql = "UPDATE tbl_subcategoria SET nome_subcategoria = '".$nome."', id_categoria = ".$categoria.", status = ".$status." WHERE id_subcategoria = ".$cod;
    }else{
        $sql = "INSERT INTO tbl_subcategoria VALUES (null,  '" . $nome . "', ".$categoria.", " . $status . ")";
    }

    if (mysqli_query($conexao, $sql)) {
        header('location:./adm_categoria.php');
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
    <title>Adicionar Subcategoria - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Nova subcategoria</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post" enctype="multipart/form-data">
                <input type="text" value="<?= $nome ?>" name="txt-nome" id="" placeholder="Nome da subcategoria"> <br>
                <select name="select-cat" id="">
                    <?php

                    $sql = 'SELECT * FROM tbl_categoria WHERE status <> 0';

                    $select = mysqli_query($conexao, $sql);

                    while ($rs = mysqli_fetch_array($select)) {
                        ?>

                        <option <?= $categoria == $rs['id_categoria'] ? 'selected' : '' ?> value="<?= $rs['id_categoria'] ?>"><?= $rs['nome_categoria'] ?></option>

                    <?php
                    }

                    ?>
                </select>
                <div class="rg-sexo">
                    Status <br>
                    <input type="radio" name="status" <?= $chkOn ?> value="1" id="" checked>Online
                    <input type="radio" name="status" <?= $chkOff ?> value="0" id="">Offline
                </div>
                <input type="submit" name="btn-cadastrar" value="Cadastrar">
            </form>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>