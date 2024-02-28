<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <ul>
            <?php
            $arrayUniasselvi = array("U", "N", "I", "A", "S", "S", "E", "L", "V", "I");
            foreach ($arrayUniasselvi as $indice => $valor) {
            ?>
                <li>
                    <?php
                    echo $indice . ": " . $valor;
                    ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </body>

</html>