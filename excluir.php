<?php
    $id = $_POST['id'];
    $local_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = ""; 
    $nome_base_dados = "cadastro";
    $conecta = new mysqli($local_servidor,$nome_usuario,$senha_usuario,$nome_base_dados);
    if ($conecta->connect_error) {
        die("Conexão falhou: " . $conecta->connect_error."<br>");
    }
   
    $sql = "DELETE FROM usuarios WHERE id='$id'";
    if ($conecta->query($sql) === TRUE) {
        echo  "<script>
                  alert('usuário apagado com sucesso');
                  window.location.href = 'index.html';
               </script>";
    } else {
        echo "Erro ao apagar o registro: " . $conecta->error."<br>";
    }
    $conecta->close();
?>
