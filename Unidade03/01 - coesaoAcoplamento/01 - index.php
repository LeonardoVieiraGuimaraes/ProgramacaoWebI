<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Lista de Hábitos</title>
</head>

<body>
    <div class="center">
        <h1>Lista de Hábitos</h1>
        <p>Cadastre aqui os hábitos que você precisa vencer para melhorar sua vida!</p>
        <?php
        // Obtém a lista de hábitos do banco de dados MySQL
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bancodedados = "listadehabito";

        // Cria uma conexão com o banco de dados
        $conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão: " . $conexao->connect_error);
        }

        // Executa a query da variável $sql
        $sql = "SELECT id, nome FROM habito";
        $resultado = $conexao->query($sql);

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
            <p>Comece já a mudar sua vida!</p>
        <?php
        } // fim do if

        // Fecha a conexão com o MySQL
        $conexao->close();
        ?>
        <a href="novohabito.php">Cadastrar Hábito</a>
    </div>
</body>

</html>