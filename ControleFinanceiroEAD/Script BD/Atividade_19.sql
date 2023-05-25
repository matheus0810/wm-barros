-- Exercicio 1
-- Filtre todos os dados da tb_movimento com tipo_movimento 1
select * from tb_movimento where tipo_movimento = 1;

-- Filtre todos os dados da tb_movimento com tipo_movimento 2
select * from tb_movimento where tipo_movimento = 2;

-- Filtre todos os nomes que possui a letra a
select nome_usuario from tb_usuario where nome_usuario like '%a%';

-- Filtre todos os nomes que possui a letra d
select nome_usuario from tb_usuario where nome_usuario like '%d%';

-- Filtre todos os nomes que possui a letra b
select nome_usuario from tb_usuario where nome_usuario like '%b%';

-- Filtre todos os cadastros realizados na data do dia 28/09 até 04/02 nas tabelas: tb_usuario. 
select * from tb_usuario where data_cadastro between '2023-09-28' and '2023-04-02';

-- Filtre todos os cadastros realizados na data do dia 28/09 até 04/02 nas tabelas:  tb_movimento.
select * from tb_movimento where data_movimento between '2023-09-28' and '2023-04-02';

-- Exercicio 2
-- Busque: nome_usuario e nome_categoria cadastrados
select nome_usuario, nome_categoria from tb_usuario inner join tb_categoria on tb_categoria.id_usuario = tb_usuario.id_usuario;

-- Busque: nome_usuario, email_usuario, banco_conta, saldo_conta, numero_conta cadastrados
select nome_usuario, email_usuario, banco_conta, saldo_conta, numero_conta 
from tb_usuario inner join tb_conta on tb_conta.id_usuario = tb_usuario.id_usuario;

-- Busque: nome_categoria, nome_empresa, nome_usuario, data_movimento, valor_movimento, tipo_movimento cadastrados
select nome_categoria, nome_empresa, nome_usuario, data_movimento, valor_movimento, tipo_movimento
from tb_usuario inner join tb_categoria on tb_categoria.id_usuario = tb_usuario.id_usuario
                inner join tb_empresa on tb_empresa.id_usuario = tb_usuario.id_usuario
                inner join tb_movimento on tb_movimento.id_usuario = tb_usuario.id_usuario;

-- Busque: Todas as colunas de todas as tabelas do Bancco de Dados (Obrigatório uso de Inner Join).
select nome_categoria, banco_conta, agencia_conta, numero_conta, saldo_conta, nome_empresa, telefone_empresa, endereco_empresa,
       tipo_movimento, data_movimento, valor_movimento, obs_movimento, nome_usuario, email_usuario, senha_usuario, data_cadastro
       
from tb_usuario inner join tb_categoria on tb_categoria.id_usuario = tb_usuario.id_usuario
                inner join tb_conta on tb_conta.id_usuario = tb_usuario.id_usuario
                inner join tb_empresa on tb_empresa.id_usuario = tb_usuario.id_usuario
                inner join tb_movimento on tb_movimento.id_usuario = tb_usuario.id_usuario;

       
       
       










