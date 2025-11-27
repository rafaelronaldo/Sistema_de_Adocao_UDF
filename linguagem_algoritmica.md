# 3. Descrição na Linguagem Algorítmica (Processo de Cadastro)

O algoritmo a seguir descreve o processo de criação de um novo registro de Adotante (o 'C' do CRUD), garantindo a coleta dos dados do formulário, a conexão ao banco de dados, a execução da operação de INSERT e a notificação de sucesso ou falha.

**Processo Analisado:** Cadastrar Adotante

---

## Algoritmo

Algoritmo CadastrarAdotante // Disciplina: [Nome da Sua Disciplina] // Autor: [Seu Nome Completo] // Descrição: Processo de recebimento, validação mínima e inserção de um novo adotante na tabela 'adotantes'.

Var nome, cpf, telefone, endereco: texto // Declaração das variáveis de entrada sql: texto // Variável para armazenar a instrução SQL conexao: objeto_conexao // Variável que representa a conexão com o BD res: booleano // Variável de controle para o resultado da query

Inicio // 1. Entrada: Coleta de dados do formulário (simula a captura via POST em PHP) nome := Ler_Post("nome_adotante") cpf := Ler_Post("cpf_adotante") telefone := Ler_Post("telefone_adotante") endereco := Ler_Post("endereco_adotante")

// 2. Conexão com o Banco de Dados
conexao := Conectar_BD("localhost", "root", "", "banco_de_dados")

// 3. Definição do SQL (Criação da string de inserção)
sql := "INSERT INTO adotantes (nome_adotante, cpf_adotante, telefone_adotante, endereco_adotante) 
        VALUES ('" + nome + "', '" + cpf + "', '" + telefone + "', '" + endereco + "')"

// 4. Execução da Query
res := Executar_Query(conexao, sql)

// 5. Saída e Notificação
Se (res = Verdadeiro) Entao
    Escrever_Tela("Adotante cadastrado com sucesso!")
    // Redireciona o usuário para a página de listagem
    Redirecionar("listar-adotante.php") 
Senão
    Escrever_Tela("Erro: Não foi possível cadastrar no banco de dados.")
    // Em caso de erro, redireciona para a listagem
    Redirecionar("listar-adotante.php") 
FimSe

// 6. Encerramento
Desconectar_BD(conexao)