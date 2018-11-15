<?php
include_once 'php/functions.php';
$fun = new funciones();
?>
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
	<link rel="stylesheet" href="css/nav.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<!-- custom -->
	<link rel="stylesheet" href="css/products.css">

</head>
<body>

	<header class="header-main">
		<div class="header-content seeker">
			<div class="search-form">
				<form action="products.php" method="post" id="form">
					<input type="search" name="search" placeholder="Buscar productos..." autocomplete="off" id="search">
				</form>
				<div class="close"><i class="fas fa-times"></i></div>
			</div>
		</div>
		<div class="navbar-content">
			<div class="logo">
				<img src="img/logo-tipo.png" alt="" class="img-logo">
			</div>
			<nav class="navbar-main">
				<ul class="nvb-nav justify-content-end">
					<li class="nv-item"><a class="nv-link" href="index.php">Inicio</a></li>
					<li class="nv-item"><a class="nv-link" href="#">Dama</a></li>
					<li class="nv-item"><a class="nv-link" href="#">Caballero</a></li>
					<li class="nv-item"><a class="nv-link" href="#">Juvenil</a></li>
					<li class="nv-item"><a class="nv-link" href="#">Niños</a></li>
					<li class="nv-item"><a class="nv-link" href="#">Niñas</a></li>
					<li class="nv-item"><a class="nv-link" href="#">Infantil</a></li>
					<li class="nv-item"><a class="nv-link" href="#">Conocenos</a></li>
					<li class="nv-item"><a class="nv-link search-icon"><i class="fas fa-search"></i></a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container-main">
		<h1>No se encontro ningun resultado</h1>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/valided-forms.js"></script>
</body>
</html>
