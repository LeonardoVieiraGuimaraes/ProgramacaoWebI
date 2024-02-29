<?php
// Define constantes para as credenciais do banco de dados
const HOST = 'localhost'; // O host do banco de dados
const PORT = '3307'; // A porta do banco de dados
const USER = 'root'; // O usuário do banco de dados
const PASS = ''; // A senha do banco de dados
const BASE = 'listadehabito'; // O nome do banco de dados

// Cria uma nova conexão com o banco de dados usando as credenciais definidas acima
$conn = new mysqli(HOST, USER, PASS, BASE, PORT);

// Verifica se a conexão foi bem-sucedida
// Se houver um erro de conexão, o script termina e exibe uma mensagem de erro
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

// Obtém o id do registro a ser excluído, que foi passado como um parâmetro GET
$id = $_GET["id"];

// Prepara uma instrução SQL para excluir o registro com o id especificado
// Isso protege contra injeções de SQL
$stmt = $conn->prepare("DELETE FROM habito WHERE id = ?");
$stmt->bind_param("i", $id);

// Executa a instrução SQL
// Se a execução falhar, o script termina e exibe uma mensagem de erro
if (!$stmt->execute()) {
    die("Erro ao excluir: " . $conn->error);
}

// Fecha a conexão com o banco de dados
$conn->close();

// Redireciona o usuário para a página inicial
header("Location: index.php");
