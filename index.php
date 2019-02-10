<!DOCTYPE html>
<html>
<head>
	<title>Landstar Hotel</title>
	<link rel="icon" type="image/x-icon" href="img/Site hotel img/logos/icon.png">
	<link rel="stylesheet" href="style/css/style.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="style/js/jquery.cycle.all.js"></script>
	<script type="text/javascript">
		$(window).on('scroll', function(){
			if($(window).scrollTop()){
				$('nav').addClass('blue');
				$('nav').addClass('top');

			} else {
				$('nav').removeClass('blue');
				$('nav').removeClass('top');
			}
		});

	</script>
	<script type="text/javascript">
		$(function() {
			$('#slideShow').cycle({ 
				fx: 'fade'
			});
		});
	</script>
</head>	
<body>
	<div class="linhaPreta"></div>
	<div class="wrapper">
		<nav>
			<div class="logo"><img src="img/Site hotel img/logos/c6fb5b64c52ff8fe978152ba26409d19.png"></div>
			<ul>
				<li><a href="#">Home</li>
				<li><a href="#">Acomodações</li>
				<li><a href="#">Pacotes</li>
				<li><a href="#">Sobre</li>
				<li><a href="#" class="active">Reservar</a></li>
			</ul>
		</nav>

		<section class="sec1">
			<div id="slideShow">
				<img src="img/slideShow/1.jpg" alt="Primeira Foto" />
				<img src="img/slideShow/2.jpg" alt="Segunda Foto" />
				<img src="img/slideShow/3.jpg" alt="Terceira Foto" />
			</div>

		</section>
		<section class="content">
			<p>
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p>
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</section>

	</div>

</body>

</html>
