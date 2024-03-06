<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
</head>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello World</title>
    <link rel="stylesheet" href="02 - style.css" />
</head>

<body>
    <form id="form">
        <fieldset class="grupo" id="grupo">
            <div class="campo" id="campo-informacoes">
                <legend id="legend-informacoes">Informações Pessoais</legend>
            </div>
            <div class="campo" id="campo-sexo">
                <label id="label-sexo">
                    Sexo:
                    <input type="radio" id="sexo-masculino" name="sexo" value="masculino" />
                    Masculino
                    <input type="radio" id="sexo-feminino" name="sexo" value="feminino" />
                    Feminino
                </label>
            </div>
            <div class="campo" id="campo-email">
                <label id="label-email">
                    Email:
                    <input type="email" id="email" name="email" />
                </label>
            </div>
            <div class="campo" id="campo-mensagem">
                <label id="label-mensagem">
                    Mensagem:
                    <textarea id="mensagem" name="mensagem"></textarea>
                </label>
            </div>
        </fieldset>
        <button type="submit" id="botao">Enviar</button>
    </form>
</body>

</html>

<body>

</body>

</html>