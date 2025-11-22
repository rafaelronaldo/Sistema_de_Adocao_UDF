<h1>Cadastrar Adotante</h1>
<form action="?page=salvar-adotante" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome Completo</label>
        <input type="text" name="nome_adotante" class="form-control">
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_adotante" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone / WhatsApp</label>
        <input type="text" name="telefone_adotante" class="form-control">
    </div>

    <div class="mb-3">
        <label>Endereço Completo</label>
        <input type="text" name="endereco_adotante" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>