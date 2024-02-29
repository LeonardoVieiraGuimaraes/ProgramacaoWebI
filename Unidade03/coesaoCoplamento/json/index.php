<?php
    // Obtém a lista de hábitos do
    // banco de dados MySQL
    const HOST = 'localhost';
    const PORT = '3307';
    const USER = 'root';
    const PASS = '';
    const BASE = 'producao';
    // Cria uma conexão com o banco de dados

    $conn = new mysqli(HOST, USER, PASS, BASE, PORT);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    //Pega o último código gravado
    $sql = "SELECT codigo, nome, mensagem FROM CONTATO";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $registro = $resultado->fetch_assoc();
        // para formar um objeto json
        $jsonHabitoArray = Array();
        $contador = 0;
        //echo num_rows
        while ($registro = $resultado->fetch_assoc()) {
            // monta um objeto json atraves do array
            $jsonHabito = Array();
            $jsonHabito["CODIGO"] = $registro["codigo"];
            $jsonHabito["NOME"] = $registro["nome"];
            $jsonHabito["MENSAGEM"] = $registro["mensagem"];
            // $jsonHabito["SEXO"] = $registro["sexo"];

            $jsonHabitoArray[$contador++] = $jsonHabito;
        }
        echo json_encode($jsonHabitoArray);
    } else {
        echo "Nenhum Registro Encontrado";
    }
?>