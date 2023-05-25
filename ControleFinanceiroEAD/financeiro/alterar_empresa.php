<?php

require_once '../DAO/EmpresaDAO.php';

if(isset($_POST['btnSalvar'])){
    $nomeEmpresa = trim($_POST['nomeEmpresa']);
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);

    $objdao = new EmpresaDAO();

    $ret = $objdao->AlterarEmpresa($nomeEmpresa, $telefone, $endereco);
}
?>
<!

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
                        <?php include_once '_msg.php' ?>
                        <h2>Alterar Empresa</h2>
                        <h5>Aqui você pode alterar ou excluir a sua Empresa.</h5>
                    </div>
                </div>
                <hr />
                <form action="alterar_empresa.php" method="post">
                    <div class="form-group">
                        <label>Nome da empresa*:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome da empresa aqui..." name="nomeEmpresa" id="nomeEmpresa" value="<?= isset($nomeEmpresa) ? $nomeEmpresa : '' ?>" />
                    </div>
                    <div class="form-group">
                        <label>Telefone (Whatsapp)*:</label>
                        <input type="number" class="form-control" placeholder="Digite o Telefone da Empresa aqui..." name="telefone" id="telefone" value="<?= isset($telefone) ? $telefone : '' ?>" />
                    </div>
                    <div class="form-group">
                        <label>Endereço*:</label>
                        <input type="text" class="form-control" placeholder="Digite o endereço da empresa aqui...)" name="endereco" value="<?= isset($endereco) ? $endereco : '' ?>" />
                    </div>
                    <button type="submit" name="btnSalvar" onclick="return ValidarEmpresa()" class="btn btn-success">Salvar</button>
                    <button type="submit" name="btnExcluir" class="btn btn-danger">Excluir</button>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>