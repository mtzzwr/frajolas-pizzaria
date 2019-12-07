<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();


if (isset($_POST['btn-cadastrar'])) {
    require_once './db/upload_imagem.php';

    $nome = $_POST['txt-nome'];
    $desc = $_POST['txt-desc'];
    $valor = $_POST['txt-valor'];
    $desconto = $_POST['txt-desconto'];
    $subcat = $_POST['select-sub'];
    $prod_mes = $_POST['prod-mes'];
    $status = $_POST['status'];

    if($desconto == '') $desconto = 0;

    $file_name = $_FILES['foto'];
    $imagem = uploadImagem($file_name);

    if($imagem != ''){
        $sql = "INSERT INTO tbl_produtos VALUES (null, '".$imagem."', '".$nome."', '".$desc."', ".$valor.", 
        ".$desconto.", ".$subcat.", ".$prod_mes.", ".$status.")";
    }else{
        echo 'erro, escolha uma imagem para prosseguir';
    }

    if (mysqli_query($conexao, $sql)) {
        header('location:./adm_produto.php');
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
        <h1>Novo Produto</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post" enctype="multipart/form-data">
                <label id="thumbnail">
                    <input type="file" name="foto" onchange="loadFile(event)">
                    <img src="db/files/<?= $imagem ?>" id="output">
                    <img src="./images/camera.png" alt="Select img" />
                </label>
                <input type="text" value="" name="txt-nome" id="" placeholder="Nome do produto"> <br>
                <textarea name="txt-desc" placeholder="Descrição do produto" id="" cols="30" rows="10"></textarea>
                <input type="text" value="" name="txt-valor" id="" placeholder="Valor do produto"> <br>
                <input type="text" value="" name="txt-desconto" id="" placeholder="Porcentagem de desconto"> <br>
                <select name="select-sub" id="">
                    <?php

                    $sql = 'SELECT * FROM tbl_subcategoria WHERE status <> 0';

                    $select = mysqli_query($conexao, $sql);

                    while ($rs = mysqli_fetch_array($select)) {
                        ?>

                        <option value="<?= $rs['id_subcategoria']?>"><?= $rs['nome_subcategoria'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <div class="rg-sexo">
                    Definir como produto do mês <br>
                    <input type="radio" name="prod-mes" value="1" id="" checked>Sim
                    <input type="radio" name="prod-mes" value="0" id="">Não
                </div>
                <div class="rg-sexo">
                    Status <br>
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