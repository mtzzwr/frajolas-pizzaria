<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <title>Diferenciais - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Diferenciais</h1>
        <a href="add_diferencial.php">Novo card</a>
        <table>
            <th>Titulo diferencial</th>
            <th>Descrição diferencial</th>
            <th>Status</th>
            <th>Ações</th>
            <tbody>
                <?php

                $sql = "select * from tbl_diferenciais";

                $select = mysqli_query($conexao, $sql);

                while ($rs = mysqli_fetch_array($select)) {

                    ?>

                    <tr>
                        <td><?php echo $rs['titulo_diferencial']; ?></td>
                        <td><?php echo $rs['desc_diferencial']; ?></td>
                        <td><?php if ($rs['status'] == 1) {

                                    ?>
                                <a href='alterar_status.php?alterar=diferencial&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_diferencial']; ?>'><img src='./images/online.png' alt="Desativar" title="Desativar" /></a>

                            <?php
                                } else if ($rs['status'] == 0) {

                                    ?>
                                <a href='alterar_status.php?alterar=diferencial&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_diferencial']; ?>'><img src='./images/offline.png' alt="Ativar" title="Ativar" /></a>

                            <?php
                                } ?></td>
                        <td>
                            <a onclick="modalDados(<?= $rs['id_usuario']; ?>);" class="btn-visualizar" href="#"><img src="./images/lupa.png" alt=""></a>
                            <a href="./add_usuario.php?modo=editar&codigo=<?= $rs['id_usuario']; ?>" class="btn-editar" href="#"><img src="./images/pen.png" alt=""></a>
                            <a onclick="return confirm('Deseja realmente deletar o conteúdo?')" href="./add_curiosidade.php?modo=deletar&codigo=<?= $rs['id_curiosidade'] ?>"><img src="./images/delete.png" alt=""></a>
                        </td>
                    </tr>

                <?php
                }

                ?>
            </tbody>
        </table>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>