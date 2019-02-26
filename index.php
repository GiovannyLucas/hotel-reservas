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

	<style type="text/css">
		.sec1 {
			width: 100%;
			height: 90vh;
		}
	</style>
</head>	
		<section class="sec1">
			<div id="slideShow">
				<img src="img/slideShow/1.jpg" alt="Primeira Foto" />
				<img src="img/slideShow/2.jpg" alt="Segunda Foto" />
				<img src="img/slideShow/3.jpg" alt="Terceira Foto"/>
			</div>
		</section>

		<section class="barra-acomodacoes">
			
			<div class="barra-azul" id="barra-1">
				
				<div class="letra">
					<p class="legenda-g wow jackInTheBox" data-wow-delay="1s">Nossas acomodações</p>
				</div>

				<?php 
					include('userDAO.php');

					$userDAO = new userDAO();
		
					$user = $userDAO->ListaQuartosIndex();
					
						for ($i=0; $i < count($user); $i++) { 
							echo "
							
							<a href='quarto-detail.php?id=".$user[$i]['id']."'>
								<img class='img-barra wow zoomInDown' src='admin/img_upload/".$user[$i]['img']."'></a>
								
								
							";
						}
				?>

			</div>



		</section>
	
		<section class="barra-pacotes" style="margin-top: 70px">
			
			<div class="barra-azul">
				
				<div class="letra">
					<p class="legenda-g wow jackInTheBox" data-wow-delay="1s">Veja nossos ambientes de lazer</p>
				</div>

				<img src="img/a1.jpg" class="img-barra wow zoomInDown"/>
				<img src="img/a2.jpg" class="img-barra wow zoomInDown"/>
				<img src="img/a3.jpg" class="img-barra wow zoomInDown"/>

			</div>

		</section>

		<section class="barra-sobre">
			
			<div class="barra-azul">
				
				<div class="letra">
					<p class="legenda-g wow jackInTheBox" data-wow-delay="1s">Sobre nós</p>
				</div>

				<p class="text-sobre">
					Somos uma rede de Hoteis que visamos o conforto e a segurança dos nossos clientes. O Landstar Hoteis oferece a você, apartamentos com ar condicionado, com uma vista perfeita, uma área de lazer com hidromassagem, academia, parque aquatico, piscinas para adulto e crianças, temos estacionamento privativo, Internet Wi-fi gratuita, dentre muitas outras vantagens.
				</p>

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
