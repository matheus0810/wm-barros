<?php

require_once "../DAO/CategoriaDAO.php";

if (isset($_POST['btnSalvar'])) {
    $nomeCategoria= trim($_POST['nomeAlterar']);

    $objdao = new CategoriaDAO();

    $ret = $objdao->AlterarCategoria($nomeCategoria);
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
                        <h2>Alterar Categoria</h2>
                        <h5>Aqui você pode alterar ou excluir a sua Categoria financeira.</h5>
                    </div>
                </div>
                <hr />
                <form action="alterar_categoria.php" method="post"">
                <div class="form-group">
                    <label>Nome da Categoria:</label>
                    <input class="form-control" placeholder="Digite o nome da categoria aqui..." name="nomeAlterar" id="nomecategoria" value="<?= isset($nomeAlterar) ? $nomeAlterar : '' ?>"/>
                </div>
                <button type="submit" name="btnSalvar" class="btn btn-success"  onclick="return ValidarCategoria()">Salvar</button>
                <button type="submit" name="btnExcluir" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>