<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravando Dados</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PRODUCAO";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // pegar ultmimo codigo gravado 
    $sql = "SELECT MAX(codigo) as codigo FROM contato";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $reg = $result->fetch_assoc();
        $codigo = $reg["codigo"];
        $codigo++;
    } else {
        $codigo = 1;
    }

    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO contato (codigo, nome, sexo, email, mensagem) VALUES ($codigo, '$nome', '$sexo', '$email', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro gravado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    echo "gravado com sucesso"
    ?>

    <a href="04 - index.html">Voltar para formulário</a>
</body>

</html>