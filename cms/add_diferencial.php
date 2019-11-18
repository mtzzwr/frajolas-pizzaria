<?php 

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$modo = null;
$cod = 0;

$modo = @$_GET['modo'];
$cod = @$_GET['codigo'];
$foto = @$_GET['foto'];

$chkOn = null;
$chkOff = null;

$titulo = null;
$desc = null;
$imagem = null;

$btn = 'Cadstrar';

if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_diferenciais WHERE id_diferencial = " . $cod . "";

        if (mysqli_query($conexao, $sql)){ 
            unlink('./db/files/'.$foto);
            header('location:./adm_diferenciais.php');
        }
    }else if($modo == 'editar'){

        $btn = 'Editar';

        $sql = "SELECT * FROM tbl_diferenciais WHERE id_diferencial = ".$cod;

        $select = mysqli_query($conexao, $sql);

        if ($rs = mysqli_fetch_array($select)) {
            $imagem = $rs['imagem_diferencial'];
            $titulo = $rs['titulo_diferencial'];
            $desc = $rs['desc_diferencial'];
            $status = $rs['status'];
        }

        ($status == 1) ? $chkOn = "checked" : $chkOff = "checked";
    }
}

if (isset($_POST['btn-cadastrar'])) {
    require_once './db/upload_imagem.php';

    $titulo = $_POST['txt-titulo'];
    $desc = $_POST['txt-desc'];
    $status = $_POST['status'];

    $file_name = $_FILES['foto'];
    $imagem = uploadImagem($file_name);

    if($modo == 'editar'){
        $sql = "update tbl_diferenciais set titulo_diferencial = '".$titulo."', desc_diferencial = '".$desc."', 
        status = '".$status."' where id_diferencial = ".$cod;

        if($imagem != ''){
            $sql = "update tbl_diferenciais set imagem_diferencial = '".$imagem."', titulo_diferencial = '".$titulo."', desc_diferencial = '".$desc."', 
            status = '".$status."' where id_diferencial = ".$cod;
        }

    }else{
        if($imagem != ''){
            $sql = "insert into tbl_diferenciais values(null, '" . $imagem . "', '" . $titulo . "', '" . $desc . "', " . $status . ")";
        }else{
            echo 'erro, escolha uma imagem para prosseguir';
        }
    }

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
    <title>Adicionar Diferencial - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Novo card - Diferenciais</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post" enctype="multipart/form-data">
                <label id="thumbnail">
                    <input type="file" name="foto" onchange="loadFile(event)">
                    <img src="db/files/<?= $imagem ?>" id="output">
                    <img src="./images/camera.png" alt="Select img" />
                </label>
                <input type="text" value="<?= $titulo ?>" name="txt-titulo" id="" placeholder="Titulo do diferencial"> <br>
                <textarea name="txt-desc" placeholder="Descrição do diferencial" id="" cols="30" rows="10"><?= $desc ?></textarea>
                <div class="rg-sexo">
                    <input type="radio" name="status" <?= $chkOn ?> value="1" id="" checked>Online
                    <input type="radio" name="status" <?= $chkOff ?> value="0" id="">Offline
                </div>
                <input type="submit" name="btn-cadastrar" value="<?= $btn ?>">
            </form>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>