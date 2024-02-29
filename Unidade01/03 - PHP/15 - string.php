<!-- REMOVENDO ESPAÇOS EM BRANCO EM VOLTA DA STRING COM PHP -->
<!-- A tag <h1> define um cabeçalho de nível 1 -->
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
    <title>Removendo Espaços em Branco em Strings com PHP</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>Estudando as funções trim(), ltrim() e rtrim()</h1>

    <!-- A tag <h2> define um cabeçalho de nível 2 -->
    <h2>Removendo espaços em branco em volta da string</h2>

    <!-- O código PHP começa aqui -->
    <?php
    // Declaramos uma variável string com espaços em branco em volta
    $stringComEspacosEmVolta = " Três espaços em cada lado ";
    // Imprimimos a string com espaços em volta
    echo "{" . $stringComEspacosEmVolta . "}<br />";
    // Usamos a função trim() para remover os espaços em branco em volta da string
    $stringSemEspacosEmVolta = trim($stringComEspacosEmVolta);
    // Imprimimos a string sem espaços em volta
    echo "{" . $stringSemEspacosEmVolta . "}<br />";
    ?>

    <!-- A tag <h2> define um cabeçalho de nível 2 -->
    <h2>Removendo espaços em branco à esquerda da string</h2>

    <?php
    // Declaramos uma variável string com espaços em branco à esquerda
    $stringComEspacosAesquerda = " Três espaços à esquerda";
    // Imprimimos a string com espaços à esquerda
    echo "{" . $stringComEspacosAesquerda . "}<br />";
    // Usamos a função ltrim() para remover os espaços em branco à esquerda da string
    $stringSemEspacosAesquerda = ltrim($stringComEspacosAesquerda);
    // Imprimimos a string sem espaços à esquerda
    echo "{" . $stringSemEspacosAesquerda . "}<br />";
    ?>

    <!-- A tag <h2> define um cabeçalho de nível 2 -->
    <h2>Removendo espaços em branco à direita da string</h2>

    <?php
    // Declaramos uma variável string com espaços em branco à direita
    $stringComEspacosAdireita = "Três espaços à direita ";
    // Imprimimos a string com espaços à direita
    echo "{" . $stringComEspacosAdireita . "}<br />";
    // Usamos a função rtrim() para remover os espaços em branco à direita da string
    $stringSemEspacosAdireita = rtrim($stringComEspacosAdireita);
    // Imprimimos a string sem espaços à direita
    echo "{" . $stringSemEspacosAdireita . "}<br />";
    ?>

</body>

</html>