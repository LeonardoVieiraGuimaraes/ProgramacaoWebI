<!-- A declaração DOCTYPE define o tipo de documento e a versão do HTML -->
<!DOCTYPE html>

<!-- A tag <html> é a raiz de um documento HTML e define o idioma do documento como português brasileiro -->
<html lang="pt-br">

<!-- A tag <head> contém metadados/informações sobre o documento -->

<head>

    <!-- A tag <meta charset="UTF-8"> define a codificação de caracteres para o documento -->
    <meta charset="UTF-8" />

    <!-- A tag <meta name="viewport"> torna a página responsiva em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- A tag <title> define o título do documento, que é exibido na barra de título do navegador -->
    <title>Document</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <!-- A tag <ul> define uma lista não ordenada -->
    <ul>
        <!-- O código PHP começa aqui -->
        <?php
        /* A função 'array' cria um array */
        /* Neste caso, um array com as letras de 'UNIASSELVI' é criado */
        $arrayUniasselvi = array("U", "N", "I", "A", "S", "S", "E", "L", "V", "I");

        /* O loop 'foreach' é usado para percorrer cada item do array */
        /* '$indice' é a chave do item atual e '$valor' é o valor do item atual */
        foreach ($arrayUniasselvi as $indice => $valor) {
        ?>
            <!-- A tag <li> define um item da lista -->
            <li>
                <!-- O código PHP começa aqui -->
                <?php
                /* A função 'echo' é usada para imprimir dados na tela */
                /* Neste caso, a chave e o valor do item atual do array são impressos */
                echo $indice . ": " . $valor;
                ?>
            </li>
        <?php
            /* O loop 'foreach' termina aqui */
        }
        ?>
    </ul>

</body>

</html>