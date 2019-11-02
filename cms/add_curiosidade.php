<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

if (isset($_POST['btn-cadastrar'])) {
    require_once './db/upload_imagem.php';

    $titulo = $_POST['txt-titulo'];
    $desc = $_POST['txt-desc'];
    $status = $_POST['status'];

    $file_name = basename($_FILES['foto']['name']);
    $image_name = uploadImagem($file_name);

    $sql = "insert into tbl_curiosidade values(null, '" . $image_name . "', '" . $titulo . "', '" . $desc . "', ".$status.")";

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
    <title>Adicionar Curiosidade - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Nova Curiosidade</h1>
        <form class="form-template" action="" method="post" enctype="multipart/form-data">
            Escolha uma imagem
            <label id="thumbnail">
                <input type="file" name="foto">
                <img src="./images/camera.png" alt="Select img" />
            </label>
            <input type="text" name="txt-titulo" id="" placeholder="Titulo da curiosidade">
            <textarea name="txt-desc" placeholder="Descrição da curiosidade" id="" cols="30" rows="10"></textarea>
            <div class="rg-sexo">
                <input type="radio" name="status" value="1" id="" checked>Online
                <input type="radio" name="status" value="0" id="">Offline
            </div>
            <input type="submit" name="btn-cadastrar" value="Cadastrar">
        </form>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>