<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gravando Dados</title>
</head>
<?php
$servidor = "localhost";
$port = "3307";
$usuario = "root";
$senha = "";
$bancodedados = "producao";
$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados, $port);

    if ($conexao ->connect_error){
        die("A conecção falhou: " + $conexao->connect_error);
    }

    //pegar último codigo gravado
    $sql = "SELECT MAX(codigo) AS codigo FROM contato";
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0){
        $registro = $resultado->fetch_assoc();
        $codigo = $registro["codigo"];
        $codigo = $codigo + 1;
    }else {
        $codigo = 1;
    }

    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO contato (codigo, nome, email, sexo, mensagem) VALUES ('".$codigo."', '".$nome."', '".$email."', '".$sexo."', '".$mensagem."')";

    if (!($conexao->query($sql) === true)){
        $conexao -> close();
        die("Erro ". $sql . "<br>" . $conexao->error);
    }

    $conexao ->close();
    echo "gravado com sucesso"
?>
<body>

    <a href="index.php">Voltar Formulário</a>
</body>
</html>
