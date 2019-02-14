<!DOCTYPE html>
<html>
<head>
	<title>Landstar Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<link rel="stylesheet" href="style/css/animate.css">

	<?php include('menu.php'); ?>

	<script type="text/javascript">
		$(function() {
			$('#slideShow').cycle({ 
				fx: 'fade'
			});
		});
	</script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		
	</script>
	<script type="text/javascript" src="style/js/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
</head>	

		<section class="sec1">
			<div id="slideShow">
				<img src="img/slideShow/1.jpg" alt="Primeira Foto" />
				<img src="img/slideShow/2.jpg" alt="Segunda Foto" />
				<img src="img/slideShow/3.jpg" alt="Terceira Foto" />
			</div>
		</section>

		<section class="barra-acomodacoes">
			
			<div class="barra-azul" id="barra-1">
				
				<div class="letra">
					<p class="legenda-g wow jackInTheBox" data-wow-delay="1s">Nossas acomodações</p>
				</div>

				<img src="img/slideShow/1.jpg" class="img-barra wow zoomInDown" alt="Primeira Foto" />
				<img src="img/slideShow/1.jpg" class="img-barra wow zoomInDown" alt="Primeira Foto" class="img-barra" />
				<img src="img/slideShow/1.jpg" class="img-barra wow zoomInDown" alt="Primeira Foto" class="img-barra" />

			</div>



		</section>
	
		<section class="barra-pacotes" style="margin-top: 70px">
			
			<div class="barra-azul">
				
				<div class="letra">
					<p class="legenda-g wow jackInTheBox" data-wow-delay="1s">Conheça nossos pacotes</p>
				</div>

				<img src="img/slideShow/1.jpg" class="img-barra wow zoomInDown" alt="Primeira Foto" />
				<img src="img/slideShow/1.jpg" class="img-barra wow zoomInDown" alt="Primeira Foto" class="img-barra" />
				<img src="img/slideShow/1.jpg" class="img-barra wow zoomInDown" alt="Primeira Foto" class="img-barra" />

			</div>

		</section>

		<section class="barra-sobre">
			
			<div class="barra-azul">
				
				<div class="letra">
					<p class="legenda-g wow jackInTheBox" data-wow-delay="1s">Sobre nós</p>
				</div>

				<p class="text-sobre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

		</section>
		<br><br>
		<section class="rodape">
			<div>
				<img src="img/rodape.png">
			</div>
		</section>
	</div>

</body>

</html>
