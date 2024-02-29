<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DECLARAÇÃO DE FUNÇÕES</title>
</head>
<body>
<h1>Declarando funções</h1>
    <?php
    // Declara uma função para somar
    // dois valores
    function soma($valor1, $valor2) {
        $resultado = $valor1 + $valor2;
        return $resultado;
    }
    ?>

    <h2>Agora vamos usar a função soma com os valores 3 e 6!</h2>
    <?php
        $tres = 12;
        $seis = 6;
        echo soma($tres, $seis);
    ?>
</body>
</html>
