-- COMANDO PARA ATUALIZAR (UPDATE)
-- UPDATE (TABELA) SET (COLUNA) = 'modidficação' WHERE (ID) = Nº ID

update tb_usuario set email_usuario = 'ana@hotmail.com', senha_usuario = 'ana123' where id_usuario = 1;

update tb_conta set numero_conta = '4506293' where id_usuario = 1;

update tb_conta set numero_conta = '4506293', banco_conta = 'Sicredi' where id_usuario = 1;

update tb_empresa set telefone_empresa = '4333787878' where id_empresa = 5;