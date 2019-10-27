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
    <link rel="stylesheet" href="./css/adm_usuario.css">
    <title>Controle de niveis</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <div class="conteudo">
            <h1>Controle de Niveis</h1>
            <div class="add-user">
                <a href="add_nivel.php">Adicionar novo nivel</a>
            </div>
            <table>
                <th>Nivel</th>
                <th>Descrição</th>
                <th>Ações</th>
                <th>Status</th>
                <tbody>
                    <?php {

                        $sql = "select * from tbl_nivel where id_nivel > 1";

                        $select_all = mysqli_query($conexao, $sql);

                        while ($rs = mysqli_fetch_array($select_all)) {

                            ?>
                            <tr>
                                <td><?php echo $rs['nome_nivel']; ?></td>
                                <td><?php echo $rs['descricao_nivel']; ?></td>
                                <td>
                                    <a href="./add_nivel.php?modo=editar&codigo=<?= $rs['id_nivel']; ?>" class="btn-editar"><img src="./images/pen.png" alt=""></a>
                                </td>
                                <td><?php if ($rs['status'] == 1) {

                                                ?>
                                        <a href='alterar_status.php?alterar=nivel&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_nivel']; ?>'><img src='./images/online.png' alt="Desativar" title="Desativar" /></a>

                                    <?php
                                            } else if ($rs['status'] == 0) {

                                                ?>
                                        <a href='alterar_status.php?alterar=nivel&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_nivel']; ?>'><img src='./images/offline.png' alt="Ativar" title="Ativar" /></a>

                                    <?php
                                            } ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>