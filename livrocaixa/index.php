<?php session_start(); 
include_once './includes/header.inc.php';
?>

    <?php include_once './includes/menu.inc.php' ?>
    <!-- formulario -->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="./banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
                <legend><img src="./images/profile.gif" alt="img" width="60px"></legend>
                <h5 class="light center">Cadastro de Clientes</h5>
                <?php
                    if(isset($_SESSION['msg'])):
                        echo$_SESSION['msg'];
                        session_unset();
                    endif;
                ?>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlength="40" require autofocus>
                    <label for="nome">Nome do Cliente</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" maxlength="50" require="required">
                    <label for="nome">Email do Cliente</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">money</i>
                    <input type="number" step="0.01" name="saldo" id="saldo" maxlength="40" require>
                    <label for="saldo">Saldo Inicial</label>
                </div>
                <!-- botoes -->
                <div class="input-field col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>
            </fieldset>
        </form>
    </div>


<?php include_once './includes/footer.inc.php' ?>