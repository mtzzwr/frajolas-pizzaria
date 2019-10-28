<?php

require_once('../db/conexao.php');
$conexao = conexaoMysql();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/adm_conteudo.css">
    <title>Conteúdo - CMS</title>
</head>

<body>
    <?php include_once './include/header.php';
        $id_nivel = $_SESSION['idNivel'];

        $sql = "SELECT * FROM tbl_nivel WHERE id_nivel = " . $id_nivel;

        $select = mysqli_query($conexao, $sql);
        $rs = mysqli_fetch_array($select);

        $conteudo = $rs['adm_conteudo'];

        if ($conteudo != 1) echo '<script>alert("Sem permissão"); window.history.go(-1)</script>'; 
        
    ?>
    <section class="conteudo-principal">
        <h1>Páginas de conteúdo</h1>
        <div class="row">
            <div class="card-conteudo">
                <a href="conteudo_sobre.php"><img src="./images/pag-sobre.png" alt="Página Sobre"></a>
                <span>Página Sobre</span>
            </div>
            <div class="card-conteudo">
                <a href="conteudo_curiosidades.php"><img src="./images/pag-curiosidades.png" alt="Página Curiosidades"></a>
                <span>Página Curiosidades</span>
            </div>
            <div class="card-conteudo">
                <a href="conteudo_lojas.php"><img src="./images/pag-lojas.png" alt="Página Lojas"></a>
                <span>Página Lojas</span>
            </div>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>