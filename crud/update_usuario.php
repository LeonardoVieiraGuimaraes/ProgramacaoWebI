<h1>Atualizar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id =". $_REQUEST["id"];
    if (isset($conn)) {
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    }

?>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="update">
    <input type="hidden" name="id" id="id_id" value="<?php echo $row->id;?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" id="id_nome" class="form-control" required value="<?php echo $row->nome;?>">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" id="id_email" class="form-control" required value="<?php echo $row->email;?>">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" id="id_senha" class="form-control" required value="<?php echo $row->senha;?>">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nascimento" id="id_data_nascimento" required class="form-control" value="<?php echo $row->data_nascimento;?>">
    </div>
    <div class="mb3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>
