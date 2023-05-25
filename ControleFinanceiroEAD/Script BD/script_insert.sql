-- COMANDO PARA INSERIR (INSERT)
-- insert into nome_da_tabela (coluna) values (valores)

insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('Ana Maria','ana@gmail.com','senha123','2021-02-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('Carlos Junior','carlos@gmail.com','44510','2021-02-25');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('Marcos','marcos@gmail.com','3323','2021-02-25');

insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Heloisa', 'heloisa@gmail.com', '123456','2023-04-27');

insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Diego', 'diego@gmail.com', '654321','2023-04-28');

insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Isabela', 'isabela@hotmail.com', '1234789','2023-04-28');

insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Murilo', 'murilo@hotmail.com', '121022','2023-04-25');
-- ---------------------------------------------------------------------------------------
insert into tb_categoria (nome_categoria, id_usuario) values ('Financiamento', 3);

insert into tb_categoria (nome_categoria, id_usuario) values ('Curso', 3);

insert into tb_categoria (nome_categoria, id_usuario) values ('Luz', 3);

insert into tb_categoria (nome_categotb_empresaid_empresaid_empresaria, id_usuario) values ('Mercado', 3);
-- ---------------------------------------------------------------------------------------
insert into tb_categoria (nome_categoria, id_usuario) values ('Água', 4);

insert into tb_categoria (nome_categoria, id_usuario) values ('Casa', 4);

insert into tb_categoria (nome_categoria, id_usuario) values ('Telefone', 4);

insert into tb_categoria (nome_categoria, id_usuario) values ('Carro', 4);
-- ---------------------------------------------------------------------------------------
insert into tb_categoria (nome_categoria, id_usuario) values ('Moto', 5);

insert into tb_categoria (nome_categoria, id_usuario) values ('Curso', 5);

insert into tb_categoria (nome_categoria, id_usuario) values ('Faculdade', 5);

insert into tb_categoria (nome_categoria, id_usuario) values ('Cliente', 5);
-- ---------------------------------------------------------------------------------------
insert into tb_categoria (nome_categoria, id_usuario) values ('Aluguel', 6);

insert into tb_categoria (nome_categoria, id_usuario) values ('Financiamento', 6);

insert into tb_categoria (nome_categoria, id_usuario) values ('Casa', 6);

insert into tb_categoria (nome_categoria, id_usuario) values ('Cliente', 6);
-- ---------------------------------------------------------------------------------------
insert into tb_categoria (nome_categoria, id_usuario) values ('Aluguel', 7);

insert into tb_categoria (nome_categoria, id_usuario) values ('Financiamento', 7);

insert into tb_categoria (nome_categoria, id_usuario) values ('Luz', 7);

insert into tb_categoria (nome_categoria, id_usuario) values ('Cliente', 7);
-- ---------------------------------------------------------------------------------------
insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Caixa','4333434395','Rua dos Emprestimos', 3);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('WMBarros','433378989','Av. Maringá', 3);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Copel','4333454545','Rua dos Operarios', 3);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Super Muffato','4333787878','Rua dos Funcionarios', 3);
-- ---------------------------------------------------------------------------------------
insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Sanepar','4333787878','Rua dos Funcionarios', 4);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Caixa','433344556666','Rua dos Iluminados', 4);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Sercomtel','433778899','Rua João Candido', 4);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Metronorte','4333996633','Rua Feliz', 4);
-- ---------------------------------------------------------------------------------------
insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('PB Motos','4333221144','Rua das Motos', 5);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Cursinho Sigma','4333778899','Rua dos Estudantes', 5);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Unopar','4333448873','Rua dos Estudantes', 5);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Carlos Alberto','433399887766','Rua das Dividas', 5);
-- ---------------------------------------------------------------------------------------
insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Imobiliaria Nova Casa','4333123455','Rua das Casas', 6);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Santander','433399887766','Rua dos Bancos', 6);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Caixa','4333447788','Rua Agosto', 6);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('José Carlos','4333994877','Rua Dezembro', 6);
-- ---------------------------------------------------------------------------------------
insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Imobiliaria Seu Lar','4333454545','Rua dos Equilinos', 7);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Sicoob','4333787878','Rua Santos Dumont', 7);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Copel','4333454545','Rua dos Operarios', 7);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Daniel Silva','4333487878','Rua Pará', 7);


insert into tb_categoria (nome_categoria, id_usuario) values ('Alimentação', 5);

insert into tb_categoria (nome_categoria, id_usuario) values ('Viagens', 1);

insert into tb_categoria (nome_categoria, id_usuario) values ('Gastos', 6);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
values
('Empresa Colçhão','4399924455','Rua dos Colchões', 1);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Comer bem','5599983456','Rua dos restaurantes', 2);

insert into tb_conta (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values ('Santander','1122','112233', 4500.00, 1);

insert into tb_conta (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values ('Bradesco','4433','335566', 5678.89, 6);

insert into tb_movimento (tipo_movimento, data_movimento, valor_movimento, obs_movimento) 
values (1, '2021-01-10', 45, null)










