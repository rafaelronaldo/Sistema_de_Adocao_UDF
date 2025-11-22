<h1>Listar Adotantes</h1>
<?php
    $sql = "SELECT * FROM adotantes";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Telefone</th>";
        print "<th>CPF</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_adotantes."</td>";
            print "<td>".$row->nome_adotante."</td>";
            print "<td>".$row->telefone_adotante."</td>";
            print "<td>".$row->cpf_adotante."</td>";
            print "<td>
                   <button onclick=\"location.href='?page=editar-adotante&id=".$row->id_adotantes."';\" class='btn btn-success'>Editar</button>
                   
                   <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-adotante&acao=excluir&id=".$row->id_adotantes."';}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum adotante encontrado!</p>";
    }
?>