<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$modo = null;
$cod = 0;

$nome = null;
$status = 0;
$chkOn = null;
$chkOff = null;

$modo = @$_GET['modo'];
$cod = @$_GET['codigo'];


if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_categoria WHERE id_categoria = " . $cod . "";

        if (mysqli_query($conexao, $sql)) {
            unlink('./db/files/' . $foto);
            header('location:./adm_categoria.php');
        } else {
            echo 'erro ao excluir';
        }
    }else if($modo == 'editar'){
        $btn = 'Editar';
        $sql = "SELECT * FROM tbl_categoria WHERE id_categoria = ".$cod;

        $select = mysqli_query($conexao, $sql);

        if ($rs = mysqli_fetch_array($select)) {
            $nome = $rs['nome_categoria'];
            $status = $rs['status'];
        }

        ($status == 1) ? $chkOn = "checked" : $chkOff = "checked";
    }
}

if (isset($_POST['btn-cadastrar'])) {

    $nome = $_POST['txt-nome'];
    $status = $_POST['status'];

    if($modo == 'editar'){
        $sql = "UPDATE tbl_categoria SET nome_categoria = '".$nome."', status = ".$status." WHERE id_categoria = ".$cod;
    }else{
        $sql = "INSERT INTO tbl_categoria VALUES (null,  '" . $nome . "', " . $status . ")";
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
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <title>Adicionar Produto - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Nova Categoria</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post" enctype="multipart/form-data">
                <input type="text" value="<?= $nome ?>" name="txt-nome" id="" placeholder="Nome da categoria"> <br>
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