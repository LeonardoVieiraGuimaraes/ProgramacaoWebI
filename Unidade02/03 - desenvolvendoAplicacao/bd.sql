CREATE TABLE habito (
    -- A coluna 'id' é do tipo INT (inteiro). 
    -- A palavra-chave PRIMARY KEY define que a coluna 'id' é a chave primária da tabela, o que significa que cada valor nesta coluna deve ser único e não nulo.
    -- A palavra-chave AUTO_INCREMENT significa que o valor nesta coluna será gerado automaticamente sempre que um novo registro for inserido na tabela.
    id INT PRIMARY KEY AUTO_INCREMENT,

    -- A coluna 'nome' é do tipo VARCHAR e tem um limite de 255 caracteres. 
    -- A palavra-chave NOT NULL define que a coluna 'nome' deve sempre ter um valor.
    nome VARCHAR(255) NOT NULL,

    -- A coluna 'status' é do tipo VARCHAR e tem um limite de 255 caracteres. 
    -- Como não há nenhuma palavra-chave após o tipo de dados, esta coluna pode conter valores nulos.
    status VARCHAR(255)
);