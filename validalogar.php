<?php
    session_start();
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    
    $local="localhost";
    $usuario_BD="root";
    $senha_BD="";
    $base="cadastro";
    
    
    $tenta_conectar =  new mysqli($local,$usuario_BD,$senha_BD,$base);
    if($tenta_conectar->connect_error === TRUE)
    {    die("Deu erro na conexão ". $tenta_conectar->connect_error);}
    
    
    $tenta_achar = "SELECT email,senha FROM usuarios WHERE email='$email' AND senha= '$senha'" ;
    $resultado = $tenta_conectar->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        echo "<script>
                  alert('Logado com sucesso');
                  window.location.href = 'indexlogado.php';
               </script>";
        
    }
    else{
        session_unset();//remove todas as variáveis de sessão
        session_destroy();//destroi a sessão
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'pagina_login.php';
            </script>";
      }
?>