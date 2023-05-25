select * from tb_movimento where tipo_movimento = 1;

select * from tb_movimento where tipo_movimento = 2;

select nome_usuario, data_cadastro from tb_usuario where nome_usuario like '%a%';

select * from tb_usuario where data_cadastro between '2023-01-01' and '2023-05-11';

select nome_usuario, nome_categoria from tb_usuario inner join tb_categoria 
on tb_categoria.id_usuario = tb_usuario.id_usuario;

select nome_usuario, nome_categoria, nome_empresa from tb_usuario 
inner join tb_categoria on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_empresa on tb_empresa.id_usuario = tb_usuario.id_usuario;

select nome_usuario, nome_categoria, nome_empresa from tb_usuario as US
inner join tb_categoria as CAT on CAT.id_usuario = US.id_usuario
inner join tb_empresa as EMP on EMP.id_usuario = US.id_usuario;

