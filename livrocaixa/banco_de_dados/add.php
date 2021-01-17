<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$tipo  = filter_input(INPUT_POST,'tipo',FILTER_SANITIZE_NUMBER_INT);
$desc  = filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_SPECIAL_CHARS);
$valor = $_POST['valor'];

$querySaldo = $link->query("select saldo from tb_clientes where id='$id'");
while($saldo = $querySaldo->fetch_assoc()):
    $saldoInicial = $saldo['saldo'];
endwhile;

if($tipo == 1):
    $saldoInc = $saldoInicial+$valor;
$queryUpdate = $link->query("update tb_clientes set saldo='$saldoInc' where id='$id'");
else:
    $saldoInc = $saldoInicial-$valor;
$queryUpdate = $link->query("update tb_clientes set saldo='$saldoInc' where id='$id'");
endif;
$queryInsert = $link->query("insert into tb_movimento values(default,'$id','$tipo','$desc','$valor')");
$affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cliente cadastrado com sucesso'."</p>";
        header("location:../adicionar.mod.php");
    endif;