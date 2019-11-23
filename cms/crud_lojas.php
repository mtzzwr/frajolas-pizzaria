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

$nome = null;
$endereco = null;
$imagem = null;
$telefone = null;

$btn = 'Cadastrar';

if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_loja WHERE id_loja = " . $cod . "";

        if (mysqli_query($conexao, $sql)){ 
            unlink('./db/files/'.$foto);
            header('location:./conteudo_lojas.php');
        }
    }else if($modo == 'editar'){

        $btn = 'Editar';

        $sql = "SELECT * FROM tbl_loja WHERE id_loja = ".$cod;

        $select = mysqli_query($conexao, $sql);

        if ($rs = mysqli_fetch_array($select)) {
            $imagem = $rs['imagem_loja'];
            $nome = $rs['nome_loja'];
            $endereco = $rs['endereco_loja'];
            $telefone = $rs['telefone_loja'];
            $status = $rs['status'];
        }

        ($status == 1) ? $chkOn = "checked" : $chkOff = "checked";

    }
}

if (isset($_POST['btn-cadastrar'])) {
    require_once './db/upload_imagem.php';

    $nome = $_POST['txt-nome'];
    $endereco = $_POST['txt-endereco'];
    $telefone = $_POST['txt-telefone'];
    $status = $_POST['status'];

    $file_name = $_FILES['foto'];
    $imagem = uploadImagem($file_name);

    if($modo == 'editar'){

        $sql = "update tbl_loja set nome_loja = '".$nome."', endereco_loja = '".$endereco."', telefone_loja = '".$telefone."', 
        status = '".$status."' where id_loja = ".$cod;

        if($imagem != ''){
            unlink('./db/files/'.$foto);
            $sql = "update tbl_loja set imagem_loja = '".$imagem."', nome_loja = '".$nome."', endereco_loja = '".$endereco."', telefone_loja = '".$telefone."', 
            status = '".$status."' where id_loja = ".$cod;
        }
    }else{
        if($imagem != ''){
            $sql = "insert into tbl_loja values(null, '" . $imagem . "', '" . $nome . "', '" . $endereco . "', 
            '" . $telefone . "', " . $status . ")";
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
    <title>Adicionar Loja - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Novo card - Lojas</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post" enctype="multipart/form-data">
                <label id="thumbnail">
                    <input type="file" name="foto" onchange="loadFile(event)">
                    <img src="db/files/<?= $imagem ?>" id="output">
                    <img src="./images/camera.png" alt="Select img" />
                </label>
                <input type="text" name="txt-nome" id="" value="<?=$nome ?>" placeholder="Nome da loja"> <br>
                <input type="text" name="txt-endereco" id="" value="<?=$endereco ?>" placeholder="Endereço da loja"> <br>
                <input type="text" name="txt-telefone" id="" value="<?=$telefone ?>" placeholder="Telefone da loja"> <br>
                <div class="rg-sexo">
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