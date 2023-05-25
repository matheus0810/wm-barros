<?php
require_once '../DAO/MovimentoDAO.php';

$tipo = '';
$categoria = '';
$empresa = '';
$conta = '';


if (isset($_POST['btnGravar'])) {
    $tipo = $_POST['tipo'];
    $data = $_POST['data'];
    $valor = trim($_POST['valor']);
    $categoria = trim($_POST['categoria']);
    $empresa = trim($_POST['empresa']);
    $conta = trim($_POST['conta']);
    $obs = trim($_POST['obs']);

    $objdao = new MovimentoDAO();

    $ret = $objdao->RealizarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta);
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
                        <h2>Realizar Movimento</h2>
                        <h5>Aqui você pode realizar todas as suas movimentações financeiras, de ENTRADA e SAÍDA</h5>

                    </div>
                </div>
                <hr />
                <form action="realizar_movimento.php" method="post">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo de Movimento:</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="">Selecione</option>
                                <option value="1" <?= $tipo == 1 ? 'selected' : '' ?>>Entrada</option>
                                <option value="2" <?= $tipo == 2 ? 'selected' : '' ?>>Saída</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Data:</label>
                            <input type="date" class="form-control" name="data" id="data" value="<?= isset($data) ? $data : '' ?>" />
                        </div>
                        <div class="form-group">
                            <label>Valor:</label>
                            <input class="form-control" placeholder="Digite o Valor aqui..." name="valor" id="valor" value="<?= isset($valor) ? $valor : '' ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categoria:</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="">Selecione</option>
                                <option value="1" <?= $categoria == 1 ? 'selected' : '' ?>>Teste</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Empresa:</label>
                            <select class="form-control" name="empresa" id="empresa">
                                <option value="">Selecione</option>
                                <option value="1" <?= $empresa == 1 ? 'selected' : '' ?>>Teste</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Conta:</label>
                            <select class="form-control" name="conta" id="conta">
                                <option value="">Selecione</option>
                                <option value="1" <?= $conta == 1 ? 'selected' : '' ?>>Teste</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (Opcional):</label>
                            <textarea class="form-control" rows="5" name="obs" placeholder="Digite uma obeservação aqui..."></textarea>
                        </div>
                        <div style="text-align: center">
                            <button type="submit" name="btnGravar" onclick="return ValidarMovimento()" class="btn btn-success">Realizar Movimento</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>