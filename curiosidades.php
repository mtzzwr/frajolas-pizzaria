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
    <link rel="stylesheet" href="./css/curiosidades.css">
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
        <form name="frmCMS" action="curiosidades.php" method="post">
            <input type="text" name="txtUsuario" placeholder="Usuário" required>
            <input type="password" name="txtSenha" placeholder="Senha" required>
            <input type="submit" value="Entrar" name="btnEntrar">
        </form>
    </header>
    <section class="container" id="container-curiosidades">
        <div class="txt-curiosidade">
            <?php

            $sql = "select * from tbl_titulo_subtitulo where pagina = 'curiosidade' and status <> 0";

            $select = mysqli_query($conexao, $sql);

            while ($rs = mysqli_fetch_array($select)) {

                ?>

                <h2><?= $rs['titulo'] ?></h2>
                <span><?= $rs['subtitulo'] ?></span>

            <?php
            }

            ?>
        </div>
        <hr>
        <?php

        $sql = "select * from tbl_curiosidade where status <> 0";

        $select = mysqli_query($conexao, $sql);

        while ($rs = mysqli_fetch_array($select)) {
            ?>

            <div id="pizza-chiclete" class="produto-curiosidade">
                <div class="img-produto-curiosidade">
                    <img src="cms\db\files\<?= $rs['imagem_curiosidade'] ?>" alt="" width="800px" height="430px">
                </div>
                <div class="txt-produto-curiosidade">
                    <article>
                        <h2><?= $rs['titulo_curiosidade'] ?></h2>
                        <?= $rs['desc_curiosidade'] ?>
                    </article>
                </div>
            </div>

        <?php
        }

        ?>
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