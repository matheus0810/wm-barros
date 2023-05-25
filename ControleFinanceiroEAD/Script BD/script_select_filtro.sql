-- Filtra os nome que tem a letra a = '%a%'
select nome_usuario, data_cadastro from tb_usuario
where nome_usuario like '%a%';
-- Filtra os nome que comeca com a letra a = 'a%'
select nome_usuario, data_cadastro from tb_usuario
where nome_usuario like 'a%';
-- Filtra os nome que termina com a letra a = 'a%'
select nome_usuario, data_cadastro from tb_usuario
where nome_usuario like '%a';
-- Filtra data de um periodo - between é para datas
select nome_usuario, data_cadastro from tb_usuario
where data_cadastro between '2023-01-01' and '2023-05-20';
-- Filtra pelo Usuario
select banco_conta, agencia_conta, saldo_conta from tb_conta where id_usuario = 3;

select tb_movimento.id_usuario,
       tipo_movimento,
       data_movimento,
       valor_movimento,
       nome_categoria,
       nome_empresa,
       nome_usuario,
       banco_conta
	from tb_movimento 
inner join tb_categoria 
    on tb_categoria.id_categoria = tb_movimento.tb_categoria_id_categoria
inner join tb_empresa
    on tb_empresa.id_empresa = tb_movimento.tb_empresa_id_empresa
inner join tb_usuario
    on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
    on tb_conta.id_conta = tb_movimento.tb_conta_id_conta
    where tb_movimento.id_usuario = 1;