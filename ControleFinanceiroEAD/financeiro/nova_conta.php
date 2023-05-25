<?php
require_once '../DAO/ContaDAO.php';

if (isset($_POST['btnGravar'])) {
    $banco = trim($_POST['banco']);
    $agencia = trim($_POST['agencia']);
    $numero = trim($_POST['numero']);
    $saldo = trim($_POST['saldo']);

    $objdao = new ContaDAO();
    $ret = $objdao->CadastrarConta($banco, $agencia, $numero, $saldo);
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
                        <h2>Cadastro de Contas</h2>
                        <h5>Aqui você pode cadastrar todas as suas Contas bancárias</h5>
                    </div>
                </div>
                <hr />
                <form action="nova_conta.php" method="post">
                    <div class="form-group">
                        <label>Nome do Banco:*</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome do Banco aqui..." name="banco" id="banco" value="<?= isset($banco) ? $banco : '' ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Agência:*</label>
                        <input type="number" class="form-control" placeholder="Digite o Número da Agência aqui..." name="agencia" id="agencia" value="<?= isset($agencia) ? $agencia : '' ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Número da Conta:*</label>
                        <input type="number"class="form-control" placeholder="Digite o Número da Conta aqui..." name="numero" id="numero" value="<?= isset($numero) ? $numero : '' ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Saldo Bancário:*</label>
                        <input type="number" class="form-control" placeholder="Digite o Saldo Bancárioa aqui..." name="saldo" id="saldo" value="<?= isset($saldo) ? $saldo : '' ?>"/>
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarConta()">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>