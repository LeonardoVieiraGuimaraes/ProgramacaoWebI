<!-- EXEMPLOS COM O COMANDO PRINT DO PHP -->
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
    <title>Estudando Strings no PHP</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>Estudando strings no PHP!</h1>

    <!-- O código PHP começa aqui -->
    <?php
    // Declaramos uma variável string para armazenar
    // o nome de uma linguagem de programação.
    $linguagemDeProgramacao = "PHP";
    ?>

    <!-- A tag <h2> define um cabeçalho de nível 2 -->
    <h2>Exibindo a variável com echo e aspas simples:</h2>

    <?php
    // O comando 'echo' imprime a string na tela
    // Como a string está entre aspas simples, a variável não é interpretada, e '$linguagemDeProgramacao' é impressa como texto
    echo '<p>Estudar ' . $linguagemDeProgramacao . ' é muito Legal !! :-)</p>';
    ?>

    <!-- A tag <h2> define um cabeçalho de nível 2 -->
    <h2>Exibindo a variável com echo e aspas duplas:</h2>

    <?php
    // O comando 'echo' imprime a string na tela
    // Como a string está entre aspas duplas, a variável é interpretada, e o valor de '$linguagemDeProgramacao' é impresso
    echo "<p>Estudar $linguagemDeProgramacao é muito Legal !! :-)</p>";
    ?>

</body>

</html>