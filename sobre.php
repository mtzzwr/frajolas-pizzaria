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
                <h1>Nossa História</h1>
                <p>
                    Silvio Santos Ipsum ma você, topa ou no topamm. Ma tem ou no tem o celular
                    do milhãouamm? O prêmio é em barras de ouro, que vale mais que dinheiroam.
                    Ha hai. Bem boladoam, bem boladoam. Bem gozadoam. O arriscam tuduam, valendo
                    um milhão de reaisuam. Um, dois três, quatro, PIM, entendeuam? Vem pra lá,
                    mah você vai pra cá. Agora vai, agora vem pra lamm. Mah roda a roduamm.
                </p>
            </div>
        </div>
        <hr>
        <div class="diferenciais">
            <div class="card-diferenciais">
                <a href="#"><img src="./images/startup.png" alt=""></a>
                <div class="title">
                    <h1>Processo</h1>
                </div>
                <div class="desc">
                    <p> Utilizamos fornos de alta performance, com capacidade para produzir uma pizza
                        a cada dois minutos, semelhante a ação calórica de um forno à lenha.
                        <p>
                </div>
            </div>
            <div class="card-diferenciais">
                <a href="#"><img src="./images/pizzaa.png" alt=""></a>
                <div class="title">
                    <h1>Pizzas</h1>
                </div>
                <div class="desc">
                    <p> Utilizamos fornos de alta performance, com capacidade para produzir uma pizza
                        a cada dois minutos, semelhante a ação calórica de um forno à lenha.
                        <p>
                </div>
            </div>
            <div class="card-diferenciais">
                <a href="#"><img src="./images/like.png" alt=""></a>
                <div class="title">
                    <h1>Aprovação</h1>
                </div>
                <div class="desc">
                    <p> Utilizamos fornos de alta performance, com capacidade para produzir uma pizza
                        a cada dois minutos, semelhante a ação calórica de um forno à lenha.
                        <p>
                </div>
            </div>
            <div class="card-diferenciais">
                <a href="#"><img src="./images/group.png" alt=""></a>
                <div class="title">
                    <h1>Estrutura</h1>
                </div>
                <div class="desc">
                    <p> Utilizamos fornos de alta performance, com capacidade para produzir uma pizza
                        a cada dois minutos, semelhante a ação calórica de um forno à lenha.
                        <p>
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