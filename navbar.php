
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>El Reventon</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<!-- custom -->
	<link rel="stylesheet" href="css/nav10.css">

</head>
<body>

	<header class="header-main">
		<div class="header-content seeker">
			<div class="search-form">
				<form action="products.php" method="post" id="form">
					<input type="text" name="search" placeholder="Ingrese producto a buscar" autocomplete="off" id="search" maxlength="80" pattern="">
				</form>
				<div class="close"><i class="fas fa-times"></i></div>
			</div>
		</div>
		<div class="logo">
			<img src="img/logo-tipo.png" class="img-logo" alt="">
		</div>
		<div class="navbar-content">
			<nav class="navbar-main">
				<ul class="nvb-nav">
					<li class="nv-item">
						<a class="nv-link" href="index.php">Inicio</a>
					</li>
					<li class="nv-item sub-item">
						<a class="nv-link" href="#">Dama</a>
						<ul class="sub-nav">
							<li class="sub-item">
								<a href="#" class="sub-link">Tenis de Caballero</a>
							</li>
							<li class="sub-item">
								<a href="#" class="sub-link">sub-item</a>
							</li>
							<li class="sub-item">
								<a href="#" class="sub-link">sub-item</a>
							</li>
							<li class="sub-item">
								<a href="#" class="sub-link">sub-item</a>
							</li>
							<li class="sub-item">
								<a href="#" class="sub-link">sub-item</a>
							</li>
						</ul>
					</li>
					<li class="nv-item">
						<a class="nv-link" href="#">Caballero</a>
					</li>
					<li class="nv-item">
						<a class="nv-link" href="#">Juvenil</a>
					</li>
					<li class="nv-item">
						<a class="nv-link" href="#">Niños</a>
					</li>
					<li class="nv-item">
						<a class="nv-link" href="#">Niñas</a>
					</li>
					<li class="nv-item">
						<a class="nv-link" href="#">Infantil</a>
					</li>
					<li class="nv-item">
						<a class="nv-link" href="#">Conocenos</a>
					</li>
					<li class="nv-item">
						<a class="nv-link search-icon"><i class="fas fa-search"></i></a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="search-resp search-icon"><i class="fas fa-search"></i></div>
		<div class="menu-toggle"><i class="fas fa-bars"></i></div>
	</header>


	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/forms.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.menu-toggle').click(function() {
				$('.navbar-content').toggleClass('active');
			});
			$('.sub-item').click(function() {
				$(this).siblings().removeClass('toggle');
				$(this).toggleClass('toggle');
			})
		});
	</script>
</body>
</html>