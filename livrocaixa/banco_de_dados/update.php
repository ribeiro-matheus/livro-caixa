<?php 
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome  = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$saldo = $_POST['saldo'];


$queryUpdate = $link->query("update tb_clientes set nome='$nome',email='$email',saldo='$saldo' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:../consultas.php");
endif;