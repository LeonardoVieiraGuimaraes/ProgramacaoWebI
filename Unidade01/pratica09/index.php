<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Multiplicando em PHP</h1>
    <?php
        // Referencia as constantes e funções contidas
        // em arquivos PHP externos
        require("constantes.php");
        include("multiplicar.php");
        // Executa uma função de um arquivo externo
        echo multiplica(dois, quatro);
    ?>

</body>
</html>