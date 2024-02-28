<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
    <style>
        table.bordasimples {
            border.collapse: collapse;
        }
        table.bordasimples tr td {
            border: 1px solid #FF0000;
        }
        /*td:houver {*/
        /*    background-color:  #F0F0F0;*/
        /*}*/
    </style>
</head>
<body>
    <table class="bordasimples">
        <tr class="even">
            <td>Nome</td>
            <td>Sexo</td>
            <td>E-mail</td>
            <td>Salário</td>
            <td>Mensagem</td>
        </tr>
        <?php
        $contador = 0;
        for ($contador = 1; $contador <=4; $contador++){ ?>
        <tr class="even">

            <td><?php echo $_POST["nome"]; ?></td>
            <td><?php
                if ($_POST["sexo"] == ""){
                    echo "";
                }
                elseif ($_POST["sexo"] == "masculino")
                {
                    echo "<img src='./img/face-icon.png' alt='masculino' style='width: 100px'>";
                } elseif ($_POST["sexo"] == "feminino") {
                    echo " <img src='./img/female-face-icon.png' alt='feminino' style='width: 100px'>";
                }
               ?>
            </td>
            <td><?php echo $_POST["email"]; ?></td>

            <td><?php
                $mensagem_erro = "";

                switch ($_POST["salario"]) {
                    case 0:
                        $mensagem_erro = "Não Posso Comprar Nada";
                        break;
                    case 1000:
                        $mensagem_erro = "Posso Comprar um Notebook";
                        break;
                    default:
                        $mensagem_erro = "Posso Comprar um Carro";
                }
                echo $mensagem_erro;
                ?>
            </td>
            <td><?php echo $_POST["mensagem"]; ?></td>

        </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>