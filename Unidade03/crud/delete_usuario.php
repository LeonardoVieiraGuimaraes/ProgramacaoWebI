<?php
    $sql = "SELECT * FROM usuarios WHERE id =". $_REQUEST["id"];
    if (isset($conn)) {
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    }
?>

<!--    <input type="hidden" name="acao" value="delete">-->
<!--    <input type="hidden" name="id" id="id_id" value="--><?php //echo $row->id;?><!--">-->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" id="id_nome" class="form-control" required disabled value="<?php echo $row->nome;?>">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" id="id_email" class="form-control" required disabled value="<?php echo $row->email;?>">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nascimento" id="id_data_nascimento" required disabled class="form-control" value="<?php echo $row->data_nascimento;?>">
    </div>



    <div class="mb3">

        <?php
             echo "<a class='btn btn-danger' onclick=\"if (confirm('Tem certeza que deseja excluir?')){
        location.href='?page=salvar&acao=delete&id=".$row->id."';}else{location.href='?page=listar';}\"> Excluir</a>"
        ?>


               <!--        <p>Deseja excluir o cadastro?</p>-->
<!--        <button type="submit" class="btn btn-primary" onclick="if (confirm('Tem certeza que deseja Exluir?')){location.href='?page=salvar$acao=excluir'">Excluir</button>-->
    </div>

