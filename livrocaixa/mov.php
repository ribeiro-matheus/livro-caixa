<?php 
include_once './includes/header.inc.php' ;
include_once './includes/menu.inc.php'; 
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Escolha o Cliente</h5><hr>

        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once './banco_de_dados/moviment.clients.php' ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once './includes/footer.inc.php' ?>