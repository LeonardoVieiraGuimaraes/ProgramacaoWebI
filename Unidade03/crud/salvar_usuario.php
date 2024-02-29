<?php
    switch ($_REQUEST["acao"]) {
        case "create":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nascimento = $_POST["data_nascimento"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nascimento}')";

            if (isset($conn)) {
                $res = $conn->query($sql);
                if ($res){
                    print "<script>
                        alert('Cadastro realizado com sucesso');
                        location.href = '?page=listar';
                    </script>";
                }else {
                    echo"<script>
                       alert('Cadastro não realizado');
                        location.href = '?page=listar';
                       </script>";
                }
            }
            break;

        case "update":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nascimento = $_POST["data_nascimento"];

            $sql = "UPDATE usuarios SET 
                    nome='{$nome}', 
                    email='{$email}',
                    senha='{$senha}',
                    data_nascimento='{$data_nascimento}'
                    WHERE 
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res){
                echo "<script>
                    alert('Cadastro atualizado com sucesso');
                    location.href = '?page=listar';
                </script>";
            }else {
                echo"<script>
                   alert('Cadastro não atualizado');
                    location.href = '?page=listar';
                   </script>";
                }

            break;

        case "delete":
            $sql = "DELETE FROM usuarios WHERE id =". $_REQUEST["id"];

            $res = $conn->query($sql);
            if ($res){
                echo "<script>
                    alert('Cadastro excluído com sucesso');
                    location.href = '?page=listar';
                </script>";
            }else {
                echo"<script>
                   alert('Cadastro não excluído');
                    location.href = '?page=listar';
                   </script>";
            }

            break;
        default:
            print('erro');


    }