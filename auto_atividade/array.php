<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoatividade<</title>
</head>
<body>
    <ul>
    <?php
        $arrayUniasselvi = Array ("U", "N", "I",  "A", "S", "S", "E", "L", "V", "I");

        foreach ($arrayUniasselvi as $indice => $valor) {

        echo "<li>".$indice.": ".$valor."</li>";
        }
    ?>
    </ul>
</body>
</html>
