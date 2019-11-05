<?php 

function uploadImagem($file_name){
    
    $dir = (string) 'db/files/';
    $max_file_size = (int) 1000;
    $accepted_files = array('image/jpeg', 'image/png', 'image/jpg');

    if($_FILES['foto']['type'] != ''){
        if($_FILES['foto']['size'] > 0){
            $type_file = $_FILES['foto']['type'];

            if(in_array($type_file, $accepted_files)){
                $file_size = round($_FILES['foto']['size'] / 1024);

                if($file_size <= $max_file_size){
                    $real_file_name = $_FILES['foto']['name'];
                    $file_name = pathinfo($real_file_name, PATHINFO_FILENAME);
                    $file_extension = pathinfo($real_file_name, PATHINFO_EXTENSION);

                    $crypt_file_name = md5(uniqid(time() . $file_name));
                    $image_name = $crypt_file_name . '.' . $file_extension;

                    $tmp_file = $_FILES['foto']['tmp_name'];

                    if(move_uploaded_file($tmp_file, $dir . $image_name)){
                        return $image_name;
                    }else{
                        echo '<script>alert("Erro ao enviar o arquivo para o server");</script>';
                    }
                }else{
                    echo '<script>alert("Tamanho do arquivo maior que o permitido - (1mb)");</script>';
                }
            }else{
                echo '<script>alert("Tipo do arquivo não é permitido");</script>';
            }
        }else{
            echo '<script>alert("O tamanho do arquivo é inexistente");</script>';
        }
    }else{
        echo '<script>alert("Tipo do arquivo está vazio");</script>';
    }
}

// file == null ? update de todos os campos, menos a foto : update de todos os campos, com o upload da imagem
// deletar arquivo antigo da pasta files - unlink
// antes do header dar unlink no arquivo antigo
// se salvar no banco a nova foto, apagar a antiga para não congestionar o banco - apagar depois de gravar no banco
// if da exec da query, apagar o arquivo antigo depois que subir o novo
// tanto no update quanto no delete deletar o arquivo anterior
