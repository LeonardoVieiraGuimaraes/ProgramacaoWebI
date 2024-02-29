<?php

$idade = 25;
$sexo = "masculino";

if ($idade >= 18 && $sexo == "feminino") {
    echo "Maior de idade e do sexo feminino \n";
} else {
    echo "Menor de idade ou do sexo masculino \n";
}

if ($idade >= 18 || $sexo == "feminino") {
    echo "Maior de idade e do sexo feminino \n";
} else {
    echo "Menor de idade ou do sexo masculino \n";
}


$valor1 = 10;
$valor2 = 20;

$valor = $valor1 + $valor2;
echo "A soma de $valor1 + $valor2 = $valor";

$valor1 += $valor2;
echo $valor1 . "\n";

$valor1 -= $valor2;
echo $valor1 . "\n";

$valor1 *= $valor2;
echo $valor1;

$valor1 /= $valor2;
echo $valor1;

$idade = 20;

$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $status;
