<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$btn = 'Cadastrar';

$chkFem = null;
$chkMasc = null;

$nome = null;
$cpf = null;
$rg = null;
$email = null;
$celular = null;
$telefone = null;
$sexo = null;
$usuario = (string) null;
$senha = null;
$nivel = null;
$status = null;

$chkOn = null;
$chkOff = null;

$cod = 0;
$modo = null;

$cod = @$_GET['codigo'];
$modo = @$_GET['modo']; 

if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_usuario WHERE id_usuario = " . $cod . "";

        if (mysqli_query($conexao, $sql))  header('location:./controle_usuario.php');
        else echo 'erro ao excluir';

    } else if ($modo == 'editar') {
        $btn = 'Editar';

        $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = " . $cod . "";

        $select = mysqli_query($conexao, $sql);

        if ($rs = mysqli_fetch_array($select)) {

            $nome = $rs['nome'];
            $cpf = $rs['cpf'];
            $rg = $rs['rg'];
            $email = $rs['email'];
            $celular = $rs['celular'];
            $telefone = $rs['telefone'];
            $sexo = $rs['sexo'];
            $usuario = $rs['usuario'];
            $senha = $rs['senha'];
            $nivel = $rs['id_nivel'];
            $status = $rs['status'];
        }

        ($sexo == 'f') ? $chkFem = "checked" : $chkMasc = "checked";

        ($status == 1) ? $chkOn = "checked" : $chkOff = "checked";
    }
}

if (isset($_POST['btn-cadastrar'])) {
    if (isset($modo)) {
        if ($modo == 'editar') {
            $nome = $_POST['txt-nome'];
            $cpf = $_POST['txt-cpf'];
            $rg = $_POST['txt-rg'];
            $email = $_POST['txt-email'];
            $celular = $_POST['txt-celular'];
            $telefone = $_POST['txt-telefone'];
            $sexo = $_POST['sexo'];
            $usuario = $_POST['txt-usuario'];
            $senha = $_POST['txt-senha'];
            $nivel = $_POST['nivel'];
            $status = $_POST['status'];

            $cpf = preg_replace("/\D+/", "", $cpf);
            $rg = preg_replace("/\D+/", "", $rg);
            $celular = preg_replace("/\D+/", "", $celular);
            $telefone = preg_replace("/\D+/", "", $telefone);

            ($status == 1) ? $chkOn = "checked" : $chkOff = "checked";

            $sqlUpdate = "UPDATE tbl_usuario SET nome = '" . $nome . "', cpf = '" . $cpf . "', rg = '" . $rg . "', email = '" . $email . "', celular = '" . $celular . "', telefone = '" . $telefone . "', 
            sexo = '" . $sexo . "', usuario = '" . $usuario . "', senha = '" . $senha . "', id_nivel = " . $nivel . ", status = " . $status . " where id_usuario = " . $cod . "";
            
            if (mysqli_query($conexao, $sqlUpdate)) {
                header('location:./controle_usuario.php');
            } else {
                echo 'não funfou';
            }
        }
    } else {
        $nome = $_POST['txt-nome'];
        $cpf = $_POST['txt-cpf'];
        $rg = $_POST['txt-rg'];
        $email = $_POST['txt-email'];
        $celular = $_POST['txt-celular'];
        $telefone = $_POST['txt-telefone'];
        $sexo = $_POST['sexo'];
        $usuario = $_POST['txt-usuario'];
        $senha = $_POST['txt-senha'];
        $nivel = $_POST['nivel'];
        $status = $_POST['status'];

        $cpf = preg_replace("/\D+/", "", $cpf);
        $rg = preg_replace("/\D+/", "", $rg);
        $celular = preg_replace("/\D+/", "", $celular);
        $telefone = preg_replace("/\D+/", "", $telefone);

        ($status == 1) ? $chkOn = "checked" : $chkOff = "checked";

        $sql = "INSERT INTO tbl_usuario (nome, cpf, rg, email, celular, telefone, sexo, 
        usuario, senha, id_nivel, status) VALUES('" . $nome . "', '" . $cpf . "', '" . $rg . "', '" . $email . "', '" . $celular . "', 
        '" . $telefone . "', '" . $sexo . "', '" . $usuario . "', '" . $senha . "', " . $nivel . ", " . $status . ");";

        echo $sql;

        if ($nome == "" || $cpf == "" || $email == "" || $celular == "" || $sexo == "" || $usuario == "" || $senha == "" || $nivel == null) {
            echo 'erro ao inserir';
        } else {
            if (mysqli_query($conexao, $sql)) {
                echo 'usuário criado';
                header('location:./controle_usuario.php');
            } else {
                echo 'erro';
            }
        }
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
    <title>Adicionar Usuário</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1><?= $btn ?> Usuário</h1>
        <div class="container-form">
            <form class="form-template" action="" name="frm-cadastro-usuario" method="post">
                <input required type="text" name="txt-nome" value="<?php echo $nome; ?>" id="txt-nome" placeholder="Nome">
                <input required type="text" name="txt-cpf" value="<?php echo $cpf; ?>" id="txt-cpf" placeholder="CPF">
                <input type="text" name="txt-rg" value="<?php echo $rg; ?>" id="txt-rg" placeholder="RG">
                <input required type="text" name="txt-email" value="<?php echo $email; ?>" id="" placeholder="Email">
                <input required type="text" name="txt-celular" value="<?php echo $celular; ?>" id="txt-celular" placeholder="Celular">
                <input type="text" name="txt-telefone" value="<?php echo $telefone; ?>" id="txt-telefone" placeholder="Telefone">
                <div class="rg-sexo">
                    <input type="radio" name="sexo" <?= $chkFem ?> value="f" id="" checked>Feminino
                    <input type="radio" name="sexo" <?= $chkMasc ?> value="m" id="">Masculino
                </div>
                <input required type="text" name="txt-usuario" value="<?php echo $usuario; ?>" id="" placeholder="Usuario">
                <input required type="password" name="txt-senha" value="<?php echo $senha; ?>" id="" placeholder="Senha">
                <select name="nivel" id="">
                    <?php

                    $sql = "select * from tbl_nivel where id_nivel > 1";

                    $select_all = mysqli_query($conexao, $sql);


                    while ($rs = mysqli_fetch_array($select_all)) {

                        if ($rs['status'] == 1) {

                            ?>
                            <option value="<?= $rs['id_nivel'] ?>" <?= ($nivel == $rs['id_nivel']) ? 'selected' : '' ?>><?php echo $rs['nome_nivel']; ?></option>


                        <?php } ?>
                    <?php } ?>
                    ?>
                </select>
                <div class="rg-sexo">
                    <input type="radio" name="status" <?= $chkOn ?> value="1" id="" checked>Online
                    <input type="radio" name="status" <?= $chkOff ?> value="0" id="">Offline
                </div>
                <input type="submit" name="btn-cadastrar" id="" value="<?= $btn ?>">
            </form>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>