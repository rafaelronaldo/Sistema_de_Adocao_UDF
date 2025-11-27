### Pseudocódigo (Cadastrar Adotante)

```pseudocode
ALGORITMO Cadastro_de_Adotante
// Objetivo: Receber e persistir dados de um novo adotante no sistema.

INÍCIO
    // 1. Entrada de Dados
    LER nome_adotante
    LER cpf_adotante
    LER telefone_adotante
    LER endereco_adotante
    
    // 2. Validação e Processamento
    SE (nome_adotante VAZIO OU cpf_adotante VAZIO) ENTÃO
        MOSTRAR MENSAGEM "Erro: Nome e CPF são obrigatórios."
        REDIRECIONAR PARA FORMULÁRIO
        SAIR
    FIM SE
    
    // 3. Persistência (Conexão ao BD)
    CONECTAR BD_SISTEMA_ADOCAO
    
    // 4. Execução do SQL de Inserção
    SQL_INSERCAO = "INSERT INTO adotantes (nome, cpf, telefone, endereco) VALUES ('nome_adotante', 'cpf_adotante', ...)"
    RESULTADO = EXECUTAR SQL_INSERCAO
    
    // 5. Verificação de Sucesso
    SE RESULTADO SUCESSO ENTÃO
        MOSTRAR MENSAGEM "Adotante cadastrado com sucesso!"
    SENÃO
        MOSTRAR MENSAGEM "Erro ao salvar no banco de dados."
    FIM SE
    
    // 6. Finalização
    FECHAR CONEXÃO BD_SISTEMA_ADOCAO
    REDIRECIONAR PARA TELA DE LISTAGEM
FIM ALGORITMO