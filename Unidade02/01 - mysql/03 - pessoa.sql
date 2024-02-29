insert into pessoa (cpf, nome, rg, data_nascimento)
values ('07239502835', 'Laercio Metzner', '4905976', '1990-10-07');

insert into pessoa (cpf, nome, rg, data_nascimento)
values ('88739502675', 'Andressa Geisler', '4005966 ', '1991-05-16');

SELECT *
FROM pessoa
WHERE cpf = '88739502675';

SELECT *
FROM pessoa;


DELETE
FROM pessoa
WHERE cpf = '07239502835';
