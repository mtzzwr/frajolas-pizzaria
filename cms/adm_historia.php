<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/add_curiosidade.css">
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <title>Adicionar Nossa História - CMS</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Nossa história</h1>
        <a href="crud_historia.php">Adicionar</a>
        <table>
            <th>Titulo história</th>
            <th>Descrição história</th>
            <th>Status</th>
            <th>Ações</th>
            <tbody>
                <?php

                $sql = "select * from tbl_historia";

                $select = mysqli_query($conexao, $sql);

                while ($rs = mysqli_fetch_array($select)) {

                    ?>

                    <tr>
                        <td><?php echo $rs['titulo_historia']; ?></td>
                        <td><?php echo $rs['desc_historia']; ?></td>
                        <td><?php if ($rs['status'] == 1) {

                                    ?>
                                <a href='alterar_status.php?alterar=historia&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_historia']; ?>'><img src='./images/online.png' alt="Desativar" title="Desativar" /></a>

                            <?php
                                } else if ($rs['status'] == 0) {

                                    ?>
                                <a href='alterar_status.php?alterar=historia&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_historia']; ?>'><img src='./images/offline.png' alt="Ativar" title="Ativar" /></a>

                            <?php
                                } ?></td>
                        <td>
                            <a href="./crud_historia.php?modo=editar&codigo=<?= $rs['id_historia']; ?>" class="btn-editar" href="#"><img src="./images/pen.png" alt=""></a>
                            <a onclick="return confirm('Deseja realmente deletar o conteúdo?')" href="./crud_historia.php?modo=deletar&codigo=<?= $rs['id_historia'] ?>"><img src="./images/delete.png" alt=""></a>
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