<?php

require_once('db/conexao.php');
$conexao = conexaoMysql();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./cms/js/jquery-3.4.1.js"></script>
    <script src="./js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/contato.css">
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
        <form name="frmCMS" action="contato.php" method="post">
            <input type="text" name="txtUsuarioCms" placeholder="Usuário" required>
            <input type="password" name="txtUsuarioCms" placeholder="Senha" required>
            <input type="submit" value="Entrar" name="btnEntrarCms">
        </form>
    </header>
    <section class="container" id="container-contato">
        <div class="form-div">
            <div class="desc-contato">
                <h1>Fale conosco</h1>
                <hr>
                <h2>Nós vamos adorar conversar com você!</h2>
            </div>
            <form action="./db/inserirFormContato.php" method="post" name="form-contato" class="form-contato">
                <div class="input-nome">
                    Nome
                    <input class="borda-input" type="text" name="txt-nome" id="txt-nome" placeholder="Digite seu nome" required>
                </div>
                <div class="input-email">
                    Email
                    <input class="borda-input" type="text" name="txt-email" id="txt-email" placeholder="Ex: xxxx@xxxx.com" required>
                </div>
                <div class="input-celular">
                    Celular
                    <input class="borda-input" type="text" name="txt-celular" id="txt-celular" maxlength="11" placeholder="Ex: 11999999999" required>
                </div>
                <div class="input-telefone">
                    Telefone
                    <input class="borda-input" type="text" name="txt-telefone" id="txt-telefone" maxlength="10" placeholder="Ex: 1199999999">
                </div>
                <div class="input-homepage">
                    HomePage
                    <input class="borda-input" type="text" name="txt-homepage" id="txt-homepage" placeholder="Ex: Site pessoal">
                </div>
                <div class="input-facebook">
                    Facebook
                    <input class="borda-input" type="text" name="txt-facebook" id="txt-facebook" placeholder="Ex: Link do Facebook">
                </div>
                <div class="input-profissao">
                    Profissão
                    <input class="borda-input" type="text" name="txt-profissao" id="txt-profissao" placeholder="Ex: Desenvolvedor" required>
                </div>
                <div class="lbl-sexo">
                    <label>Sexo</label>
                </div>
                <div class="div-radio">
                    <input type="radio" name="sexo" value="f" checked>Feminino
                    <input type="radio" name="sexo" value="m">Masculino
                </div>
                <div class="select-msg">
                    <select name="select-tipo-msg">
                        <option value="sugestao">Sugestão</option>
                        <option value="critica">Critica</option>
                    </select>
                </div>
                <div class="text-area-msg">
                    <textarea class="borda-input" name="txt-mensagem" id="txt-mensagem" cols="30" rows="10" placeholder="Digite uma mensagem"></textarea>
                </div>
                <div class="btn-enviar">
                    <input name="btn-enviar" id="btn-enviar" type="submit" value="Enviar">
                </div>
            </form>
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
    <script src="./js/validarForm.js"></script>
</body>

</html>