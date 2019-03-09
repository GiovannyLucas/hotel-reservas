	<?php
		session_start();

		if (!isset($_SESSION['admin'])) {
			header('location:index.php');
		}

		if (isset($_GET['sair'])) {
			unset($_SESSION['admin']);
			session_destroy();
			header('location:index.php');
		}
	?>	
	<title>Landstar hotels - Área ADM</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="../img/Site hotel img/logos/icon.png">
	<link rel="stylesheet" href="style-menu.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="style/js/jquery.cycle.all.js"></script>
	<script type="text/javascript">
		function Top() {
			$('html, body').animate({scrollTop: 0}, 'slow');			
		}
	</script>

	<script   src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			  crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="style/js/script.js"></script>
	<script type="text/javascript">
		$(window).on('scroll', function(){
			if($(window).scrollTop()){
				$('header').addClass('blue');
			} else {
				$('header').removeClass('blue');
			}
		});

	</script>
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<style type="text/css">
		.img-logo:hover {
			transform: scale(1.2);
			transition: .3s;
		}
		.img-logo {
			transform: scale(1);
			transition: .3s;
		}

		a {
			text-decoration: none;
			color: white;
		}
	</style>

<body>

	<header>
		<div class="logo">
				<img onclick="Top()" src="../img/Site hotel img/logos/c6fb5b64c52ff8fe978152ba26409d19.png" class="img-logo" style="height: 50px">
		</div>

		<nav class="active">
			<ul>
				<li><a href="admin.php" class="active">Home</a></li>
				<li><a href="opcoes-quarto.php">Quarto <i class="fa fa-bed"></i></a></li>
				<li><a href="opcoes-reserva.php">Reservas <i class="fa fa-address-book"></i></a></li>
				<li><a href="cadastrar-admin.php">Cadastrar ADM <i class="fa fa-plus"></i></a></li>
				<li><a href="?sair">Logout <i class="fa fa-sign-out"></i></a></li>
			</ul>
		</nav>
		<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
	</header>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.menu-toggle').click(function() {
				$('nav').toggleClass('active');
			})
		})
	</script>
