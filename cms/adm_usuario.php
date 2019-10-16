<?php 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/adm_usuario.css">
    <title>CMS - Usuários</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal row">
        <h1>Controle de usuários e niveís de acesso</h1>
        <div class="row">
            <div class="tipo-controle column">
                <a href="controle_usuario.php"><img src="./images/user-info.png" alt=""></a>
                <span>Usuários</span>
            </div>
            <div class="tipo-controle column">
                <a href="controle_niveis.php"><img src="./images/niveis.png" alt=""></a>
                <span>Niveis de acesso</span>
            </div>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>