<?php 
session_start();
include_once './includes/header.inc.php' ;
include_once './includes/menu.inc.php' ;
include_once './banco_de_dados/conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
    $_SESSION['id'] = $id;
?>

<p>&nbsp;</p>
<div class="row container formulario" style="background-color:#eee">
    <form action="./banco_de_dados/add.php" method="post" class="col s12">
        <p class="light">Adicionar Movimento</p>
        <div class="input-field col s12">
            <strong>Tipo:</br></strong>
            <label for="tipo_receita" style="color:#030; position:static"><input class="with-gap" type="radio" name="tipo" value="1" id="tipo_receita" /> Receita</label>&nbsp; 
            <label for="tipo_despesa" style="color:#C00; position:static"><input type="radio" name="tipo" value="0" id="tipo_despesa" /> Despesa</label>
        </div>
        <div class="input-field col s12">
            <strong>Descrição:</strong><br />
            <input class="border-imput" type="text" name="descricao" size="100" maxlength="255" />
        </div>
        <div class="input-field col s12">
            <strong>Valor:</strong><br />
            R$<input type="text" name="valor" size="8" maxlength="10" />
            <br />
            <br />
            <input type="submit" value="cadastrar" class="btn blue">
            <a href="consultas.php" class="btn red">cancelar</a>
        </div>
    </form>
</div>

<?php include_once './includes/footer.inc.php' ?>