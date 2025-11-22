<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome_adotante"];
        $cpf = $_POST["cpf_adotante"];
        $tel = $_POST["telefone_adotante"];
        $end = $_POST["endereco_adotante"];

        $sql = "INSERT INTO adotantes (nome_adotante, cpf_adotante, telefone_adotante, endereco_adotante) 
                VALUES ('{$nome}', '{$cpf}', '{$tel}', '{$end}')";
        
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Adotante cadastrado!');</script>";
            print "<script>location.href='?page=listar-adotante';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar');</script>";
            print "<script>location.href='?page=listar-adotante';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome_adotante"];
        $cpf = $_POST["cpf_adotante"];
        $tel = $_POST["telefone_adotante"];
        $end = $_POST["endereco_adotante"];

        $sql = "UPDATE adotantes SET 
                    nome_adotante='{$nome}', 
                    cpf_adotante='{$cpf}', 
                    telefone_adotante='{$tel}', 
                    endereco_adotante='{$end}' 
                WHERE id_adotantes=".$_REQUEST["id"];
        
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-adotante';</script>";
        } else {
            print "<script>alert('Erro ao editar');</script>";
            print "<script>location.href='?page=listar-adotante';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM adotantes WHERE id_adotantes=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-adotante';</script>";
        } else {
            print "<script>alert('Erro ao excluir');</script>";
            print "<script>location.href='?page=listar-adotante';</script>";
        }
        break;
}
?>