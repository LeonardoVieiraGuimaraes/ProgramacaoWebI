<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Continuando a estudar arrays</title>
</head>

<body>
    <h1>Aqui continuaremos a estudar arrays</h1>
    <h1>Declarando o índice de um array</h1>
    <?php
    // Declaração de um array com índices personalizados
    $array = array("U", "N", "I", "A", "S", "S", "E");
    $array["meio"] = "LV";
    $array["ultimaLetra"] = "I";
    print_r($array);
    ?>

    <h1>Imprimindo o array:</h1>
    <?php
    // O loop foreach é usado para iterar sobre cada elemento do array
    foreach ($array as $valor) {
        echo $valor;
    }
    ?>
    <h1>Imprimindo o array com quebra de linha:</h1>
    <?php
    foreach ($array as $valor) {
        echo $valor . "<br />";
    }
    ?>

</body>

</html>