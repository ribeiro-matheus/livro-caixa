<?php 
session_start();
include_once './includes/header.inc.php' ;
include_once './includes/menu.inc.php' 
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Editar Registro</h5><hr>
    </div>
</div>

<?php
    include_once './banco_de_dados/conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
    $_SESSION['id'] = $id;
    $querySelect = $link->query("select * from tb_clientes where id='$id'");

    while($registros = $querySelect->fetch_assoc()):
        $nome = $registros['nome'];
        $email = $registros['email'];
        $saldo = $registros['saldo'];
    endwhile;
?>

<!-- formulario -->
<div class="row container">
        <p>&nbsp;</p>
        <form action="./banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
                <legend><img src="./images/profile.gif" alt="img" width="60px"></legend>
                <h5 class="light center">Alterar Cadastro</h5>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" require autofocus>
                    <label for="nome">Nome do Cliente</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>"  maxlength="50" require>
                    <label for="nome">Email do Cliente</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">money</i>
                    <input type="number" step="0.01" name="saldo" id="saldo" value="<?php echo $saldo ?>"  maxlength="40" require>
                    <label for="saldo">Saldo Inicial</label>
                </div>
                <!-- botoes -->
                <div class="input-field col s12">
                    <input type="submit" value="alterar" class="btn blue">
                    <a href="consultas.php" class="btn red">cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>

<?php include_once './includes/footer.inc.php' ?>