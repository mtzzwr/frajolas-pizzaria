<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/lojas.css">
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
    <section class="container" id="container-lojas">
        <div class="txt-lojas">
            <h2>Conheça as nossas lojas</h2>
            <span>Teremos um enorme prazer em recebe-los em uma de
                nossas unidades para uma deliciosa refeição. Atender
                nossos clientes é nossa maior satisfação.</span>
        </div>
        <hr>
        <div class="local-lojas">
            <div class="card-loja">
                <div class="img-loja">
                    <img src="./images/loja1.jpg" alt="">
                </div>
                <div class="nome-loja">
                    Pizzaria Campo Belo
                </div>
                <div class="endereco-loja">
                    R. Antônio de Macedo, 1770
                </div>
                <div class="tel-loja">
                    (11) 5094-1766
                    (11) 5096-3831
                </div>
                <div class="btn-mapa">
                    <a href="https://www.google.com/maps/place/R.+Ant%C3%B4nio+de+Macedo+Soares,+1770+-+Campo+Belo,+S%C3%A3o+Paulo+-+SP,+04607-003/@-23.6174182,-46.6725138,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5a0aa85cc3cd:0x5835856789d20afa!8m2!3d-23.6174182!4d-46.6703251">Clique para ver no mapa</a>
                </div>
            </div>
            <div class="card-loja">
                <div class="img-loja">
                    <img src="./images/loja2.jpg" alt="">
                </div>
                <div class="nome-loja">
                    Pizzaria Berrini
                </div>
                <div class="endereco-loja">
                    Av. Luis Carlos Berrini, 666
                </div>
                <div class="tel-loja">
                    (11) 5094-1766
                    (11) 5096-3831
                </div>
                <div class="btn-mapa">
                    <a href="https://www.google.com/maps/place/Av.+Engenheiro+Lu%C3%ADs+Carlos+Berrini,+666+-+Itaim+Bibi,+S%C3%A3o+Paulo+-+SP,+04533-085/@-23.6022329,-46.6941941,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5735c934cfbb:0x1c104064af0b9412!8m2!3d-23.6022329!4d-46.6920054">Clique para ver no mapa</a>
                </div>
            </div>
            <div class="card-loja">
                <div class="img-loja">
                    <img src="./images/loja3.jpg" alt="">
                </div>
                <div class="nome-loja">
                    Pizzaria Perdizes
                </div>
                <div class="endereco-loja">
                    R. João Ramalho, 1033
                </div>
                <div class="tel-loja">
                    (11) 5094-1766
                    (11) 5096-3831
                </div>
                <div class="btn-mapa">
                    <a href="https://www.google.com/maps?client=firefox-b-d&q=R.+Jo%C3%A3o+Ramalho,+1033&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjLgtS8qOnkAhUKLLkGHUSSAXgQ_AUIESgB">Clique para ver no mapa</a>
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