-- Criando a tabela fictícia
CREATE TABLE Pessoas (
    CPF VARCHAR(11) PRIMARY KEY,
    Nome VARCHAR(100),
    RG VARCHAR(20),
    DataNascimento DATE
);

-- Operação Create (Criar) - Inserindo uma nova pessoa
INSERT INTO Pessoas (CPF, Nome, RG, DataNascimento)
VALUES ('12345678901', 'João Silva', '1234567', '1990-05-15');


-- Operação Read (Ler) - Recuperando todas as informações de todas as pessoas
SELECT *
FROM Pessoas;

-- Operação Read (Ler) - Recuperando informações sobre a pessoa com CPF '12345678901'
SELECT Nome, RG, DataNascimento -- ou * para todos
FROM Pessoas
WHERE CPF = '12345678901';

-- Operação Update (Atualizar) - Atualizando o RG da pessoa com CPF '12345678901'
UPDATE Pessoas
SET RG = '7654321'
WHERE CPF = '12345678901';

-- Operação Read (Ler) - Verificando as alterações na pessoa com CPF '12345678901'
SELECT Nome, RG, DataNascimento
FROM Pessoas
WHERE CPF = '12345678901';

-- Operação Delete (Excluir) - Removendo a pessoa com CPF '12345678901'
DELETE FROM Pessoas
WHERE CPF = '12345678901';
