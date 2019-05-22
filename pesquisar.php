<!DOCTYPE html>
<html lang="zxx">
<head>
    <?php 
        session_start();



        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'exemplo.html';
                </script>";

        }
        $logado=$_SESSION['email'];
        ?>

	<title>DDR-Dança de Rua</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="index.html" class="site-logo">
					<img src="./img/logo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
                                            <a href="logout.php">LOGOUT</a> 
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="index.html">Início</a></li>
						<li><a href="games.html">eventos</a>
							<ul class="sub-menu">
								<li><a href="game-single.html">Game Singel</a></li>
							</ul>
						</li>
						<li><a href="review.html">Praticar</a></li>
						
						<li><a href="contact.html">Contato</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Adicionar Evento</h2>
			<div class="site-breadcrumb">
				<a href="index.html">Início</a>  /
				<span>Adicionar Evento</span>
			</div>
		</div>
	</section>
<center id="cor_nome"><h2>PERFIL</h2></center><br>
<?php
    $pesquisa = $_POST['pesquisa'];
    //conectando ao Banco de Dados
    $local_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = ""; 
    $nome_base_dados = "cadastro";
    $conecta = new mysqli($local_servidor,$nome_usuario,$senha_usuario,$nome_base_dados);
    if ($conecta->connect_error) {
        die("Conexão falhou: " . $conecta->connect_error."<br>");
    }
    //pesquisando dados 
    
    
  
    $sql = "SELECT * FROM usuarios WHERE nome like '%$pesquisa%'";
    $resultado = $conecta->query($sql); 
    if ($resultado->num_rows > 0) { 
        while($linha = $resultado->fetch_assoc()) { 
            
            echo "<center>ID do usuário = " . $linha["id"]."</center><br><center>Nome do usuário= ". $linha["nome"]."<br></center>  <center>email = ". $linha["email"]."<br></center><center> senha = " . $linha["senha"]. "</center><br>"; 
        }    
    } 
    else { 
        echo "<script>
                alert('Usuário não encontrado');
                window.location.href = 'pesquisar.html';
            </script>";
    }
    $conecta->close();
?>
<center>  <a href="attusuario.php">Atualizar perfil</a><br></center><br>
<center>  <a href="excluirusuario.php">Excluir perfil</a><br></center><br>
<!-- parte final-->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="img/footer-left-pic.png" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="img/footer-right-pic.png" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="./img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="">Inicío</a></li>
				<li><a href="">eventos</a></li>
				<li><a href="">eventos</a></li>
				<li><a href="">sobre</a></li>
				<li><a href="">Contato</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">DDR</a> 2019 @ Todos os direitors reservados</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>