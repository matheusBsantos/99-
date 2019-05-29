<?php
include("conex.php");
$CD = new Conexao;
$conecta = $CD->conectaBD();
$nomeevento=$_POST['nomeevento'];
$endereco=$_POST['endereco'];
$cidade=$_POST['cidade'];
$descricao=$_POST['descricao'];
$sql = "INSERT INTO evento (nomeevento,endereco,cidade,descricao) VALUES ('{$nomeevento}','{$endereco}','{$cidade}','{$descricao}')";

if ($conecta->query($sql) === TRUE) {
 echo "<script>
                  alert('Cadastro realizado com sucesso');
                  window.location.href = 'indexlogado.php';
               </script>";
    } else {
        echo "<script>
                  alert('Erro ao criar evento');
                  window.location.href = 'cdevento.php';
               </script>";
    }
    $conecta->close();
?>