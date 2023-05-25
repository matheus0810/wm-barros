<?php

require_once '../DAO/CategoriaDAO.php';

if (isset($_POST['btnSalvar'])) {
    $nomeCategoria = trim($_POST['nomeCategoria']);

    $objdao = new CategoriaDAO();

    $ret = $objdao->CadastrarCategoria($nomeCategoria);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Cadastro de Categoria</h2>
                        <h5>Aqui você pode cadastrar todas a suas Categorias finaceiras.</h5>
                    </div>
                </div>
                <hr />
                <form action="nova_categoria.php" method="post">
                    <div class="form-group">
                        <label>Nome da Categoria:</label>
                        <input class="form-control" name="nomeCategoria" placeholder="Digite o Nome da Categoria aqui..." id="nomecategoria" value="<?= isset($nomeCategoria) ? $nomeCategoria : '' ?>"/>
                    </div>
                    <button type="submit" name="btnSalvar" onclick="return ValidarCategoria()" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>