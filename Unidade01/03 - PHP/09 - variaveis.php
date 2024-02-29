<!-- A declaração DOCTYPE define o tipo de documento e a versão do HTML -->
<!doctype html>

<!-- A tag <html> é a raiz de um documento HTML e define o idioma do documento como português brasileiro -->
<html lang="pt-br">

<!-- A tag <head> contém metadados/informações sobre o documento -->

<head>

    <!-- A tag <meta charset="UTF-8"> define a codificação de caracteres para o documento -->
    <meta charset="UTF-8" />

    <!-- A tag <meta name="viewport"> torna a página responsiva em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <!-- A tag <meta http-equiv="X-UA-Compatible"> define o modo de compatibilidade do Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- A tag <title> define o título do documento, que é exibido na barra de título do navegador -->
    <title>Document</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>Vamos estudar as variáveis!</h1>

    <!-- O código PHP começa aqui -->
    <?php
    /* Declara uma variável String */
    $variavelString123 = "um, dois, três";
    /* A função 'echo' é usada para imprimir dados na tela */
    /* Neste caso, o valor da variável '$variavelString123' é impresso */
    echo "<p>" . $variavelString123 . "</p>";

    /* Declara uma variável Integer */
    $variavelInteger = 123;
    /* A função 'echo' é usada para imprimir dados na tela */
    /* Neste caso, o valor da variável '$variavelInteger' é impresso */
    echo "<p>" . $variavelInteger . "</p>";

    /* Declara uma variável Double, Float */
    $variavelDouble = 0.24;
    /* A função 'echo' é usada para imprimir dados na tela */
    /* Neste caso, o valor da variável '$variavelDouble' é impresso */
    echo "<p>" . $variavelDouble . "</p>";

    /* Declara uma variável Boolean */
    $variavelBool = false;
    /* A função 'echo' é usada para imprimir dados na tela */
    /* Neste caso, o valor da variável '$variavelBool' é impresso */
    /* Como '$variavelBool' é 'false', nada será impresso */
    echo "<p>" . $variavelBool . "</p>";
    ?>

</body>

</html>