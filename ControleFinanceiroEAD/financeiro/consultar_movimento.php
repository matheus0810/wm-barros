<?php
require_once '../DAO/MovimentoDAO.php';

$tipo = '';

if (isset($_POST['btnConsultar'])) {
    $tipo = $_POST['tipo'];
    $dataInicial = $_POST['dataInicial'];
    $dataFinal = $_POST['dataFinal'];
  
    $objdao = new MovimentoDAO();

    $ret = $objdao->ConsultarMovimento($tipo, $dataInicial, $dataFinal);
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
                        <h2>Consultar Movimento</h2>
                        <h5>Aqui você pode consultar todas as suas movimentações financeiras</h5>
                    </div>
                </div>
                <hr />
                 <form action="consultar_movimento.php" method="post">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tipo de Movimento:</label>
                        <select class="form-control" name="tipo" id="tipo">
                            <option value="">Selecione</option>
                            <option value="0" <?= $tipo == 0 ? 'selected' : '' ?>>Todos</option>
                            <option value="1" <?= $tipo == 1 ? 'selected' : '' ?>>Entrada</option>
                            <option value="2" <?= $tipo == 2 ? 'selected' : '' ?>>Saída</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data Inicial:</label>
                        <input type="date" class="form-control" name="dataInicial" id="dataInicial" value="<?= isset($dataInicial) ? $dataInicial : ''?>/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data Final:</label>"
                        <input type="date" class="form-control" name="dataFinal" id="dataFinal" value="<?= isset($dataFinal) ? $dataFinal : ''?>/>
                    </div>
                </div>
                <div class="aligmov">
                    <button name="btnConsultar" onclick="return ConsultarMovimento()" class="btn btn-primary">Consultar</button>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <Span>Aqui você pode visualizar todos os Movimentos financeiro realizados, se preferir, pode exclui-los:</Span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Tipo</th>
                                                <th>Data</th>
                                                <th>Valor</th>
                                                <th>Categoria</th>
                                                <th>Empresas</th>
                                                <th>Conta</th>
                                                <th>Acão</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>[Example]</td>
                                                <td>[Example]</td>
                                                <td>[Example]</td>
                                                <td>[Example]</td>
                                                <td>[Example]</td>
                                                <td>[Example]</td>
                                                <td>[Example]</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>