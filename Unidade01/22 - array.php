<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Array UNIASSELVI</title>
</head>

<body>
    <?php
    // Declaração de um array onde cada elemento corresponde a uma letra da palavra UNIASSELVI
    $array = array("U", "N", "I", "A", "S", "S", "E", "L", "V", "I");

    // O loop foreach é usado para iterar sobre cada elemento do array
    // A variável $indice representa o índice do elemento atual
    // A variável $letra representa o valor do elemento atual
    foreach ($array as $indice => $letra) {
        // Impressão do índice e do valor do elemento atual
        echo $indice . ": " . $letra . "<br />";
    }
    ?>
</body>

</html>