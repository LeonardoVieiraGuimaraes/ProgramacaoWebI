<h1>Novo Usuário</h1>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="create">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" id="id_nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" id="id_email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" id="id_senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nascimento" id="id_data_nascimento" class="form-control" required>
    </div>
    <div class="mb3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>
