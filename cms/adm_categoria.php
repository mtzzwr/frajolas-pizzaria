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

    $produto = $rs['adm_produto'];

    if ($produto != 1) echo '<script>alert("Sem permissão"); window.history.go(-1)</script>';

    ?>
    <section class="conteudo-principal">
        <h1>Categoria</h1>
        <div class="row">
            <div class="add-user">
                <a href="crud_categoria.php">Adicionar nova categoria</a>
            </div>
            <table>
                <th>Categoria</th>
                <th>Ações</th>
                <th>Status</th>
                <tbody>
                    <?php {

                        $sql = "select * from tbl_categoria";

                        $select_all = mysqli_query($conexao, $sql);

                        while ($rs = mysqli_fetch_array($select_all)) {

                            ?>
                            <tr>
                                <td><?php echo $rs['nome_categoria']; ?></td>
                                <td>
                                    <a href="./crud_categoria.php?modo=editar&codigo=<?= $rs['id_categoria']; ?>" class="btn-editar" href="#"><img src="./images/pen.png" alt=""></a>
                                    <a onclick="return confirm('Deseja realmente deletar o produto?')" href="./crud_categoria.php?modo=deletar&codigo=<?= $rs['id_categoria'] ?>"><img src="./images/delete.png" alt=""></a>
                                </td>
                                <td><?php if ($rs['status'] == 1) {

                                                ?>
                                        <a href='alterar_status.php?alterar=categoria&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_categoria']; ?>'><img src='./images/online.png' alt="Desativar" title="Desativar" /></a>

                                    <?php
                                            } else if ($rs['status'] == 0) {

                                                ?>
                                        <a href='alterar_status.php?alterar=categoria&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_categoria']; ?>'><img src='./images/offline.png' alt="Ativar" title="Ativar" /></a>

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
        <h1>Subcategoria</h1>
        <div class="row">
            <div class="add-user">
                <a href="crud_subcategoria.php">Adicionar nova subcategoria</a>
            </div>
            <table>
                <th>Subcategoria</th>
                <th>Ações</th>
                <th>Status</th>
                <tbody>
                    <?php {

                        $sql = "select * from tbl_subcategoria";

                        $select_all = mysqli_query($conexao, $sql);

                        while ($rs = mysqli_fetch_array($select_all)) {

                            ?>
                            <tr>
                                <td><?php echo $rs['nome_subcategoria']; ?></td>
                                <td>
                                    <a href="./crud_subcategoria.php?modo=editar&codigo=<?= $rs['id_subcategoria']; ?>" class="btn-editar" href="#"><img src="./images/pen.png" alt=""></a>
                                    <a onclick="return confirm('Deseja realmente deletar o produto?')" href="./crud_subcategoria.php?modo=deletar&codigo=<?= $rs['id_subcategoria'] ?>"><img src="./images/delete.png" alt=""></a>
                                </td>
                                <td><?php if ($rs['status'] == 1) {

                                                ?>
                                        <a href='alterar_status.php?alterar=subcategoria&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_subcategoria']; ?>'><img src='./images/online.png' alt="Desativar" title="Desativar" /></a>

                                    <?php
                                            } else if ($rs['status'] == 0) {

                                                ?>
                                        <a href='alterar_status.php?alterar=subcategoria&status=<?= $rs['status'] ?>&codigo=<?= $rs['id_subcategoria']; ?>'><img src='./images/offline.png' alt="Ativar" title="Ativar" /></a>

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

