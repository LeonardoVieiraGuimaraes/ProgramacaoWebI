 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PRODUCAO";

    // Criar conexão
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Pegar todos os registros de contato
    $sql = "SELECT CODIGO, NOME, MENSGEM FROM CONTATO";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // Obter todos os registros como um array associativo
        $records = $result->fetch_all(MYSQLI_ASSOC);

        // Codificar o array como JSON e exibir
        echo json_encode($records, JSON_UNESCAPED_UNICODE);
    } else {
        echo "Nenhum registro encontrado";
    }

    // Fechar a conexão
    $connection->close();

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "PRODUCAO";

    // // Criar conexão

    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Verificar conexão
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // //pegar ultmimo codigo gravado
    // $sql = "SELECT CODIGO, NOME, MENSGEM FROM CONTATO";
    // $res = $conn->query($sql);

    // if ($res->num_rows > 0) {
    //     $reg = $res->fetch_assoc();
    //     //    para formar um ojbeto json
    //     $jsonHabitoArray = array();
    //     $contador = 0;

    //     // echo num_rows;

    //     while ($reg = $res->fetch_assoc()) {
    //         $jsonHabito = array();
    //         $jsonHabito['codigo'] = $reg['CODIGO'];
    //         $jsonHabito['nome'] = $reg['NOME'];
    //         $jsonHabito['mensagem'] = $reg['MENSGEM'];

    //         $jsonHabitoArray[$contador] = $jsonHabito;
    //     }
    //     echo json_encode(jsonHabitoArray);
    // } else {
    //     echo "Nenhum registro encontrado";
    // }
    ?>