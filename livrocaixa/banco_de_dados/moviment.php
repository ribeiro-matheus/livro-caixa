<?php
session_start();
include_once 'conexao.php';

$somaES = 0;
$querySaldo = $link->query("select saldo from tb_clientes where id='$id'");
while($saldo = $querySaldo->fetch_assoc()):
    $saldoInicial = $saldo['saldo'];
endwhile;
$querySelect = $link->query("select * from tb_movimento where client_id='$id'");
while($registros = $querySelect->fetch_assoc()):
    $desc = $registros['descricao'];
    $tipo = $registros['tipo'];
    $valor = $registros['valor'];

     $qr= $link->query("SELECT SUM(valor) as total FROM tb_movimento WHERE client_id='$id' and tipo = 1");
     $row = $qr->fetch_assoc();
     $entradas = $row['total'];
                 $qr= $link->query("SELECT SUM(valor) as total FROM tb_movimento WHERE client_id='$id' and tipo = 0");
                 $row = $qr->fetch_assoc();
                 $saidas=$row['total'];

                 $somaES = $entradas-$saidas;



       if($tipo == 1):
      echo "<tr>";
          echo "<td>$desc</td><td></td><td class='right green-text'>+R$ $valor</td>";
      echo "</tr>";
       else:
          echo "<tr>";
              echo "<td>$desc</td><td></td><td class='right red-text'>-R$ $valor</td>";
          echo "</tr>";
       endif;
endwhile;

