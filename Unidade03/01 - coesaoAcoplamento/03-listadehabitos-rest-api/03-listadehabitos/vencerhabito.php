<?php
// Obtém a lista de hábitos do
// banco de dados MySQL
const HOST = 'localhost';
const PORT = '3306';
const USER = 'root';
const PASS = '';
const BASE = 'listadehabito';
// Cria uma conexão com o banco de dados

$conn = new mysqli(HOST, USER, PASS, BASE, PORT);
// Verifica se conectou
// com sucesso
if ($conn->connect_error) {
    die("Falha na conexão: "
        . $conn->connect_error);
}
// Atualiza o status de A - ativo
// para V - vencido
$id = $_GET["id"];
$sql = "UPDATE habito SET status='V' WHERE id=" . $id;
// Verifica se o comando foi
// executado com sucesso
if (!($conn->query($sql) === TRUE)) {
    $conn->close();
    die("Erro ao atualizar: " . $conn->error);
}
// Fecha a conexão
$conn->close();
// Redireciona para index
header("Location: index.php");
