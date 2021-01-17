<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");
while($registros = $querySelect->fetch_assoc()):
    $id    = $registros['id'];
    $nome  = $registros['nome'];
    $email = $registros['email'];
    $saldo = $registros['saldo'];

    echo "<tr>";
        echo "<td>$nome</td><td>$email</td>
        <td class='center'><a href='adicionar.php?id=$id'><i class='material-icons'>add_circle</i></a></td>";
    echo "</tr>";
endwhile;