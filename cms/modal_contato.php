<?php 

if(isset($_POST['modo'])){
    if($_POST['modo'] == 'visualizar'){

        $cod = $_POST['codigo'];

        require_once '../db/conexao.php';
        $conexao = conexaoMysql();

        $sql = "SELECT * FROM tbl_contato WHERE id = ".$cod;

        $select = mysqli_query($conexao, $sql);

        if($rs = mysqli_fetch_array($select)){
            $nome = $rs['nome'];
            $email = $rs['email'];
            $celular = $rs['celular'];
            $telefone = $rs['telefone'];
            $homepage = $rs['homepage'];
            $facebook = $rs['facebook'];
            $profissao = $rs['profissao'];
            $sexo = $rs['sexo'];
            $tipo_mensagem = $rs['tipo_mensagem'];
            $mensagem = $rs['mensagem'];
        }

        if($telefone == null) $telefone = "<span class='txt-preenchido'>Não preenchido</span>";

        if($homepage == null) $homepage = "<span class='txt-preenchido'>Não preenchido</span>";

        if($facebook == null) $facebook = "<span class='txt-preenchido'>Não preenchido</span>";

        if($sexo == 'm') $sexo = 'masculino';
        else $sexo = 'feminino';

        echo "<div id='nome'>Mensagem enviada por: $nome</div>
            <hr>
            <div class='row-modal'><img class='img-modal' src='./images/email.png'/> - $email</div>
            <div class='row-modal'><img src='./images/celular.png'/> - $celular</div>
            <div class='row-modal'><img src='./images/telefone.png'/> - $telefone</div>
            <div class='row-modal'><img src='./images/homepage.png'/> - $homepage</div>
            <div class='row-modal'><img src='./images/face.png'/> - $facebook</div>
            <div class='row-modal'><img src='./images/job.png'/> - $profissao</div>
            <div class='row-modal'><img src='./images/sexo.png'/> - $sexo</div>
            <div class='row-modal'><img src='./images/mensagem.png'/> - $tipo_mensagem</div>
            <div class='row-modal'><img src='./images/mensagem.png'/> - $mensagem</div>";
    }
}

?>