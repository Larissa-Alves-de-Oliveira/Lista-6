<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "SELECT * FROM agenda where id_agenda=$id_agenda";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
</head>
<body>
    <form action="altera_agenda_exe.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Cadastro de agenda</legend>
            <input name="id_agenda" type="hidden"
                value="<?php echo $row['id_agenda'] ?>">
            <div>
                <label for="nome">Nome:</label>
    
                <input type="text" name="nome" id="nome"
                value="<?php echo $row['nome']?>">
            </div>
            <div>
                <label for="apelido">Apelido:</label>
    
                <input type="text" name="apelido" id="apelido"
                value="<?php echo $row['apelido']?>">
            </div>
            <div>
                <label for="endereco">Endereco:</label>
    
                <input type="text" name="endereco" id="endereco"
                value="<?php echo $row['endereco']?>">
            </div>
            <div>
                <label for="bairro">Bairro:</label>
    
                <input type="text" name="bairro" id="bairro"
                value="<?php echo $row['bairro']?>">
            </div>
            <div>
                <label for="cidade">Cidade:</label>
    
                <input type="text" name="cidade" id="cidade"
                value="<?php echo $row['cidade']?>">
            </div>
            <div>
                <label for="estado">Estado:</label>
    
                <input type="text" name="estado" id="estado"
                value="<?php echo $row['estado']?>">
            </div>
            <div>
                <label for="telefone">Telefone:</label>
    
                <input type="tel" name="telefone" id="telefone"  pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"
                value="<?php echo $row['telefone']?>">
            </div>
            <div>
                <label for="celular">Celular:</label>
    
                <input type="tel" name="celular" id="celular"  pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"
                value="<?php echo $row['celular']?>">
            </div>
            <div>
                <label for="email">Email:</label>
    
                <input type="text" name="email" id="email"
                value="<?php echo $row['email']?>">
            </div>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>