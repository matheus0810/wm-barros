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
                        <h2>Colsultar Contas</h2>
                        <h5>Aqui você pode consultar todas as Contas bancárias cadastradas</h5>
                    </div>
                </div>
                <hr />
                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <Span>Estas são as Contas banárias cadastradas, caso deseja alterar, clique no botão ALTERAR</Span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome do Banco</th>
                                            <th>Agência</th>
                                            <th>Número da Conta</th>
                                            <th>Saldo</th>
                                            <th>Acão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>(banco)</td>
                                            <td>(ag)</td>
                                            <td>(num. conta)</td>
                                            <td>(saldo)</td>
                                            <td>
                                                <a href="alterar_conta.php" class ="btn btn-warning btn-sm">Alterar</a>
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