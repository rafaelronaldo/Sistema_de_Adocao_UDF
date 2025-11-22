<h1>Editar Adotante</h1>
<?php
    $sql = "SELECT * FROM adotantes WHERE id_adotantes=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-adotante" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_adotantes; ?>">

    <div class="mb-3">
        <label>Nome Completo</label>
        <input type="text" name="nome_adotante" value="<?php print $row->nome_adotante; ?>" class="form-control"
            required>
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_adotante" value="<?php print $row->cpf_adotante; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone_adotante" value="<?php print $row->telefone_adotante; ?>" class="form-control"
            required>
    </div>

    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_adotante" value="<?php print $row->endereco_adotante; ?>"
            class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>