<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de hábitos</title>
</head>

<body>
    <div class="center">
        <h1>Lista de hábitos</h1>
        <p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>
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
        // Verifica se houve erro ao
        // abrir a conexão
        if ($conn->connect_error) {
            die("A conexão falhou: " . $conn->connect_error);
        }


        // Executa a query da variável $sql
        $sql = " SELECT id, nome, status " .
            " FROM habito ";
        $resultado = $conn->query($sql);
        // Verifica se a query retornou registros
        if ($resultado->num_rows > 0) {
        ?>
            <br />
            <table class="center">
                <tbody>
                    <?php
                    // Looping pelos registros retornados
                    while ($registro = $resultado->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $registro["nome"]; ?></td>
                            <td><?php echo $registro["status"]; ?></td>
                            <td><a href="vencerhabito.php?id=<?php echo $registro["id"]; ?>">Vencer</a></td>
                            <td><a href="desistirhabito.php?id=<?php echo $registro["id"]; ?>">Desistir</a></td>
                        </tr>
                    <?php
                    } // fim do looping
                    ?>
                </tbody>
            </table>
            <p>Continue mudando sua vida!</p>
            <p>Cadastre mais hábitos!</p>
        <?php
        } else {
        ?>
            <p>Você não possui hábitos cadastrados!</p>
            <p>Começe já a mudar sua vida!</p>
        <?php
        } // fim do if
        // Fecha a conexão com o MySQL
        $conn->close();
        ?>
        <a href="novohabito.php">Cadastrar Hábito</a>
    </div>
</body>

</html>