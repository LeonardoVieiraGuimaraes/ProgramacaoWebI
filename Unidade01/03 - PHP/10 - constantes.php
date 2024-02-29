<!-- A declaração DOCTYPE define o tipo de documento e a versão do HTML -->
<!doctype html>

<!-- A tag <html> é a raiz de um documento HTML e define o idioma do documento como inglês -->
<html lang="en">

<!-- A tag <head> contém metadados/informações sobre o documento -->

<head>

    <!-- A tag <meta charset="pt-br"> define a codificação de caracteres para o documento -->
    <meta charset="pt-br">

    <!-- A tag <meta name="viewport"> torna a página responsiva em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- A tag <meta http-equiv="X-UA-Compatible"> define o modo de compatibilidade do Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- A tag <title> define o título do documento, que é exibido na barra de título do navegador -->
    <title>Constantes </title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- O código PHP começa aqui -->
    <?php
    /* A palavra-chave 'const' é usada para declarar uma constante */
    /* Neste caso, uma constante chamada 'constante' é declarada com o valor "teste" */
    const constante =  "teste";
    /* A função 'echo' é usada para imprimir dados na tela */
    /* Neste caso, o valor da constante 'constante' é impresso */
    echo constante;

    /* Declara uma variável chamada '$nomeCompletoCliente' com o valor "Comel Case" */
    $nomeCompletoCliente = "Comel Case";
    /* Declara uma variável chamada '$telefone_contato_fornecedor' com o valor "Snake Case" */
    $telefone_contato_fornecedor = "Snake Case"
    ?>

</body>

</html>