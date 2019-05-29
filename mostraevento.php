<?php

include("conex.php");
$consulta = "SELECT * FROM evento";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
        <table>
            <tr>
                <td>Nome do evento</td>
                <td>endereço do evento</td>
                <td>cidade</td>
                <td>descrição</td>
                </tr>
                <?php while($dado = $con->fetch_array()){ ?>
                <tr>
                <td><?php echo $dado["nomeevento"]; ?></td>
                <td><?php echo $dado["endereco"]; ?></td>
                <td><?php echo $dado["cidade"]; ?></td>
                <td><?php echo $dado["descricao"]; ?></td>
                </tr>
                <?php } ?>
        
    </body>
</html>