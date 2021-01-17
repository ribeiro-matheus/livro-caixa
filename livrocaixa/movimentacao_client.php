<?php 
include_once './includes/header.inc.php' ;
include_once './includes/menu.inc.php';
include_once './banco_de_dados/conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
    $_SESSION['id'] = $id;
?>

<p>&nbsp;</p>
<div class="container green lighten-5 formulario">
    <p>Saldo em Conta</p>
    
    <div class="row container">
        <div class="col s6">
            <p class="center left green-text bold">Saldo Total:</p>
        </div>
        <div class="col s6">
        <p id="mySaldo"  class="right green-text bold"></p>
        </div>
    </div>
    
</div>
<p>&nbsp;</p>
<div class="row container formulario">
    <div class="row">
        <div class="col s2">
            <p class="green-tex">Entradas:</p>
         </div>
        <div class="col s10">
        <p id="entradas"  class="green-text"></p>
        </div>
    </div>
    <div class="row">
        <div class="col s2">
            <p class="red-tex">Saidas:</p>
        </div>
        <div class="col s10">
        <p id="saidas"  class="left red-text"></p>
        </div>
    </div>
    <hr  style="margin-bottom: 2rem;">
    <div class="col s12">
        <table class="striped">
            <thead>
                <tr>Movimentos: </tr>
            </thead>
            <tbody>
                <?php include_once './banco_de_dados/moviment.php' ?>
            </tbody>
        </table>
        <div class="green-text right bold"><?php echo "R$ " . number_format($somaES, 2, ',', '.') ?></div>
        
    </div>
</div>

<script src="./js/calcular.js"></script>
<script type="text/javascript">
(function(){
    var $saldoInicial = <?php echo $saldoInicial ?>;
    var $entradasPHP = <?php echo $entradas ?>;
    var $saidasPHP = <?php echo $saidas ?>;
    var $entradasHTML = document.getElementById("entradas");
    var $saidasHTML = document.getElementById("saidas");
    var $saldo = document.getElementById("mySaldo");

    $saldo.innerHTML = $saldoInicial.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
    $entradasHTML.innerHTML = $entradasPHP.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
    $saidasHTML.innerHTML = $saidasPHP.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
})();
    
</script>
<?php include_once './includes/footer.inc.php' ?>