<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/add_curiosidade.css">
    <title>Adicionar Curiosidade - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Nova Curiosidade</h1>
        <form class="form-template" action="" method="post" enctype="multipart/form-data">
            Escolha uma imagem
            <label id="thumbnail">
                <input type="file" />
                <img src="./images/camera.png" alt="Select img" />
            </label>
        </form>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>