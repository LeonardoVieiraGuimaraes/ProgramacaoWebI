<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
    <link rel="stylesheet" href="02 - styletabela.css">
</head>

<body>
    <table class="bordasimples">
        <?php
        $contador = 0;
        for ($contador = 1; $contador <= 4; $contador++) { ?>
            <tr class="even">
                <td>Nome:</td>
                <td>Sexo</td>
                <td>E-mail</td>
                <td>Mensagem</td>
                <td>Compra com meu salário</td>
            </tr>
            <tr class="even">
                <td><?php echo $_POST["nome"]; ?></td>
                <td><?php
                    if ($_POST["sexo"] == 'masculino') {
                        echo '<img src="h<a href="https://pt.vecteezy.com/vetor-gratis/avatar">Avatar Vetores por Vecteezy</a>" alt="Masculino">';
                    } else {
                        echo '<img src="<a href="https://pt.vecteezy.com/vetor-gratis/feminino">Feminino Vetores por Vecteezy</a>" alt="Feminino">';
                    }
                    ?></td>
                <td><?php echo $_POST["email"]; ?></td>
                <td><?php echo $_POST["mensagem"]; ?></td>
                <td><?php $mensagemDeErro = "";
                    switch ($_POST["salario"]) {
                        case "0":
                            $mensagemDeErro = "Não dá para comprar nada";
                            break;
                        case "1000":
                            $mensagemDeErro = "Dá para comprar um notebook";
                            break;
                        case "2000":
                            $mensagemDeErro = "Dá para comprar um computador";
                            break;
                        case "4000":
                            $mensagemDeErro = "Dá para comprar um notebook";
                            break;
                        default:
                            $mensagemDeErro = "Dá para comprar um carro";
                            break;
                    }
                    echo $mensagemDeErro;
                    ?></td>
            </tr>
    </table>
</body>
<?php } ?>

</html>