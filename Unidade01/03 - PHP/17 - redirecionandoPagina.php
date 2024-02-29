<!-- A declaração DOCTYPE define o tipo de documento e a versão do HTML -->
<!doctype html>

<!-- A tag <html> é a raiz de um documento HTML e o atributo lang define a linguagem do documento -->
<html lang="pt-br">

<!-- A tag <head> contém metadados/informações sobre o documento -->

<head>

    <!-- A tag <meta charset="UTF-8"> define a codificação de caracteres para o documento -->
    <meta charset="UTF-8">

    <!-- A tag <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> faz o site responsivo -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- A tag <meta http-equiv="X-UA-Compatible" content="ie=edge"> é usada para definir o modo de compatibilidade do Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- A tag <title> define o título do documento, que é exibido na barra de título do navegador -->
    <title>Redirecinando</title>

</head>

<!-- A tag <body> contém o conteúdo principal do documento HTML -->

<body>

    <?php
    // A função header() é usada para enviar um cabeçalho HTTP bruto
    // Neste caso, ela está sendo usada para redirecionar o usuário para o site da Uniasselvi
    // "Location: http://www.grupouniasselvi.com.br" é o cabeçalho HTTP que informa ao navegador para redirecionar para a URL especificada
    header("Location: http://www.grupouniasselvi.com.br");
    ?>

</body>

</html>