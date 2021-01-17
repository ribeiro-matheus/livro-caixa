<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");
while($registros = $querySelect->fetch_assoc()):
    $id    = $registros['id'];
    $nome  = $registros['nome'];
    $email = $registros['email'];
    $saldo = $registros['saldo'];

    echo "<tr>";
        echo "<td>$nome</td><td>$email</td><td>$saldo</td>
        <td><a href='movimentacao_client.php?id=$id'>Ver movimentação</a></td>";
    echo "</tr>";
endwhile;