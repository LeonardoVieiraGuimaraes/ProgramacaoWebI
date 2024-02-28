<!-- A declaração DOCTYPE define o tipo de documento e a versão do HTML -->
<!DOCTYPE html>

<!-- A tag <html> é a raiz de um documento HTML e define o idioma do documento como português -->
<html lang="pt-br">

<!-- A tag <head> contém metadados/informações sobre o documento -->

<head>

    <!-- A tag <meta charset="UTF-8"> define a codificação de caracteres para o documento -->
    <meta charset="UTF-8">

    <!-- A tag <meta name="viewport"> torna a página responsiva em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- A tag <title> define o título do documento, que é exibido na barra de título do navegador -->
    <title>Document</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>A variável não está declarada:</h1>

    <!-- O código PHP começa aqui -->
    <?php
    /* Declara uma variável chamada '$variavel' mas não atribui nenhum valor a ela */
    /* A função 'isset' verifica se a variável '$variavel' está definida */
    /* Como a variável não está definida, imprime "A variável não está declarada!" */
    $variavel;
    if (isset($variavel)) {
        echo "A variável está declarada!";
    } else {
        echo "A variável não está declarada!"; // aqui :-)
    }
    ?>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>A variável está declarada:</h1>

    <?php
    /* Declara uma variável chamada '$variavel' e atribui o valor "variável" a ela */
    /* A função 'isset' verifica se a variável '$variavel' está definida */
    /* Como a variável está definida, imprime "A variável está declarada!" */
    $variavel = "variável";
    if (isset($variavel)) {
        echo "A variável está declarada!"; // aqui :-)
    } else {
        echo "A variável não está declarada!";
    }
    ?>

</body>

</html>

</html>