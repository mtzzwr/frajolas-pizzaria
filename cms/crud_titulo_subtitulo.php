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
        $sql = "DELETE FROM tbl_diferenciais WHERE id_diferencial = " . $cod . "";

        if (mysqli_query($conexao, $sql)){ 
            unlink('./db/files/'.$foto);
            header('location:./adm_diferenciais.php');
        }
    }else if($modo == 'editar'){
        $sql = "SELECT * FROM tbl_diferenciais WHERE id_diferencial = ".$cod;

        $select = mysqli_query($conexao, $sql);



    }
}

if (isset($_POST['btn-cadastrar'])) {
    $titulo = $_POST['txt-nome'];
    $subtitulo = $_POST['txt-endereco'];
    $pagina = $_POST['select-pag'];
    $status = $_POST['status'];

    $sql = "insert into tbl_titulo_subtitulo values(null, '" . $titulo . "', '" . $subtitulo . "', '" . $pagina . "', " . $status . ")";

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
    <title>Adicionar Titulo e Subtitulo - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Titulo e subtitulo</h1>
        <div class="container-form">
            <form class="form-template" id="form-curiosidade" action="" method="post" enctype="multipart/form-data">
                <input type="text" name="txt-nome" id="" placeholder="Titulo da página"> <br>
                <input type="text" name="txt-endereco" id="" placeholder="Subtitulo da página"> <br>
                <select name="select-pag" id="">
                    <option value="curiosidade">Curiosidade</option>
                    <option value="lojas">Lojas</option>
                </select>
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