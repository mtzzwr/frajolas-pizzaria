<?php

session_start();

if ((!isset($_SESSION['login']) == true)) {
    unset($_SESSION['login']);
    header('location:../index.php');
}

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$logado = null;

$logado = $_SESSION['login'];

$id_nivel = $_SESSION['idNivel'];

$status = $_SESSION['status_usuario'];

if ($_SESSION['idNivel'] != 0) {

    $sql = "SELECT * FROM tbl_nivel WHERE id_nivel = " . $id_nivel;

    $select = mysqli_query($conexao, $sql);
    $rs = mysqli_fetch_array($select);

    $conteudo = $rs['adm_conteudo'];
    $faleConosco = $rs['adm_fale_conosco'];
    $usuario = $rs['adm_usuario'];
    $produto = $rs['adm_produto'];

    if ($conteudo != 1) echo '<style>#adm-conteudo {pointer-events: none; opacity: 0.3;}; </style>';

    if ($faleConosco != 1) echo '<style>#adm-fale-conosco {pointer-events: none; opacity: 0.3;}; </style>';

    if ($usuario != 1) echo '<style>#adm-usuario {pointer-events: none; opacity: 0.3;}; </style>';

    if ($produto != 1) echo '<style>#adm-produto {pointer-events: none; opacity: 0.3;}; </style>';
}


?>

<header>
    <div class="titulo-cms">
        <span>CMS - Sistema de Gerenciamento do Site</span>
    </div>
    <div class="img-cms background-css">
        <a href="home.php"><img src="./images/cms-logo.png" alt=""></a>
    </div>
</header>
<section class="menu-cms">
    <div id="adm-produto" class="opcao-conteudo">
        <a href="adm_produto.php"><img src="./images/produto-128.png" alt="Produtos"></a>
        <p>Administração de produtos</p>
    </div>
    <div id="adm-conteudo" class="opcao-conteudo">
        <a href="adm_conteudo.php"><img src="./images/conteudo-128.png" alt="Conteúdo"></a>
        <p>Administração de conteúdo</p>
    </div>
    <div id="adm-fale-conosco" class="opcao-conteudo">
        <a href="adm_fale_conosco.php"><img src="./images/contato-128.png" alt="Fale conosco"></a>
        <p>Administração Fale conosco</p>
    </div>
    <div id="adm-usuario" class="opcao-conteudo">
        <a href="adm_usuario.php"><img src="./images/user-128.png" alt="Usuários"></a>
        <p>Administração de usuários</p>
    </div>
    <div class="area-user">
        <img src="./images/icon-login.png" alt="">
        <div class="login-user">
            <p>Bem vindo(a), <span><?= $logado ?></span></p>
        </div>
        <div class="logout-user">
            <form action="./logout.php" method="post">
                <input onclick="return confirm('Deseja realmente sair do sistema?');" id="btn-logout" type="submit" name="btn-logout" value="Logout">
            </form>
        </div>
    </div>
</section>
<hr>