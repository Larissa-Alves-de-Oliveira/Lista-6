<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM agenda";
        //mysqli_query => Executa um comando no banco de dados
        $result = mysqli_query($con,$sql);
        // mysqli_fetch_array => retorna apenas
        // Uma linha dos registros retornados 
        $row = mysqli_fetch_array($result);
    ?>
      <h1>Consultar agenda:</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
        </tr>
        <?php
            do{
                if($row)
                {
                    echo "<tr>";
                    echo "<td>".$row['id_agenda']."</td>";
                    /*if($row['foto'] == "")
                        echo "<td></td>";
                    else
                        echo "<td><img src = '".$row['foto'].
                        "' width = '80' height='100'/></td>";*/
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['apelido']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['cidade']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['celular']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td><a href='altera_agenda.php?id_agenda=" .$row['id_agenda']. "'>Alterar</a></td>";
                    echo "<td><a href='excluir_usuario_exe.php?id_agenda=" .$row['id_agenda']. "'>Deletar</a></td>";
                    echo "</tr>";
                }
            }while($row =mysqli_fetch_array($result));
        ?>
         <a href="index.php">Voltar</a>
    </table>
</body>
</html>