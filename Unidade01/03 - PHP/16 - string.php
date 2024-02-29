<!-- INVERTENDO UMA STRING EM PHP -->

<!-- A declaração DOCTYPE define o tipo de documento e a versão do HTML -->
<!DOCTYPE html>

<!-- A tag <html> é a raiz de um documento HTML e o atributo lang define a linguagem do documento -->
<html lang="pt-br">

<!-- A tag <head> contém metadados/informações sobre o documento -->

<head>

    <!-- A tag <meta charset="UTF-8"> define a codificação de caracteres para o documento -->
    <meta charset="UTF-8">

    <!-- A tag <meta name="viewport" content="width=device-width, initial-scale=1.0"> faz o site responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- A tag <title> define o título do documento, que é exibido na barra de título do navegador -->
    <title>Manipulação de Strings em PHP</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- INVERTENDO UMA STRING EM PHP -->
    <h1>Invertendo uma string em PHP</h1>
    <?php
    // A função strrev() é usada para inverter uma string
    // Aqui, a string "UNIASSELVI" é invertida
    $stringNormal = "UNIASSELVI";
    $stringInvertida = strrev($stringNormal);
    echo $stringInvertida;
    ?>

    <!-- TRANSFORMANDO UMA STRING PARA MINÚSCULO -->
    <h1>Transformando uma string para minúsculo em PHP</h1>
    <?php
    // A função strtolower() é usada para transformar uma string para minúsculo
    // Aqui, a string "com a UNIASSELVI, posso ver o meu futuro!" é transformada para minúsculo
    $variavelCaseMisturado = "com a UNIASSELVI, posso ver o meu futuro!";
    echo strtolower($variavelCaseMisturado);
    ?>

    <!-- TRANSFORMANDO UMA STRING PARA MAIÚSCULO -->
    <h1>Transformando uma string para maiúsculo em PHP</h1>
    <?php
    // A função strtoupper() é usada para transformar uma string para maiúsculo
    // Aqui, a string "com a UNIASSELVI, posso ver o meu futuro!" é transformada para maiúsculo
    echo strtoupper($variavelCaseMisturado);
    ?>

    <!-- TRANSFORMANDO A PRIMEIRA LETRA DA STRING PARA MAIÚSCULO -->
    <h1>Transformando a primeira letra da string para maiúsculo em PHP</h1>
    <?php
    // A função ucfirst() é usada para transformar a primeira letra da string para maiúsculo
    // Aqui, a primeira letra da string "com a UNIASSELVI, posso ver o meu futuro!" é transformada para maiúsculo
    echo ucfirst($variavelCaseMisturado);
    ?>

    <!-- SUBSTITUINDO STRINGS EM PHP -->
    <h1>Substituição de strings em PHP</h1>
    <?php
    // A função str_replace() é usada para substituir uma string por outra dentro de uma string
    // Aqui, a palavra "Algoritmos" é substituída por "Programação Web I" na string "A disciplina Algoritmos é demais!"
    $variavelTextoOriginal = "A disciplina Algoritmos é demais!";
    $variavelTextoAlterado = str_replace("Algoritmos", "Programação Web I", $variavelTextoOriginal);
    echo $variavelTextoAlterado;
    ?>

    <!-- OBTENDO O TAMANHO DE STRINGS EM PHP -->
    <h1>Obtendo o tamanho de strings em PHP</h1>
    <?php
    // A função strlen() é usada para retornar o tamanho da string
    // Aqui, o tamanho da string "PHP" é calculado
    $nomeBonito = "PHP";
    $tamanho = strlen($nomeBonito);
    echo "O nome " . $nomeBonito . " possui " . $tamanho . " letras";
    ?>

</body>

</html>