<h1>Lista de Usuários</h1>

<?php
    $sql = "SELECT * FROM usuarios";
    if (isset($conn)) {
        $res = $conn->query($sql);
        $qtd = $res->num_rows;
        if ($qtd > 0) {
            echo "<table class='table table-hover'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>NOME</th>";
            echo "<th>E-MAIL</th>";
            echo "<th>DATA DE NASCIMENTO</th>";
            echo "<th>EDITAR</th>";
            echo "<th>EXCLUIR</th>";
            echo "</tr>";
            while ($row = $res->fetch_object()) {

                echo "<tr>";
                echo "<td>" . $row->id;
                echo "<td>" . $row->nome;
                echo "<td>" . $row->email;
                echo "<td>" . date("d/m/Y", strtotime($row->data_nascimento));
                echo "<td class='text-center'><a href='?page=update&id=" . $row->id ."'><i class='bi bi-pencil-square'></i></a>";
                echo "<td class='text-center'><a href='?page=delete&id=" . $row->id ."'><i class='bi bi-trash'></i></a>";
                echo "</tr>";

            }
            echo "</table>";
        } else {
            echo "<p class = 'alert alert-danger'> Não encontrou resultado! </p>";
        }
    }


    //    date_format(data_nascimento,"d/m/Y");


