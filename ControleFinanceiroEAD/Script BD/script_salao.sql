insert into tb_usuario 
(nome_usuario, nome_salao, tel_usuario, senha_usuario, email_usuario, endereco_salao) 
values
('Ana Clara','Salão da Clara','4333448899','ana12345', 'ana@gmail.com', 'R. das Manicures');

select * from tb_usuario;
select * from tb_cliente;
select * from tb_funcionario;
select * from tb_servico;
select * from tb_agenda;
select * from tb_atendimento;

insert into tb_cliente
(nome_cliente, tel_cliente, endereco_cliente, id_usuario) 
values
('Gisele Rafaela','43998424245','R. dos Imigrantes', 1);

insert into tb_cliente
(nome_cliente, tel_cliente, endereco_cliente, id_usuario) 
values
('Ana Luiza','43999787878','R. dos Abacaxi', 1);

insert into tb_cliente
(nome_cliente, tel_cliente, endereco_cliente, id_usuario) 
values
('Isabela Soares','43999858585','R. dos Bombeiros', 1);

insert into tb_cliente
(nome_cliente, tel_cliente, endereco_cliente, id_usuario) 
values
('Heloisa Silva','43984787878','R. Souza Naves', 1);

insert into tb_cliente
(nome_cliente, tel_cliente, endereco_cliente, id_usuario) 
values
('Gabriela Pinheiros','43984784512','R. dos Pedreiros', 1);
-- ------------------------------------------------------------------------------------------

insert into tb_funcionario
(nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario, id_usuario) 
values
('Jaqueline Alfredo','43984122336', '2023.03.23', null, 'R. dos Arquitetos', 1);

insert into tb_funcionario
(nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario, id_usuario) 
values
('Andrea da Silva','43984477889', '2023.04.23', null, 'R. dos Engenheiros', 1);

insert into tb_funcionario
(nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario, id_usuario) 
values
('Carla Almeida','43998784556', '2023.05.01', null, 'R. dos Ajudantes', 1);

insert into tb_funcionario
(nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario, id_usuario) 
values
('Magda  Brandão','43984125852', '2023.02.22', null, 'R. dos Medicos', 1);

insert into tb_funcionario
(nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario, id_usuario) 
values
('Jennifer Gabriela','43999562358', '2023.01.20', null, 'R. dos Passarinhos', 1);
-- ------------------------------------------------------------------------------------------

insert into tb_servico
(nome_servico, descricao_servico, id_usuario) 
values
('Progressiva','Hidratar o cabelo', 1);

insert into tb_servico
(nome_servico, descricao_servico, id_usuario) 
values
('Luzes no cabelo','Fazer mexas no cabelo', 1);

insert into tb_servico
(nome_servico, descricao_servico, id_usuario) 
values
('Pé e mão','Fazer limpeza nos pés e mãos', 1);

insert into tb_servico
(nome_servico, descricao_servico, id_usuario) 
values
('Massagem','Fazer massagem no corpo', 1);

insert into tb_servico
(nome_servico, descricao_servico, id_usuario) 
values
('Corte de cabelo','Cortar o cabelo', 1);
-- ------------------------------------------------------------------------------------------

insert into tb_agenda
(data_agenda, horario_agenda, obs_agenda, id_cliente, id_servico, id_funcionario, id_usuario) 
values
('2023-05-10','10:30', null, 2, 1, 1, 1);

insert into tb_agenda
(data_agenda, horario_agenda, obs_agenda, id_cliente, id_servico, id_funcionario, id_usuario) 
values
('2023-05-11','11:30', null, 3, 2, 2, 1);

insert into tb_agenda
(data_agenda, horario_agenda, obs_agenda, id_cliente, id_servico, id_funcionario, id_usuario) 
values
('2023-05-12','12:30', null, 4, 3, 3, 1);

insert into tb_agenda
(data_agenda, horario_agenda, obs_agenda, id_cliente, id_servico, id_funcionario, id_usuario) 
values
('2023-05-13','13:30', null, 5, 4, 4, 1);

insert into tb_agenda
(data_agenda, horario_agenda, obs_agenda, id_cliente, id_servico, id_funcionario, id_usuario) 
values
('2023-05-14','14:30', null, 6, 5, 5, 1);
-- ------------------------------------------------------------------------------------------

insert into tb_atendimento
(valor_atendimento, obs_atendimento, id_agenda, id_usuario) 
values
('55,50',null, 1, 1);

insert into tb_atendimento
(valor_atendimento, obs_atendimento, id_agenda, id_usuario) 
values
('80,00',null, 2, 1);

insert into tb_atendimento
(valor_atendimento, obs_atendimento, id_agenda, id_usuario) 
values
('40,00',null, 3, 1);
-- -------------------------------------------------------------------------------------------

select nome_salao, nome_cliente from tb_usuario inner join tb_cliente on tb_usuario.id_usuario = tb_cliente.id_usuario;

select nome_servico, descricao_servico, nome_salao from tb_servico inner join tb_usuario on tb_usuario.id_usuario = tb_servico.id_usuario;

select nome_funcionario, data_agenda, nome_salao from tb_funcionario inner join tb_agenda on tb_funcionario.id_usuario = tb_agenda.id_usuario
                                                                     inner join tb_usuario on tb_usuario.id_usuario = tb_funcionario.id_usuario;

