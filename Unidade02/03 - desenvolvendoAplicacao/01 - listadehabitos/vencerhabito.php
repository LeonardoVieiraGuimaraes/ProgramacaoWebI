<?php
// Define constantes para as credenciais do banco de dados
const HOST = 'localhost';
const PORT = '3307';
const USER = 'root';
const PASS = '';
const BASE = 'listadehabito';

// Cria uma nova conexão com o banco de dados usando as credenciais definidas acima
$conn = new mysqli(HOST, USER, PASS, BASE, PORT);

// Verifica se a conexão foi bem-sucedida
// Se houver um erro de conexão, o script termina e exibe uma mensagem de erro
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém o id do hábito a ser atualizado, que foi passado como um parâmetro GET
$id = $_GET["id"];

// Prepara uma instrução SQL para atualizar o status do hábito
// Isso protege contra injeções de SQL
$stmt = $conn->prepare("UPDATE habito SET status='V' WHERE id = ?");
$stmt->bind_param("i", $id);

// Executa a instrução SQL
// Se a execução falhar, o script termina e exibe uma mensagem de erro
if (!$stmt->execute()) {
    $conn->close();
    die("Erro ao atualizar: " . $stmt->error);
}

// Fecha a conexão com o banco de dados
$conn->close();

// Redireciona o usuário para a página inicial
header("Location: index.php");
