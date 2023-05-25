<?php

require_once '../DAO/EmpresaDAO.php';

if(isset($_POST['btnGravar'])){
    $nomeEmpresa = trim($_POST['nomeEmpresa']);
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);

    $objdao = new EmpresaDAO();

    $ret = $objdao->CadastrarEmpresa($nomeEmpresa, $telefone, $endereco);
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
                        <?php include_once '_msg.php'?>
                        <h2>Cadastro de Empresas</h2>
                        <h5>Aqui você pode cadastrar todas a suas empresas</h5>
                    </div>
                </div>
                <hr />
                <form action="nova_empresa.php" method="post">
                <div class="form-group">
                    <label>Nome da empresa:*</label>
                    <input type="text" class="form-control" placeholder="Digite o Nome da Empresa aqui..." name="nomeEmpresa" id="nomeEmpresa" value="<?= isset($nomeEmpresa) ? $nomeEmpresa : '' ?>"/>
                </div>
                <div class="form-group">
                    <label>Telefone (Whatsapp):</label>
                    <input type="number" class="form-control" placeholder="Digite o telefone aqui..." name="telefone" id="telefone" value="<?= isset($telefone) ? $telefone : '' ?>"/>
                </div>
                <div class="form-group">
                    <label>Endereço:</label>
                    <input type="text" class="form-control" placeholder="Digite o Endereço aqui..." name="endereco" id="endereco" value="<?= isset($endereco) ? $endereco : '' ?>"/>
                </div>
                <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarEmpresa()">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>