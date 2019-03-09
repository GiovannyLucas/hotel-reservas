	<?php

	if(isset($_POST['user']) && isset($_POST['senha'])){

		session_start();


		include('DAO/UsuarioDAO.php');
		include('Models/Usuario.php');

		$usuarioDAO = new UsuarioDAO();
		$usuario = new Usuario();

		$usuario->setUsuario($_POST['user']);
		$usuario->setSenha($_POST['senha']);

		$_SESSION['admin'] = $_POST['user'];

		$usuarioDAO->Logar($usuario);
	}
		

	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="js/wow.min.js"></script>
      	<script>
      		new WOW().init();
      	</script>
		<title>Área ADM - Landstar Hotel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="container">
			<div class="wow fadeInUp" data-wow-delay=".2s" style="padding: 15px 0px;" class="form-group">
				<h2>ÁREA ADMINISTRATIVA!</h2>
			</div>
			<div>
				<form  method="post">
					<div style="background-color: white;" class="wow bounceIn form-control">
						<div class="form-group">
							<labeU>USUÁRIO:</label>
							<br><br>
							<input name="user" class="estilo-input" type="text" placeholder="Usuário">
						</div>	
						<br>
						<div class="form-group">
							<label class="text-center">SENHA:</label>
							<br><br>
							<input name="senha" class="estilo-input" type="password" placeholder="Senha">
						</div>	
						<br>
						<div class="form-group">
							
							<button style="width: 70%;" class="botao-success" type="submit">ENTRAR</button>	
							
						</div>			
					</div>
				</form>

			</div>		
		</div>	
	</body>
</html>
