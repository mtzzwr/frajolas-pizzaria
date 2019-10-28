<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$cod = null;
$modo = null;

$cod = @$_GET['codigo'];
$modo = @$_GET['modo'];

$btn = 'Cadastrar';

$nome = null;
$desc = null;
$chkConteudo = null;
$chkFaleConosco = null;
$chkUsuario = null;
$status = null;

$conteudoChk = null;
$faleConoscoChk = null;
$usuarioChk = null;

$chkOn = null;
$chkOff = null;

if (isset($modo)) {
    if ($modo == 'editar') {
        $btn = 'Editar';

        $sql = "SELECT * FROM tbl_nivel WHERE id_nivel = " . $cod;

        $select = mysqli_query($conexao, $sql);

        if ($rs = mysqli_fetch_array($select)) {
            $nome = $rs['nome_nivel'];
            $desc = $rs['descricao_nivel'];
            $chkConteudo = $rs['adm_conteudo'];
            $chkFaleConosco = $rs['adm_fale_conosco'];
            $chkUsuario = $rs['adm_usuario'];
            $status = $rs['status'];
        }

        if ($chkConteudo == 1) {
            $conteudoChk = "checked";
        } else if ($chkConteudo == 0) {
            $conteudoChk = "";
        }

        if ($chkFaleConosco == 1) {
            $faleConoscoChk = "checked";
        } else if ($chkFaleConosco == 0) {
            $faleConoscoChk = "";
        }

        if ($chkUsuario == 1) {
            $usuarioChk = "checked";
        } else if ($chkUsuario == 0) {
            $usuarioChk = "";
        }

        if ($status == 1) {
            $chkOn = "checked";
        } else if ($status == 0) {
            $chkOff = "checked";
        }
    }
}

if (isset($_POST['btn-cadastrar'])) {
    if (isset($modo)) {
        if ($modo == 'editar') {
            $nome = $_POST['txt-nome'];
            $desc = $_POST['txt-desc'];
            $chkConteudo = $_POST['chk-conteudo'];
            $chkFaleConosco = $_POST['chk-fale-conosco'];
            $chkUsuario = $_POST['chk-usuario'];
            $status = $_POST['status'];

            if ($status == '1') {
                $status = 1;
            } else if ($status == '0') {
                $status = 0;
            }
    
            if ($chkConteudo == '1') {
                $chkConteudo = 1;
            } else if ($chkConteudo == '') {
                $chkConteudo = 0;
            }
    
            if ($chkFaleConosco == '1') {
                $chkFaleConosco = 1;
            } else if ($chkFaleConosco == '') {
                $chkFaleConosco = 0;
            }
    
            if ($chkUsuario == '1') {
                $chkUsuario = 1;
            } else if ($chkUsuario == '') {
                $chkUsuario = 0;
            }

            if($chkConteudo == 0 and $chkFaleConosco == 0 and $chkUsuario == 0) echo 'Selecione pelo menos uma permissão';

            $sql = "UPDATE tbl_nivel SET nome_nivel = '".$nome."', descricao_nivel = '".$desc."', adm_conteudo = ".$chkConteudo.", 
            adm_fale_conosco = ".$chkFaleConosco.", adm_usuario = ".$chkUsuario.", status = ".$status." WHERE id_nivel = ".$cod;

            if(mysqli_query($conexao, $sql)){
                header('location:./controle_niveis.php');
            }else{
                echo $sql;
            }
        }
    } else {
        $nome = $_POST['txt-nome'];
        $desc = $_POST['txt-desc'];
        $chkConteudo = $_POST['chk-conteudo'];
        $chkFaleConosco = $_POST['chk-fale-conosco'];
        $chkUsuario = $_POST['chk-usuario'];
        $status = $_POST['status'];

        if ($status == '1') {
            $status = 1;
        } else if ($status == '0') {
            $status = 0;
        }

        if ($chkConteudo == '1') {
            $chkConteudo = 1;
        } else if ($chkConteudo == '') {
            $chkConteudo = 0;
        }

        if ($chkFaleConosco == '1') {
            $chkFaleConosco = 1;
        } else if ($chkFaleConosco == '') {
            $chkFaleConosco = 0;
        }

        if ($chkUsuario == '1') {
            $chkUsuario = 1;
        } else if ($chkUsuario == '') {
            $chkUsuario = 0;
        }

        if($chkConteudo == 0 and $chkFaleConosco == 0 and $chkUsuario == 0) echo 'Selecione pelo menos uma permissão';

        $sql = "INSERT INTO tbl_nivel VALUES (null, '" . $nome . "', '" . $desc . "', " . $chkConteudo . ", " . $chkFaleConosco . ", " . $chkUsuario . ", " . $status . ")";

        if (mysqli_query($conexao, $sql)) header('location:./controle_niveis.php');
        else echo $sql;
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
    <link rel="stylesheet" href="./css/adm_usuario.css">
    <script src="./js/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="../js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
    <script src="./js/validacao.js"></script>
    <title>Adicionar novo nivel</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Cadastrar novo nivel</h1>
        <div class="container-form">
            <form class="form-template" action="" method="post">
                <input type="text" name="txt-nome" id="" value="<?= $nome ?>" placeholder="Nome do nivel">
                <textarea name="txt-desc" id="" cols="30" rows="10" placeholder="Descrição do nivel"><?= $desc ?></textarea>
                <div class="rg-sexo">
                    Selecione as permissões <br>
                    <input type="checkbox" id="chk-conteudo" name="chk-conteudo" <?= $conteudoChk ?> value="1" id="">Conteúdo
                    <input type="checkbox" id="chk-fale-conosco" name="chk-fale-conosco" <?= $faleConoscoChk ?> value="1" id="">Fale conosco
                    <input type="checkbox" id="chk-usuario" name="chk-usuario" <?= $usuarioChk ?> value="1" id="">Usuário
                </div>
                <div class="rg-sexo">
                    <input type="radio" name="status" <?= $chkOn ?> value="1" id="">Online
                    <input type="radio" name="status" <?= $chkOff ?> value="0" id="">Offline
                </div>
                <input type="submit" id="btn-cadastrar" name="btn-cadastrar" value="<?= $btn ?>">
            </form>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>