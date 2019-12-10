<?php

require_once('db/conexao.php');
$conexao = conexaoMysql();

session_start();

$sql = null;

if (isset($_POST['btnEntrarCms'])) {
    require_once './cms/login.php';
}

if(isset($_GET['subcategoria'])){
    $id_sub = $_GET['subcategoria'];
    $sql = "SELECT * FROM tbl_produtos WHERE id_subcategoria = ".$id_sub." and status = 1";
}else{
    $sql = "SELECT * FROM tbl_produtos WHERE status = 1 ORDER BY rand()";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./cms/js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="shortcut icon" href="./images/pizzaa.png" type="image/x-icon">
    <script>
        $(document).ready(function() {
            $(".logo").on('click', function() {
                $(".menu-mobile").fadeIn(1000);
            });

            $('.sub-menu ul').hide();
            $(".sub-menu a").click(function() {
                $(this).parent(".sub-menu").children("ul").slideToggle("100");
                $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
            });
        });
    </script>
    <title>Frajola's Pizzaria</title>
</head>

<body>
    <div class="menu-mobile">

    </div>
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
        <form name="frmCMS" action="" method="post">
            <input type="text" name="txtUsuarioCms" placeholder="Usuário" required>
            <input type="password" name="txtSenhaCms" placeholder="Senha" required>
            <input type="submit" value="Entrar" name="btnEntrarCms">
        </form>
    </header>
    <aside class="redes-sociais">
        <div class="icon-bar">
            <a href="https://www.facebook.com/" class="facebook"><img src="./images/facebook.png" alt="Facebook"></a>
            <a href="https://www.twitter.com/" class="twitter"><img src="./images/twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/" class="insta"><img src="./images/instagram.png" alt="Instagram"></a>
        </div>
    </aside>
    <section class="container" id="container-home">
        <div class="slide-container">
            <div class="slider" id="slider1">
                <div>
                    <span class="titleBar">
                        <span>Frajola's Pizzaria</span>
                        <span>Bem vindo!</span>
                    </span>
                    <img src="./images/slide02.jpg" alt="Pizza da casa" title="Pizza da casa">
                </div>
                <div>
                    <span class="titleBar">
                        <span>As melhores pizzas!</span>
                        <span>É só na Frajola's!</span>
                    </span>
                    <img src="./images/slide02.jpg" alt="Pizza da casa" title="Pizza da casa">
                </div>
                <div>
                    <span class="titleBar">
                        <span>Confira as nossas promoções</span>
                        <span>Frajola's Pizzaria</span>
                    </span>
                    <img src="./images/slide01.jpg" alt="Pizza da casa" title="Pizza da casa">
                </div>
                <i class="left arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
                    </svg></i>
                <i class="right arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
                    </svg></i>
            </div>
        </div>
        <div class="container-principal">
            <div class="sidenav">

                <nav class='vertical animated bounceInDown'>
                    <ul>
                        <?php

                        $sql_cat = 'SELECT * FROM tbl_categoria WHERE status <> 0';

                        $select = mysqli_query($conexao, $sql_cat);

                        while ($rs = mysqli_fetch_array($select)) {

                            ?>

                            <li class='sub-menu'><a href='#settings'><?= $rs['nome_categoria'] ?></a>
                                <ul>
                                    <?php

                                        $sql_sub = 'SELECT * FROM tbl_subcategoria WHERE  status <> 0 and id_categoria = '.$rs['id_categoria'];

                                        $select_sub = mysqli_query($conexao, $sql_sub);

                                        while ($rs_sub = mysqli_fetch_array($select_sub)) {
                                            ?>

                                        <li><a href='index.php?subcategoria=<?= $rs_sub['id_subcategoria']; ?>'><?=$rs_sub['nome_subcategoria']?></a></li>

                                    <?php } ?>
                                </ul>
                            </li>

                        <?php
                        }

                        ?>
            </div>
            <div class="container-produtos">
                <?php
                $select = mysqli_query($conexao, $sql);

                while ($rs = mysqli_fetch_array($select)) {
                    ?>

                    <div class="card-produto">
                        <div class="img-produto">
                            <img src="./images/slide01.jpg" alt="Pizza">
                        </div>
                        <div class="nome-produto">
                            <?= $rs['nome_produto'] ?>
                        </div>
                        <div class="descricao-produto">
                            <?= $rs['desc_produto'] ?>
                        </div>
                        <div class="preco-produto">
                            R$<?= $rs['valor'] ?>
                        </div>
                        <div class="btn-detalhes">
                            <a href="#">Detalhes</a>
                        </div>
                    </div>

                <?php
                }

                ?>
            </div>
        </div>
        </div>
        <footer>
            <a class="btn-sistema" href="./mvc/index.php">Sistema Interno</a>
            <div class="endereco">
                <p>Endereço: Avenida Luis Carlos Berrini, n° 666 - Berrini/SP</p>
            </div>
            <div class="download-app">
                <a href="#"><img src="./images/download-btn.png" alt="Baixe nosso aplicativo" title="Baixe nosso aplicativo"></a>
            </div>
        </footer>
    </section>

    <script src="./js/slider.js"></script>
</body>

</html>