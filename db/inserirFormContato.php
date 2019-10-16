<?php 

$nome = (string) null;
$email = (string) null;
$celular = (string) null;
$telefone = (string) null;
$homepage = (string) null;
$facebook = (string) null;
$profissao = (string) null;
$sexo = (string) null;
$tipo_mensagem = (string) null;
$mensagem = (string) null;

if(isset($_POST['btn-enviar'])){

    require_once('conexao.php');
    $conexao = conexaoMysql();

    $nome = $_POST['txt-nome'];
    $email = $_POST['txt-email'];
    $celular = $_POST['txt-celular'];
    $telefone = $_POST['txt-telefone'];
    $homepage = $_POST['txt-homepage'];
    $facebook = $_POST['txt-facebook'];
    $profissao = $_POST['txt-profissao'];
    $sexo = $_POST['sexo'];
    $tipo_mensagem = $_POST['select-tipo-msg'];
    $mensagem = $_POST['txt-mensagem'];

    

    if(strlen($celular) <= 6){
        echo "<script>alert('O celular deve conter pelo menos 11 caracteres'); window.history.go(-1);</script>";
    }else if(strlen($telefone) <= 6){
        echo "<script>alert('O telefone deve conter pelo menos 10 caracteres'); window.history.go(-1);</script>";
    }else if(strlen($mensagem) <= 5){
        echo "<script>alert('A mensagem deve conter pelo menos 5 caracteres'); window.history.go(-1);</script>";
    }else{
        $sql = "INSERT INTO tbl_contato (nome, email, celular, telefone, homepage, facebook, profissao, sexo, tipo_mensagem, mensagem)
        VALUES ('".$nome."', '".$email."', '".$celular."', '".$telefone."', '".$homepage."', '".$facebook."', '".$profissao."', 
        '".$sexo."', '".$tipo_mensagem."', '".$mensagem."')";
    
        if(mysqli_query($conexao, $sql)){
            echo "<script>alert('A mensagem foi enviada!'); window.history.go(-1);</script>";
        }else{
            echo "Erro ao enviar mensagem";
        } 
    }



}

?>