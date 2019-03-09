	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="img/Site hotel img/logos/icon.png">
	<link rel="stylesheet" href="style/css/style-menu.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="style/js/jquery.cycle.all.js"></script>
	<script type="text/javascript">
		function Top() {
			$('html, body').animate({scrollTop: 0}, 'slow');			
		}
	</script>

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

	<style type="text/css">
		.img-logo:hover {
			transform: scale(1.2);
			transition: .3s;
			cursor: pointer;
		}
		.img-logo {
			transform: scale(1);
			transition: .3s;
			cursor: pointer;
		}
	</style>
<body>

	<header>
		<div class="logo">
				<img onclick="Top()" src="img/Site hotel img/logos/c6fb5b64c52ff8fe978152ba26409d19.png" class="img-logo" style="height: 50px">
		</div>

		<nav class="active">
			<ul>
				<li><a href="index.php">Home <i class="fa fa-home"></i></a></li>
				<li><a href="acomodacoes.php">Acomodações <i class="fa fa-bed"></i></a></li>
				<li><a href="ambientes.php">Ambientes <i class="fa fa-tree"></i></a></li>
				<li><a class="active">Reservar</a></li>
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