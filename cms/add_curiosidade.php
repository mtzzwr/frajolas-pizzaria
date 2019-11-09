<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$modo = null;
$cod = 0;

$modo = @$_GET['modo'];
$cod = @$_GET['codigo'];
$foto = @$_GET['foto'];

if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_curiosidade WHERE id_curiosidade = " . $cod . "";

        if (mysqli_query($conexao, $sql)) {
            unlink('./db/files/'.$foto);
            header('location:./conteudo_curiosidades.php');
        } else {
            echo 'erro ao excluir';
        }
    }
}

if (isset($_POST['btn-cadastrar'])) {
    require_once './db/upload_imagem.php';

    $titulo = $_POST['txt-titulo'];
    $desc = $_POST['txt-desc'];
    $status = $_POST['status'];

    $file_name = $_FILES['foto'];
    $image_name = uploadImagem($file_name);

    $sql = "insert into tbl_curiosidade values(null, '" . $image_name . "', '" . $titulo . "', '" . $desc . "', " . $status . ")";

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
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <title>Adicionar Curiosidade - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Nova Curiosidade</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post" enctype="multipart/form-data">
                <label id="thumbnail">
                    <input type="file" name="foto" onchange="loadFile(event)">
                    <img id="output">
                    <img src="./images/camera.png" alt="Select img" />
                </label>
                <input type="text" name="txt-titulo" id="" placeholder="Titulo da curiosidade"> <br>
                <textarea name="txt-desc" placeholder="Descrição da curiosidade" id="" cols="30" rows="10"></textarea>
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