<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings</title>
</head>
<body>

    <h1>Estudando strings no PHP!</h1>
    <?php
        // Declaramos uma variável string para armazenar
        // o nome de uma linguagem de programação.
        $linguagemDeProgramacao = "PHP";
    ?>
    <h2>echo com aspas simples:</h2>
    <?php
        echo '<p>Estudar $linguagemDeProgramacao é muito Legal !! :-)</p>';
    ?>

    <h2>echo com aspas duplas:</h2>
    <?php
        echo "<p>Estudar $linguagemDeProgramacao é muito Legal !! :-)</p>";
    ?>

    <h1>Vamos estudar o método print</h1>
    <?php
        // Declaramos uma variável string para armazenar
        // o nome de uma instituição de ensino.
        $instituicaoDeEnsino = "UNIASSELVI";
    ?>
    <h2>print com aspas simples:</h2>
    <?php

        print '<p>Estudar na $instituicaoDeEnsino é muito Legal !! :-)</p>';
    ?>

    <h2>print com aspas duplas:</h2>
    <?php
        print "<p>Estudar na $instituicaoDeEnsino é muito Legal !! :-)</p>";
    ?>

    <h1>Estudando as funções trim()</h1>
    <h2>Removendo espaços em branco em volta da string</h2>

    <?php
    // Remove os espaços em branco em volta da string
        $stringComEspacosEmVolta = " Três espaços em cada lado ";
        echo "{".$stringComEspacosEmVolta."}<br />";
    ?>

    <h2>Removendo espaços em branco à esquerda da string</h2>
    <?php
        $stringComEspacosAesquerda = " Três espaços à esquerda";
        echo "{".$stringComEspacosAesquerda."}<br />";
        // Remove os espaços em branco em volta da string
        $stringSemEspacosAesquerda = trim($stringComEspacosAesquerda);
        echo "{".$stringSemEspacosAesquerda."}<br />";
    ?>

    <h1>Invertendo uma string em PHP</h1>
    <?php
        $stringNormal = "UNIASSELVI";
        $stringInvertida = strrev($stringNormal);
        echo $stringInvertida;
    ?>

    <h1>Manipulando o CASE de strings em PHP</h1>
    <?php
        $variavelCaseMisturado = "com a UNIASSELVI, posso ver o meu futuro!";
    ?>

        <h2>Invertendo para minúscula:</h2>
    <?php
        echo strtolower($variavelCaseMisturado);
    ?>

    <h2>Invertendo para maiúscula:</h2>
    <?php
        echo strtoupper($variavelCaseMisturado);
    ?>

    <h2>Invertendo a primeira letra para maiúscula:</h2>
    <?php
        echo ucfirst($variavelCaseMisturado);
    ?>


    <h1>Substituição de strings em PHP</h1>
    <?php
        $variavelTextoOriginal = "A disciplina Algoritmos é demais!";
        $variavelTextoAlterado = str_replace("Algoritmos","Programação Web I", $variavelTextoOriginal);
        echo $variavelTextoAlterado;
    ?>

    <h1>Obtendo o tamanho de strings em PHP</h1>
    <?php
        $nomeBonito = "PHP";
        $tamanho = strlen($nomeBonito);
        echo "O nome ".$nomeBonito." possui ".$tamanho." letras";
    ?>

</body>
</html>
