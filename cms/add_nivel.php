<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/adm_usuario.css">
    <title>Adicionar novo nivel</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Cadastrar novo nivel</h1>
        <div class="container-form">
            <form class="form-template" action="" method="post">
                <input type="text" name="txt-nome" id="" placeholder="Nome do nivel">
                <textarea name="" id="" cols="30" rows="10" placeholder="Descrição do nivel"></textarea>
                <div class="rg-sexo">
                    <input type="radio" name="permissao" id="">Conteúdo
                    <input type="radio" name="permissao" id="">Fale conosco
                </div>
            </form>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>