<?php

require_once('db/conexao.php');
$conexao = conexaoMysql();

session_start();

if (isset($_POST['btnEntrarCms'])) {
    require_once './cms/login.php';
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="shortcut icon" href="./images/pizzaa.png" type="image/x-icon">
    <script>
        $(document).ready(function() {
            $(".logo").on('click', function() {
                $(".menu-mobile").fadeIn(1000);
            })
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
                <ul class="sidemenu">
                    <li class="sidemenu-item">Menu</li>
                    <li class="sidemenu-item">Menu</li>
                    <li class="sidemenu-item">Menu</li>
                    <li class="sidemenu-item">Menu</li>
                    <li class="sidemenu-item">Menu</li>
                    <li class="sidemenu-item">Menu</li>
                    <li class="sidemenu-item">Menu</li>
                    <li class="sidemenu-item">Menu</li>
                </ul>
            </div>
            <div class="container-produtos">
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/slide01.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
                <div class="card-produto">
                    <div class="img-produto">
                        <img src="./images/pizza-img.jpg" alt="Pizza">
                    </div>
                    <div class="nome-produto">
                        Pizza
                    </div>
                    <div class="descricao-produto">
                        Pizza aleatória Pizza aleatória Pizza aleatória
                    </div>
                    <div class="preco-produto">
                        R$ 32,00
                    </div>
                    <div class="btn-detalhes">
                        <a href="#">Detalhes</a>
                    </div>
                </div>
            </div>
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

    <script src="./js/slider.js"></script>
</body>

</html>