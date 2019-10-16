<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/promocoes.css">
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
    <section class="container" id="container-promocoes">
        <div class="opacity-banner" id="opacity-sobre">
            <div class="info-banner">
                <img src="./images/pizzaa.png" alt="">
                <h1>Promoções</h1>
                <span>Confira abaixo as nossas promoções</span>
            </div>
        </div>
        <div class="banner-produto-mes">

        </div>
        <div class="titulo-promocao">
            <h1>Pizzas</h1>
        </div>
        <div class="container-produtos-promocoes">
            <div class="card-produto">
                <div class="img-produto">
                    <img src="./images/pizza-img.jpg" alt="Pizza">
                </div>
                <div class="nome-produto">
                    Pizza
                </div>
                <div class="descricao-produto">
                    Pizza aleatória Pizza aleatória
                </div>
                <div class="preco-antigo">
                    <small>R$ 32,00</small>
                </div>
                <div class="preco-produto">
                    R$ 30,00
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
                    Pizza aleatória Pizza aleatória
                </div>
                <div class="preco-antigo">
                    <small>R$ 32,00</small>
                </div>
                <div class="preco-produto">
                    R$ 30,00
                </div>
                <div class="btn-detalhes">
                    <a href="#">Detalhes</a>
                </div>
            </div>
            <div class="card-produto">
                <div class="img-produto">
                    <img src="./images/pizza-promo.jpg" alt="Pizza">
                </div>
                <div class="nome-produto">
                    Pizza
                </div>
                <div class="descricao-produto">
                    Pizza aleatória Pizza aleatória
                </div>
                <div class="preco-antigo">
                    <small>R$ 32,00</small>
                </div>
                <div class="preco-produto">
                    R$ 30,00
                </div>
                <div class="btn-detalhes">
                    <a href="#">Detalhes</a>
                </div>
            </div>
        </div>
        <div class="titulo-promocao">
            <h1>Combos</h1>
        </div>
        <div class="container-produtos-promocoes">
            <div class="card-produto">
                <div class="img-produto">
                    <img src="./images/pizza-combo.jpg" alt="Pizza">
                </div>
                <div class="nome-produto">
                    Combo Pizza + Pepsi
                </div>
                <div class="descricao-produto">
                    Pizza aleatória Pizza aleatória
                </div>
                <div class="preco-antigo">
                    <small>R$ 45,00</small>
                </div>
                <div class="preco-produto">
                    R$ 40,00
                </div>
                <div class="btn-detalhes">
                    <a href="#">Detalhes</a>
                </div>
            </div>
            <div class="card-produto">
                <div class="img-produto">
                    <img src="./images/pizza-combo.jpg" alt="Pizza">
                </div>
                <div class="nome-produto">
                    Combo Pizza + Pepsi
                </div>
                <div class="descricao-produto">
                    Pizza aleatória Pizza aleatória
                </div>
                <div class="preco-antigo">
                    <small>R$ 45,00</small>
                </div>
                <div class="preco-produto">
                    R$ 40,00
                </div>
                <div class="btn-detalhes">
                    <a href="#">Detalhes</a>
                </div>
            </div>
            <div class="card-produto">
                <div class="img-produto">
                    <img src="./images/pizza-combo.jpg" alt="Pizza">
                </div>
                <div class="nome-produto">
                    Combo Pizza + Pepsi
                </div>
                <div class="descricao-produto">
                    Pizza aleatória Pizza aleatória
                </div>
                <div class="preco-antigo">
                    <small>R$ 45,00</small>
                </div>
                <div class="preco-produto">
                    R$ 40,00
                </div>
                <div class="btn-detalhes">
                    <a href="#">Detalhes</a>
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
</body>

</html>