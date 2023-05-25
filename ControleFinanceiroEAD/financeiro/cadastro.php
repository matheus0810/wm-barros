<?php
require_once '../DAO/UsuarioDAO.php';

if (isset($_POST['btnCadastrar'])) {
    $nome = trim($_POST['nomeUsuario']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $rsenha = trim($_POST['repSenha']);

    $objdao = new UsuarioDAO();

    $ret = $objdao->ValidarCadastro($nome, $email, $senha, $rsenha);
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <?php include_once '_msg.php'; ?>
                <h2>Crie sua conta</h2>
                <h5>(Realize seu cadsatro aqui!)</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Digite os seguintes dados:</strong>
                    </div>
                    <div class="panel-body">
                        <form action="cadastro.php" method="post">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu nome aqui..." name="nomeUsuario" id="nomeUsuario" value="<?= isset($nomeUsuario) ? $nomeUsuario : '' ?>"/>
                            </div>
                            <div class="form-group input-group">                                                                    
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email" value="<?= isset($email) ? $email : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite uma senha (Mínimo 6 caracteres)" name="senha" id="senha" value="<?= isset($senha) ? $senha : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite novamente sua Senha..." name="repSenha" id="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>"/>
                            </div>
                            <button class='btn btn-success' onclick= "return ValidarCadastro()" name="btnCadastrar">Cadastrar</button>
                            <hr />
                            <span>Já possui uma Conta?</span> <a href="index.php">Clique aqui...</a>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

</body>

</html>