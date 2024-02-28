<?php
    // Obtém a lista de hábitos do
    // banco de dados MySQL
    const HOST = 'localhost';
    const PORT = '3307';
    const USER = 'root';
    const PASS = '';
    const BASE = 'listadehabito';
    // Cria uma conexão com o banco de dados

    $conn = new mysqli(HOST, USER, PASS, BASE, PORT);
    // Verifica se houve erro ao
    // abrir a conexão
    if ($conn->connect_error) {
        die("A conexão falhou: " . $conn->connect_error);
    }
    // Busca nome que foi recebido
    // via get através do formulário
    // de cadastro
    $nome = $_GET["nome"];
    // Insere o hábito na tabela
    // habito do banco de dados
    $sql = "INSERT INTO habito (nome, status) VALUES ('{$nome}', 'A')";
    // Verifica se ocorreu tudo bem
    // Caso houve erro, fecha a conexão
    // e aborta o programa
    if (!($con->query($sql) === TRUE)) {
        $con->close();
        die("Erro: " . $sql . "<br>" . $con->error);
    }
    // Fecha a conexão com o
    // Banco de dados
    $con->close();
    // Envia para a página index
    // onde aparece a lista de hábitoss
    // já com o novo hábito cadastrado
    header("Location: index.php");
?>