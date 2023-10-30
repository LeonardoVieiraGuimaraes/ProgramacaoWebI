<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style01.css">
    <link rel="stylesheet" href="css/style02.css">
    <title>Aula Uniasselvi</title>
</head>
<body>
    <form action="grava.php" method="post">
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" style="width: 10em" value="">
                </div>
            </fieldset>
            <div class="campo">
                <label>Sexo</label>
                <label>
                    <input type="radio" name="sexo" value="não informado" checked>Não informado
                </label>
                <label>
                    <input type="radio" name="sexo" value="masculino">Masculino
                </label>
                <label>
                    <input type="radio" name="sexo" value="feminino">Feminino
                </label>
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 20em" value="">
            </div>

            <div class="campo">
                <label for="salario">Salario</label>
                <input type="text" id="salario" name="salario" style="width: 100px" value="">
            </div>

            <div class="campo">
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" cols="30" rows="6" style="width: 20em"></textarea>
            </div>
            <button type="submit" name="botao" id="botao" class="botao">Enviar</button>
        </fieldset>

    </form>

</body>
</html>

