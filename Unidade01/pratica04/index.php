<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Fluxo</title>
</head>
<body>

    <h1>OPERADOTES LÓGICOS, MATEMÁTICOS E CONDICIONAIS </h1>
    <h1>CONTROLANDO O FLUXO DO CÓDIGO COM IF, ELSE, SWITCH, WHILE E FOR</h1>

    <h1>IF</h1>
    <?php
        //Demonstração de if em PHP
        //De acordo com o valor da variável
        //$saldoBancario
        //o resultado do programa pode variar.

        $saldoBancario = 42389.50;
        if ($saldoBancario >= 42390) {
            echo "Vou comprar um carro 0km :-D";
        } else { // o else é opcional
            echo "Vou comprar um carro usado :-|";
        }
    ?>

    <h1>Switch</h1>
    <?php
        /* Demonstração de switch em PHP
        * Mensagem de erro/sucesso para validação de formulários.
        * O algoritmo monta a mensagem de erro de acordo com
        * a quantidade de erros encontrada.
        */
        $quantidadeErros = 3; // tem que ser maior ou igual a 0
        switch ($quantidadeErros){
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

    <h1>While</h1>
    <?php
        /* Demonstração de while em PHP
        * O while recebe como parâmetro (entre
        parênteses)
        * um valor booleano e permanece em looping até
        quanto
        * a condição for verdadeira.
        */
        $contador = 0;
        While ($contador++ < 10) {
            Echo $contador."<br />";
        }
    ?>

        <h1>A variável não está declarada:</h1>
    <?php
    // Declara uma variável porém deixa-a nula:
    $variavel = null;
        if (isset($variavel)){
        echo "A variável está declarada!";
        } else {
            echo "A variável não está declarada!";
    }
    ?>

    <h1>A variável está declarada:</h1>
     <?php
    // Declara u
    // Declara uma variável e a inicializa:
    $variavel = "variável";
    if (isset($variavel)){
    echo "A variável está declarada!";
    } else {
            echo "A variável não está declarada!";
    }
    ?>
</body>
</html>
