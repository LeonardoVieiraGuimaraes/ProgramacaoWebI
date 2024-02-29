-- Verifica se a tabela 'habito' já existe e, em caso afirmativo, a exclui
DROP TABLE IF EXISTS habito;

-- Cria a tabela 'habito'
CREATE TABLE habito (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    status VARCHAR(255)
);