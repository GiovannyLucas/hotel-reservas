<!DOCTYPE html>
<html>
<head>
	<title>Landstar Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<link rel="stylesheet" href="style/css/animate.css">
	<style type="text/css">
		body {background: url(img/holiday-inn-resort-orlando-5288794619-4x3.jpg);}
		div.cont-link {
			border-top-right-radius: 20px; background: rgba(102,204,102,1);
			width: 50%; height: 50px; font-size: 30px; border: none;
			padding: 10px 5px;
		}
	</style>
</head>
<body>
	<?php include('menu.php'); ?>

	<center><section class="content" style="display: inline;">
		
			
			
				
			

			<?php

				if (isset($_GET['id'])) {
					$id = $_GET['id'];

					include('userDAO.php');

					$userDAO = new userDAO();
		
					$user = $userDAO->ListaQuartoId($id);
					
						for ($i=0; $i < count($user); $i++) { 
							echo '
								<div class="conteudo-img" style="margin-top: 70px;">
									<img src="admin/img_upload/'.$user[$i]["img"].'">
								</div>
								<div class="conteudo-info">

									<p class="titulo">Valor por dia: <i>R$'.$user[$i]["diaria"].'</i></p>
									<p class="titulo">Quarto para <i>'.$user[$i]["tamanho"].'</i> pessoa(s)</p>

									<div class="cont-link">								
										<a class="btn-reserv" style="color:white; text-decoration:none;" href="reservar.php?id='.$user[$i]["id"].'" style="text-decoration:none;">Reservar <i class="fa fa-check-circle"></i></a>
									<div>
									<br><br><br><br><br><br><br>
								</div>

							';
						}	
				} else {
					header('location:index.php');
				}

			?>


	</section></center>
<!-- 
	<br><br>
		<section class="rodape">
			<div>
				<img src="img/rodape.png">
			</div>
		</section> -->
</body>
</html>