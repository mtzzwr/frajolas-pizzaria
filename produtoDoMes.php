<?php

require_once('db/conexao.php');
$conexao = conexaoMysql();

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/produtodomes.css">
    <title>Frajola's Pizzaria</title>
</head>

<body>
    <header id="header">
        <div class="logo">

        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="sobre.php">Sobre</a>
            <a href="curiosidades.php">Curiosidades</a>
            <a href="promocoes.php">Promoções</a>
            <a href="lojas.php">Lojas</a>
            <a href="produtoDoMes.php">Produto mês</a>
            <a href="contato.php">Contato</a>
        </nav>
        <form name="frmCMS" action="index.php" method="post">
            <input type="text" name="txtUsuarioCms" placeholder="Usuário" required>
            <input type="password" name="txtSenhaCms" placeholder="Senha" required>
            <input type="submit" value="Entrar" name="btnEntrarCms">
        </form>
    </header>
    <section class="container" id="container-produto-mes">
        <div class="opacity-banner">
            <div class="info-banner">
                <img src="./images/pizzaa.png" alt="">
                <h1>Produto do mês</h1>
                <span>Confira abaixo o nosso produto do mês</span>
            </div>
        </div>
        <div class="banner-produto-mes">

        </div>
        <div class="info-produto-mes">
            <div class="txt-produto-mes">
                <span>Todos os meses, preparamos para os nossos clientes, um produto a um preço especial.</span>
            </div>
            <?php

            $sql = "SELECT * FROM tbl_produtos WHERE status = 1 and produto_mes <> 0";
            $select = mysqli_query($conexao, $sql);

            while ($rs = mysqli_fetch_array($select)) {
                ?>

                <div class="img-produto-mes">
                    <img src="cms/db/files/<?= $rs['imagem_produto'] ?>" alt="Pizza do mês">
                </div>
                <div class="desc-produto-mes">
                    <h1><?= $rs['nome_produto'] ?></h1>
                    <span><?= $rs['desc_produto'] ?></span>
                    <p><?= $rs['valor'] ?></p>
                    <a class="btn-produto-mes" href="#">Ver detalhes</a>
                </div>

            <?php
            }

            ?>

        </div>
        <footer>
            <a class="btn-sistema" href="#">Sistema Interno</a>
            <div class="endereco">
                <p>Endereço: Avenida Luis Carlos Berrini, n° 666 - Berrini/SP</p>
            </div>
            <div class="download-app">
                <a href="#"><img src="./images/download-btn.png" alt="Baixe nosso aplicativo" title="Baixe nosso aplicativo"></a>
            </div>
        </footer>
    </section>
</body>

</html>