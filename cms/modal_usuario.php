<?php 

if(isset($_POST['modo'])){
    if($_POST['modo'] == 'visualizar'){

        $cod = $_POST['codigo'];

        require_once '../db/conexao.php';
        $conexao = conexaoMysql();

        $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = ".$cod;

        $select = mysqli_query($conexao, $sql);

        if($rs = mysqli_fetch_array($select)){
            $nome = $rs['nome'];
            $cpf = $rs['cpf'];
            $rg = $rs['rg'];
            $email = $rs['email'];
            $celular = $rs['celular'];
            $telefone = $rs['telefone'];
            $sexo = $rs['sexo'];
            $usuario = $rs['usuario'];
            $senha = $rs['senha'];
            $nivel = $rs['id_nivel'];
            $status = $rs['status'];
        }

        if($telefone == null) $telefone = "<span class='txt-preenchido'>Não preenchido</span>";

        if($sexo == 'm') $sexo = 'masculino';
        else $sexo = 'feminino';

        echo "<div id='nome'>Usuário: $nome</div>
            <hr>
            <div class='row-modal'> - $email</div>
            <div class='row-modal'> - $celular</div>
            <div class='row-modal'> - $telefone</div>
            <div class='row-modal'> - $cpf</div>
            <div class='row-modal'> - $rg</div>
            <div class='row-modal'> - $usuario</div>
            <div class='row-modal'> - $sexo</div>";
    }
}

?>