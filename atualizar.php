<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];
    //conectando ao Banco de Dados
    $local_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = ""; 
    $nome_base_dados = "cadastro";
    $conecta = new mysqli($local_servidor,$nome_usuario,$senha_usuario,$nome_base_dados);
    if ($conecta->connect_error) {
        die("Conexão falhou: " . $conecta->connect_error."<br>");
    }
    //enviando dados 
    $sql = "UPDATE usuarios SET nome='$nome' , email='$email' , senha='$senha' WHERE id='$id'"; 
    if ($conecta->query($sql) === TRUE) {
        echo  "<script>
                  alert('Usuário atualizado com sucesso');
                  window.location.href = 'index.html';
               </script>";
    } else {
        echo "Erro na atualização do registro: " . $conecta->error."<br>";         
    }
?>