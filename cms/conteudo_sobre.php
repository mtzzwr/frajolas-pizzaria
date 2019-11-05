<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <title>Conteúdo - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Conteúdos da página Sobre</h1>
        <div class="row">
            <div class="tipo-controle column">
                <a href="adm_diferenciais.php"><img src="./images/adm-dif.png" alt="" width="140px" height="200px"></a>
                <span>Gerenciar diferenciais</span>
            </div>
            <!-- <div class="tipo-controle column">
                <a href="controle_niveis.php"><img src="./images/niveis.png" alt=""></a>
                <span>Niveis de acesso</span>
            </div> -->
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>