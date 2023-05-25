<?php
require_once '../DAO/ContaDAO.php';

if (isset($_POST['btnSalvar'])) {
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $numero = $_POST['numero'];
    $saldo = $_POST['saldo'];

    $objdao = new ContaDAO();
    $ret = $objdao->AlterarConta($banco, $agencia, $numero, $saldo);
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
                        <h2>Alterar Contas</h2>
                        <h5>Aqui você pode alterar ou excluir a sua Conta Bancária</h5>
                    </div>
                </div>
                <hr />
                <form action="alterar_conta.php" method="post">
                    <div class="form-group">
                        <label>Nome do Banco*:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome do Banco aqui..." name="banco" id="banco" value="<?= isset($banco) ? $banco : '' ?>" />
                    </div>
                    <div class="form-group">
                        <label>Agência*:</label>
                        <input type="number" class="form-control" placeholder="Digite o Número da Agência aqui..." name="agencia" id="agencia" value="<?= isset($agencia) ? $agencia : '' ?>" />
                    </div>
                    <div class="form-group">
                        <label>Número da conta*:</label>
                        <input type="number" class="form-control" placeholder="Digite o Número da conta aqui..." name="numero" id="numero" value="<?= isset($numero) ? $numero : '' ?>" />
                    </div>
                    <div class="form-group">
                        <label>Saldo Bancário*:</label>
                        <input type="number" class="form-control" placeholder="Digite o Saldo Bancárioa aqui..." name="saldo" id="saldo" value="<?= isset($saldo) ? $saldo : '' ?>" />
                    </div>
                    <button type="submit" name="btnSalvar" class="btn btn-success" onclick="return ValidarConta()">Salvar</button>
                    <button type="submit" name="btnExcluir" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>