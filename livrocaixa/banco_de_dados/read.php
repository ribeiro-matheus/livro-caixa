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
        <td><a href='editar.php?id=$id'><i class='material-icons'>create</i></a></td>
        <td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";
endwhile;