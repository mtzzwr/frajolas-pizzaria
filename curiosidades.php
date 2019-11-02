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
            <h2>Curiosidades sobre nossos produtos</h2>
            <span>Texto aleatório Texto aleatório Texto aleatório Texto aleatório</span>
        </div>
        <hr>
        <div id="pizza-sushi" class="produto-curiosidade">
            <div class="img-produto-curiosidade">
                <img src="./images/sushi-pizza.jpg" alt="">
            </div>
            <div class="txt-produto-curiosidade">
                <article>
                    <h2>Pizza de Sushi</h2>
                    Silvio Santos Ipsum ma o Silvio Santos Ipsum é muitoam interesanteam.
                    Com ele ma você vai gerar textuans ha haae. Ha hai. Bem boladoam, bem boladoam.
                    Bem gozadoam. Ma vale dérreaisam? Você veio da caravana de ondeammm? No duro?
                    É bom ou não é? É dinheiro ou não é? No duro? É por sua conta e riscoamm?
                </article>
            </div>
        </div>
        <div id="pizza-cone" class="produto-curiosidade">
            <div class="txt-produto-curiosidade">
                <article>
                    <h2>Pizza Cone</h2>
                    Silvio Santos Ipsum ma o Silvio Santos Ipsum é muitoam interesanteam.
                    Com ele ma você vai gerar textuans ha haae. Ha hai. Bem boladoam, bem boladoam.
                    Bem gozadoam. Ma vale dérreaisam? Você veio da caravana de ondeammm? No duro?
                    É bom ou não é? É dinheiro ou não é? No duro? É por sua conta e riscoamm?
                </article>
            </div>
            <div class="img-produto-curiosidade">
                <img src="./images/pizza-cone.jpg" alt="">
            </div>
        </div>
        <div id="pizza-chiclete" class="produto-curiosidade">
            <div class="img-produto-curiosidade">
                <img src="./images/pizza-chiclete.jpg" alt="">
            </div>
            <div class="txt-produto-curiosidade">
                <article>
                    <h2>Pizza de Chiclete</h2>
                    Silvio Santos Ipsum ma o Silvio Santos Ipsum é muitoam interesanteam.
                    Com ele ma você vai gerar textuans ha haae. Ha hai. Bem boladoam, bem boladoam.
                    Bem gozadoam. Ma vale dérreaisam? Você veio da caravana de ondeammm? No duro?
                    É bom ou não é? É dinheiro ou não é? No duro? É por sua conta e riscoamm?
                </article>
            </div>
        </div>
        <?php

        $sql = "select * from tbl_curiosidade";

        $select = mysqli_query($conexao, $sql);

        while ($rs = mysqli_fetch_array($select)) {
            ?>

            <div id="pizza-chiclete" class="produto-curiosidade">
                <div class="img-produto-curiosidade">
                    <img src="cms\db\files\<?=$rs['imagem_curiosidade']?>" alt="" width="600px" height="350px">
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