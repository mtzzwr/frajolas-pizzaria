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
    <title>Controle de Usuários</title>
</head>

<body>
    <?php include './include/header.php'; ?>
    <section class="conteudo-principal">
        <h1>Controle de Usuários</h1>
        <div class="add-user">
            <a href="add_usuario.php">Adicionar novo usuário</a>
        </div>
        <table>
            <th>Nome</th>
            <th>Usuário</th>
            <th>Email</th>
            <th>Nível</th>
            <th>Ações</th>
            <th>Status</th>
            <tbody>
                <?php {

                    $sql = "select * from tbl_usuario where id_usuario > 16 order by id_usuario desc";

                    $select_all = mysqli_query($conexao, $sql);

                    while ($rs = mysqli_fetch_array($select_all)) {

                        ?>
                        <tr>
                            <td><?php echo $rs['nome']; ?></td>
                            <td><?php echo $rs['usuario']; ?></td>
                            <td><?php echo $rs['email']; ?></td>
                            <td><?php if($rs['id_nivel'] == 1){
                                $rs['id_nivel'] = 'Administrador';
                            }else if($rs['id_nivel'] == 2){
                                $rs['id_nivel'] = 'Operador de conteúdo';
                            }else if($rs['id_nivel'] == 3){
                                $rs['id_nivel'] = 'Operador do Fale Conosco';
                            }else if($rs['id_nivel'] == 4){
                                $rs['id_nivel'] = 'Operador de Usuários';
                            }
                            
                            echo $rs['id_nivel'];?></td>
                            <td>
                                <a href="./add_usuario.php?modo=editar&codigo=<?= $rs['id_usuario']; ?>" class="btn-editar" href="#"><img src="./images/pen.png" alt=""></a>
                                <a onclick="return confirm('Deseja realmente deletar o usuário?')" href="./db/excluir-usuario.php?codigo=<?= $rs['id_usuario'] ?>"><img src="./images/delete.png" alt=""></a>
                            </td>
                            <td><?php if($rs['status'] == 1){

                                ?>
                                <a href='alterar_status_user.php?status=<?= $rs['status']?>&codigo=<?= $rs['id_usuario']; ?>'><img src='./images/online.png' alt="Desativar" title="Desativar" /></a>
                              
                              <?php
                            }else if($rs['status'] == 0){

                                ?>
                                <a href='alterar_status_user.php?status=<?= $rs['status']?>&codigo=<?= $rs['id_usuario']; ?>'><img src='./images/offline.png' alt="Ativar" title="Ativar" /></a>

                                <?php
                            } ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </section>
    <?php include './include/footer.php'; ?>
</body>

</html>