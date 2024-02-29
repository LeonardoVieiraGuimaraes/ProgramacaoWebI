<!-- A declaração DOCTYPE define o tipo de documento e a versão do HTML -->
<!doctype html>

<!-- A tag <html> é a raiz de um documento HTML e define o idioma do documento como português brasileiro -->
<html lang="pt-br">

<!-- A tag <head> contém metadados/informações sobre o documento -->

<head>

    <!-- A tag <meta charset="UTF-8"> define a codificação de caracteres para o documento -->
    <meta charset="UTF-8" />

    <!-- A tag <meta name="viewport"> torna a página responsiva em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- A tag <meta http-equiv="X-UA-Compatible"> define o modo de compatibilidade do Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- A tag <title> define o título do documento, que é exibido na barra de título do navegador -->
    <title>Controle de Fluxo</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>OPERADOTES LÓGICOS, MATEMÁTICOS E CONDICIONAIS </h1>
    <h1>CONTROLANDO O FLUXO DO CÓDIGO COM IF, ELSE, SWITCH, WHILE E FOR</h1>

    <!-- O código PHP começa aqui -->
    <?php
    /* Declara uma variável chamada '$saldoBancario' com o valor 42389.50 */
    /* A estrutura de controle 'if' verifica se o valor de '$saldoBancario' é maior ou igual a 42390 */
    /* Se a condição for verdadeira, imprime "Vou comprar um carro 0km :-D" */
    /* Se a condição for falsa, imprime "Vou comprar um carro usado :-|" */
    $saldoBancario = 42389.50;
    if ($saldoBancario >= 42390) {
        echo "Vou comprar um carro 0km :-D";
    } else {
        echo "Vou comprar um carro usado :-|";
    }
    ?>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>Switch</h1>
    <?php
    /* Declara uma variável chamada '$quantidadeErros' com o valor 3 */
    /* A estrutura de controle 'switch' verifica o valor de '$quantidadeErros' */
    /* Dependendo do valor, uma mensagem de erro diferente é atribuída à variável '$mensagemDeErro' */
    /* A mensagem de erro é então impressa na tela */
    $quantidadeErros = 3;
    switch ($quantidadeErros) {
        case 0:
            $mensagemDeErro = "Nenhum";
            break;
        case 1:
            $mensagemDeErro = "Um";
            break;
        case 2:
            $mensagemDeErro = "Dois";
            break;
        default:
            $mensagemDeErro = "Mais de dois";
    }
    $mensagemDeErro .= " erro(s) encontrado(s)";
    echo $mensagemDeErro;
    ?>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>While</h1>
    <?php
    /* Declara uma variável chamada '$contador' com o valor 0 */
    /* A estrutura de controle 'while' verifica se o valor de '$contador' é menor que 10 */
    /* Enquanto a condição for verdadeira, o valor de '$contador' é impresso na tela e incrementado em 1 */
    $contador = 0;
    while ($contador++ < 10) {
        echo $contador . "<br />";
    }
    ?>

    <!-- A tag <h1> define um cabeçalho de nível 1 -->
    <h1>For</h1>
    <?php
    /* Demonstração de for em PHP
    * O for recebe três parâmetros (entre parênteses
    *, separados por ponto e vírgula (;))
    * O primeiro é a inicialização do contador
    * O segundo é um booleano que define até quando o
    looping será executado
    * O terceiro é um incremento para o contador
    */
    for ($contador = 1; $contador <= 10; $contador++) {
        echo $contador . "<br />";
    }
    ?>

</body>

</html>