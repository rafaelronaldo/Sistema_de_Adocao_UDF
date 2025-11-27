<h1>Realizar Adoção</h1>

<form action="?page=salvar-adocao" method="POST">
    <input type="hidden" name="acao" value="adotar">

    <div class="mb-3">
        <label for="animais_id_animais" class="form-label">Animal para Adoção</label>
        <select name="animais_id_animais" id="animais_id_animais" class="form-select" required>
            <option value="">Selecione o Animal</option>
            <?php
                $sql_animais = "SELECT a.id_animais, a.nome_animais, r.nome_raca 
                                FROM animais a
                                INNER JOIN racas r ON a.racas_id_racas = r.id_racas
                                WHERE a.status_animais = 'Disponível' 
                                ORDER BY a.nome_animais";
                
                $res_animais = $conn->query($sql_animais);

                if($res_animais->num_rows > 0){
                    while($row_animal = $res_animais->fetch_object()){
                        print "<option value='".$row_animal->id_animais."'>".$row_animal->nome_animais." (".$row_animal->nome_raca.")</option>";
                    }
                } else {
                    print "<option disabled>Nenhum animal disponível para adoção.</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="adotantes_id_adotantes" class="form-label">Adotante</label>
        <select name="adotantes_id_adotantes" id="adotantes_id_adotantes" class="form-select" required>
            <option value="">Selecione o Adotante</option>
            <?php
                $sql_adotantes = "SELECT * FROM adotantes ORDER BY nome_adotante";
                
                $res_adotantes = $conn->query($sql_adotantes);

                if($res_adotantes->num_rows > 0){
                    while($row_adotante = $res_adotantes->fetch_object()){
                        print "<option value='".$row_adotante->id_adotantes."'>".$row_adotante->nome_adotante." (CPF: ".$row_adotante->cpf_adotante.")</option>";
                    }
                } else {
                    print "<option disabled>Nenhum adotante cadastrado.</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="data_adocao" class="form-label">Data da Adoção</label>
        <input type="date" name="data_adocao" id="data_adocao" class="form-control" value="<?php echo date('Y-m-d'); ?>"
            required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Confirmar Adoção</button>
    </div>
</form>