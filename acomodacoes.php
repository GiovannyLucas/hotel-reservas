<!DOCTYPE html>
<html>
<head>
	<title>Landstar Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<link rel="stylesheet" href="style/css/animate.css">
</head>
<body>
	<?php include('menu.php'); ?>


	<section class="sec1">
			<img src="img/acomodacoes/Component4.png" alt="Primeira Foto" />
	</section>

	<center><section class="content">
		
			
			<?php 
				include('userDAO.php');

				$userDAO = new userDAO();
	
				$user = $userDAO->ListaQuartosDisp();
				
					for ($i=0; $i < count($user); $i++) { 
						echo "
						<div class='content-acom'>
						<a href='quarto-detail.php?id=".$user[$i]['id']."'>
							<img src='admin/img_upload/".$user[$i]['img']."'></a>
							<h4>Quarto para ".$user[$i]['tamanho']." pessoa(s)</h4>
							<h6>Diária: R$".$user[$i]['diaria']."</h6>
						</div>	
						";
					}


			?>


	</section></center>

	<br><br>
		<section class="rodape">
			<div>
				<img src="img/rodape.png">
			</div>
		</section>
</body>
</html>