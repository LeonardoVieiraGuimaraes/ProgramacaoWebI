<?php
// Define constantes para as credenciais do banco de dados
const HOST = 'localhost';
const PORT = '3306';
const USER = 'root';
const PASS = '';
const BASE = 'listadehabito';

// Cria uma nova conexão com o banco de dados usando as credenciais definidas acima
$conn = new mysqli(HOST, USER, PASS, BASE, PORT);

// Verifica se a conexão foi bem-sucedida
// Se houver um erro de conexão, o script termina e exibe uma mensagem de erro
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

// Obtém o nome do hábito a ser inserido, que foi passado como um parâmetro GET
$nome = $_POST["nome"];

// Prepara uma instrução SQL para inserir o novo hábito
// Isso protege contra injeções de SQL
$stmt = $conn->prepare("INSERT INTO habito (nome, status) VALUES (?, 'A')");
$stmt->bind_param("s", $nome);

// Executa a instrução SQL
// Se a execução falhar, o script termina e exibe uma mensagem de erro
if (!$stmt->execute()) {
    $conn->close();
    die("Erro: " . $stmt->error);
}

// Fecha a conexão com o banco de dados
$conn->close();

// Redireciona o usuário para a página inicial
header("Location: index.php");
