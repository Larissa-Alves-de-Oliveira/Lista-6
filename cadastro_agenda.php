<?php
    include('conexao.php');
    
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta_destino . date('Ymd-hist') . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    echo "Nome: $nome<br>Apelido: $apelido<br>endereco: $endereco<br>Bairro: $bairro<br>cidade: $cidade<br>estado: $estado<br>telefone: $telefone<br>celular: $celular<br>email: $email";

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro,cidade,estado,telefone,celular,email, dt_cadastro, foto) VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."', now(), '".$nome_foto."')";

    echo $sql."<br>";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados cadastrados com sucesso!";
    }else{
        echo "Erro ao tentar cadastrar!";
    }
?>