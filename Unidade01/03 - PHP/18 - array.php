<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // Declaração de um array com diferentes tipos de dados
    $meuPrimeiroArray = array(1, 2, 3, "Quatro", 5);

    // Impressão dos elementos do array
    // O índice dos arrays em PHP começa em 0
    echo $meuPrimeiroArray[0] . "<br />";
    echo $meuPrimeiroArray[1] . "<br />";
    echo $meuPrimeiroArray[2] . "<br />";
    echo $meuPrimeiroArray[3] . "<br />";
    echo $meuPrimeiroArray[4] . "<br />";

    // Declaração de um array vazio
    $arrayVazio = array();

    // Verificação se o array está definido
    if (isset($arrayVazio)) {
        echo "O array vazio está declarado !<br />";
    }

    // Verificação se o índice 0 do array está definido
    // Como o array é vazio, essa condição não será satisfeita
    if (isset($arrayVazio[0])) {
        echo "A primeira posição do array vazio está declarada.<br />";
    }
    ?>

    <h1>Imprimindo arrays com print_r</h1>
    <?php
    // A função print_r é usada para imprimir arrays de forma legível
    print_r($meuPrimeiroArray);
    echo "<br />";
    print_r($arrayVazio);
    ?>

    <h1>Removendo elementos de arrays em PHP</h1>
    <?php
    // A função unset é usada para destruir uma variável especificada
    // Aqui, ela é usada para remover o elemento no índice 1 do array
    unset($meuPrimeiroArray[1]);
    print_r($meuPrimeiroArray);
    echo "<br />";

    // Verificação se o índice 1 do array ainda está definido
    if (isset($meuPrimeiroArray[1])) {
        echo "Ainda está declarado!<br />";
    } else {
        echo "Foi destruído!<br />";
    }
    ?>

    <h1>Contando os elementos de um array</h1>
    <?php
    // As funções count e sizeof são usadas para contar o número de elementos de um array
    echo count($meuPrimeiroArray);
    echo "<br />";
    echo sizeof($meuPrimeiroArray);
    echo "<br />";
    ?>
</body>

</html>