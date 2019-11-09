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
    <title>Conteúdo - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <div class="conteudo">
            <h1>Conteúdos da página Curiosidades</h1>
            <a href="add_curiosidade.php">Nova Curiosidade</a>
            <table>
                <th>Titulo curiosidade</th>
                <th>Descrição curiosidade</th>
                <th>Imagem</th>
                <th>Status</th>
                <th>Ações</th>
                <tbody>
                    <?php

                    $sql = "select * from tbl_curiosidade";

                    $select = mysqli_query($conexao, $sql);

                    while ($rs = mysqli_fetch_array($select)) {

                        ?>

                        <tr>
                            <td><?php echo $rs['titulo_curiosidade']; ?></td>
                            <td><?php echo $rs['desc_curiosidade']; ?></td>
                            <td><img src="/db/files/"<?= $rs['imagem_curiosidade'] ?> width="200px" height="140px"/></td>
                            <td><?php if ($rs['status'] == 1) {

                                        ?>
                                    <a href='alterar_status.php?alterar=curiosidade&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_curiosidade']; ?>'><img src='./images/online.png' alt="Desativar" title="Desativar" /></a>

                                <?php
                                    } else if ($rs['status'] == 0) {

                                        ?>
                                    <a href='alterar_status.php?alterar=curiosidade&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_curiosidade']; ?>'><img src='./images/offline.png' alt="Ativar" title="Ativar" /></a>

                                <?php
                                    } ?></td>
                            <td>
                                <a href="./add_usuario.php?modo=editar&codigo=<?= $rs['id_usuario']; ?>" class="btn-editar" href="#"><img src="./images/pen.png" alt=""></a>
                                <a onclick="return confirm('Deseja realmente deletar o conteúdo?')" href="./add_curiosidade.php?foto=<?= $rs['imagem_curiosidade'];?>&modo=deletar&codigo=<?= $rs['id_curiosidade'] ?>"><img src="./images/delete.png" alt=""></a>
                            </td>
                        </tr>

                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>