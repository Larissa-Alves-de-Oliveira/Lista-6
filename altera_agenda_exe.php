<?php
    include('conexao.php');
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta_destino . date('Ymd-hist') . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['inputNome'];
    $apelido = $_POST['inputApelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['inputBairro'];
    $cidade = $_POST['inputCidade'];
    $estado = $_POST['inputEstado'];
    $telefone = $_POST['inputTelefone'];
    $celular = $_POST['inputCelular'];
    $email = $_POST['email']; //Recebendo valores do campo formulário

    echo "<h1>Alteração de dados</h1>";
    echo "<p>Usuário: $nome</p>";
    $sql = "UPDATE agenda SET 
            nome ='$nome',
            apelido ='$apelido',
            endereco = '$endereco',
            bairro ='$bairro',
            cidade ='$cidade',
            estado ='$estado',
            telefone = '$telefone',
            celular = '$celular',
            foto='$nome_foto',
            email ='$email' 
            WHERE id_agenda=$id_agenda"; 
            //Comando que funciona apenas no banco de dados
    echo $sql;
    $result = mysqli_query($con,$sql); //Envia as informações para o banco de dados
    if($result){
        echo "Dados alterados com sucesso!<br>";
    }else{
        echo "Erro ao alterar dados: ". $mysqli_error($con) ." !";
    }
?>
<a href="index.php">Voltar</a>