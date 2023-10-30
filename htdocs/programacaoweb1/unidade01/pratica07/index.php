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
    <?php
    // Declaração de um array
    // Note que podemos inserir tanto tipos
    // numéricos quanto strings
    // Em seguida obtemos o valor de cada posição do array
    // Utilizando o nome da variável seguido do índice da posição
    // entre colchetes
    // Note que o indice inicia em zero
    $meuPrimeiroArray = array(1, 2, 3, "Quatro", 5);
    echo $meuPrimeiroArray[0]."<br />";
    echo $meuPrimeiroArray[1]."<br />";
    echo $meuPrimeiroArray[2]."<br />";
    echo $meuPrimeiroArray[3]."<br />";
    echo $meuPrimeiroArray[4]."<br />";
    // Declaraçao de um array vazio
    $arrayVazio = array();
    // Note que a variável do array está definida
    if (isset($arrayVazio)){
        echo "O array vazio está declarado !<br />";
    }
    // Porém nenhum índice possui valor
    // por exemplo, tentaremos acessar o índice zero
    if (isset($arrayVazio[0])){
        // Não vai passar aqui!
        echo "A primeira posição do array vazio está declarada.<br />";
    }
    ?>

    <h1>Imprimindo arrays com print_r</h1>
    <?php
        print_r($meuPrimeiroArray);
        echo "<br />";
        print_r($arrayVazio);
    ?>

    <h1>Removendo elementos de arrays em PHP</h1>
    <?php
        unset($meuPrimeiroArray[1]);
        print_r($meuPrimeiroArray);
        echo "<br />";
        if (isset($meuPrimeiroArray[1])){
            echo "Ainda está declarado!<br />";
        } else {
            echo "Foi destruído!<br />";
        }
    ?>

    <h1>Contando os elementos de um array</h1>
    <?php
        echo count($meuPrimeiroArray);
        echo "<br />";
        echo sizeof($meuPrimeiroArray);
        echo "<br />";
    ?>


    <h1>Declarando o índice de um array</h1>
    <?php
        $array = array("U", "N", "I", "A", "S", "S", "E");
        $array["meio"] = "LV";
        $array["ultimaLetra"] = "I";
        print_r($array);
    ?>

    <h1>Imprimindo o array:</h1>
    <?php
    foreach ($array as $valor) {
        echo $valor;
    }
    ?>
    <h1>Imprimindo o array com quebra de linha:</h1>
    <?php
        foreach ($array as $valor) {
            echo $valor."<br />";
        }
    ?>

</body>
</html>