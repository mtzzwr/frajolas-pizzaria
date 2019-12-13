<?php

require_once('./db/conexao.php');
$conexao = conexaoMysql();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/sobre.css">
    <link rel="shortcut icon" href="./images/pizzaa.png" type="image/x-icon">
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
    <section class="container" id="container-sobre">
        <div class="opacity-banner">
            <div class="info-banner">
                <img src="./images/pizzaa.png" alt="">
                <h1>A Frajola's</h1>
                <span>Conheça um pouco sobre a pizzaria</span>
            </div>
        </div>
        <div class="banner-produto-mes" id="banner-sobre">

        </div>
        <div class="historia">
            <div class="txt-historia">
                <?php

                $sql = "SELECT * FROM tbl_historia WHERE status <> 0";

                $select = mysqli_query($conexao, $sql);

                while ($rs = mysqli_fetch_array($select)) {

                    ?>

                    <h1><?= $rs['titulo_historia'] ?></h1>
                    <p>
                        <?= $rs['desc_historia'] ?>
                    </p>

                <?php
                }

                ?>
            </div>
        </div>
        <hr>
        <div class="diferenciais">
            <?php

            $sql = "SELECT * FROM tbl_diferenciais WHERE status <> 0";

            $select = mysqli_query($conexao, $sql);

            while ($rs = mysqli_fetch_array($select)) {
                ?>

                <div class="card-diferenciais">
                    <a href="#"><img src="cms\db\files\<?= $rs['imagem_diferencial'] ?>" alt="" width="80px" height="80px"></a>
                    <div class="title">
                        <h1><?= $rs['titulo_diferencial'] ?></h1>
                    </div>
                    <div class="desc">
                        <p><?= $rs['desc_diferencial'] ?><p>
                    </div>
                </div>

            <?php
            }

            ?>
        </div>
        <footer>
            <div>

            </div>
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