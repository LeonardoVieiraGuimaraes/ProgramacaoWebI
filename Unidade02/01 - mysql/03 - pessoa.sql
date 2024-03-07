insert into pessoa (cpf, nome, rg, datanascimento)
values ('07239502835', 'Laercio Metzner', '4905976', '1990-10-07');

insert into pessoa (cpf, nome, rg, data_nascimento)
values ('88739502675', 'Andressa Geisler', '4005966 ', '1991-05-16');

INSERT INTO pessoa (cpf, nome, rg, data_nascimento) VALUES ('11223344556', 'Carlos Alberto', '7890123', '1982-11-22');
INSERT INTO pessoa (cpf, nome, rg, data_nascimento) VALUES ('22334455667', 'Fernanda Souza', '8901234', '1983-12-23');
INSERT INTO pessoa (cpf, nome, rg, data_nascimento) VALUES ('33445566778', 'Roberto Silva', '9012345', '1984-01-24');
INSERT INTO pessoa (cpf, nome, rg, data_nascimento) VALUES ('44556677889', 'Patricia Santos', '0123456', '1985-02-25');
INSERT INTO pessoa (cpf, nome, rg, data_nascimento) VALUES ('55667788990', 'Ricardo Oliveira', '1234567', '1986-03-26');


SELECT *
FROM pessoa
WHERE cpf = '88739502675';

SELECT *
FROM pessoa;


DELETE
FROM pessoa
WHERE cpf = '07239502835';


