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

	<!-- <script   src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			  crossorigin="anonymous"></script>
	 -->
	<script type="text/javascript" src="style/js/script.js"></script>
	<script type="text/javascript">
		$(window).on('scroll', function(){
			if($(window).scrollTop()){
				$('header').addClass('blue');
				$('header').addClass('top');

			} else {
				$('header').removeClass('blue');
				$('header').removeClass('top');
			}
		});

	</script>
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<body>

	<header>
		<div class="logo">
				<img onclick="Top()" src="../img/Site hotel img/logos/c6fb5b64c52ff8fe978152ba26409d19.png" style="height: 50px">
		</div>

		<nav class="active">
			<ul>
				<li><a href="admin.php" class="active">Home</a></li>
				<li><a href="adicionarquarto.php">Adicionar quarto</a></li>
				<li><a href="?opc=verr">Ver reservas</a></li>
				<li><a href="?opc=verc">Ver clientes</a></li>
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

	<?php

	?>