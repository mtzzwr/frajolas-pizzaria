<?php

$tipo_mensagem = null;

require_once('../db/conexao.php');
$conexao = conexaoMysql();

$cod = 0;
$modo = null;

$cod = @$_GET['codigo'];
$modo = @$_GET['modo'];

$filtro = null;

if (isset($_POST['btn-filtrar'])) {
    $filtro = $_POST['filtro-contato'];
}

if (isset($modo)) {
    if ($modo == 'deletar') {
        $sql = "DELETE FROM tbl_contato WHERE id = '" . $cod . "'";

        if (mysqli_query($conexao, $sql))  header('location:./adm_fale_conosco.php');
        else echo 'erro ao excluir';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/fale_conosco.css">
    <title>Fale conosco - CMS</title>
    <script src="./js/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-visualizar').on('click', function() {
                $('.container-modal').fadeIn(1000);
            });

            $('#close').on('click', function() {
                $('.container-modal').fadeOut(1000);
                var urlAtual = window.location.href;
                window.location.href = urlAtual;
            });

        });

        modalDados = (idItem) => {
            $.ajax({
                type: "POST",
                url: "./modal_contato.php",
                data: {
                    modo: 'visualizar',
                    codigo: idItem
                },
                success: function(dados) {
                    $('.conteudo-modal').html(dados);
                    console.log(dados);
                }
            });
        }
    </script>
</head>

<body>
    <div class="container-modal">
        <div class="modal">
            <div class="conteudo-modal">

            </div>
            <div class="fechar-modal">
                <a id="close" href="">Fechar</a>
            </div>
        </div>
    </div>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Contatos</h1>
        <div class="conteudo-contato">
            <form action="" method="post">
                <select name="filtro-contato" id="">
                    <option value="todos" <?= ($filtro == 'todos') ? 'selected' : '' ?>>Todos</option>
                    <option value="sugestao" <?= ($filtro == 'sugestao') ? 'selected' : '' ?>>Sugestão</option>
                    <option value="critica" <?= ($filtro == 'critica') ? 'selected' : '' ?>>Critica</option>
                </select>
                <input type="submit" name="btn-filtrar" value="Filtrar">
            </form>
            <table>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Tipo mensagem</th>
                <th>Ações</th>
                <tbody>

                    <?php

                    $sql = "select * from tbl_contato order by id desc";

                    if ($filtro == 'sugestao' || $filtro == 'critica')
                    $sql =  "select * from tbl_contato where tipo_mensagem = '" . $filtro . "' order by id desc";
                    
                    $select = mysqli_query($conexao, $sql);

                    while ($rs = mysqli_fetch_array($select)) {

                        ?>

                        <tr>
                            <td><?php echo $rs['nome']; ?></td>
                            <td><?php echo $rs['email']; ?></td>
                            <td><?php echo $rs['celular']; ?></td>
                            <td><?php echo $rs['tipo_mensagem']; ?></td>
                            <td>
                                <a onclick="modalDados(<?= $rs['id']; ?>);" class="btn-visualizar" href="#"><img src="./images/lupa.png" alt=""></a>
                                <a onclick="return confirm('Deseja realmente excluir o contato?');" href="./db/excluirContato.php?codigo=<?= $rs['id'] ?>"><img src="./images/delete.png" alt=""></a>
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