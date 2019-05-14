<?php
include("conex.php");
$CD = new Conexao;
$conecta = $CD->conectaBD();
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";

if ($conecta->query($sql) === TRUE) {
 echo "<script>
                  alert('Cadastro realizado com sucesso');
                  window.location.href = 'index.html';
               </script>";
    } else {
        echo "<script>
                alert('Erro no cadastro');
                window.location.href = 'cadastro.php';
            </script>";
    }
    $conecta->close();
?>


