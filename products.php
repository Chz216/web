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
		<?php $fun->menu(); ?>
	</header>

	<div class="container-main">
		<div class="bread-crumbs">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</div>
		<div class="wraper">
			<div class="col-filters">
				<div class="block-title">
					<strong>
						<span>Filtros</span>
					</strong>
				</div>
				<div class="container-filters">
					<dl id="narrow-by-list">
						<dt>Precio</dt>
						<dd>
							<p><span id="amount"></span></p>

							<div class="price-range" id="slider-range"></div>
							<input class="slider-range" type="hidden" id="amount1">
							<input class="slider-range" type="hidden" id="amount2">
						</dd>
						<dt>Talla</dt>
						<dd>
							
						</dd>
						<dt>Color</dt>
						<dd>
							
						</dd>
						<dt>Acabado</dt>
						<dd>
							
						</dd>
						<dt>Marcas</dt>
						<dd>
							
						</dd>
					</dl>
				</div>
			</div>
			<div class="col-products">
				<ul class="products-grid">
					<?php echo $fun->buscar();?>
				</ul>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
  $(document).ready(function() {
    $('.search-icon').click(function() {
      $('.seeker').slideToggle();
    })
    $('.close').click(function() {
      $('.seeker').slideToggle();
    })
  })
</script> 
</body>
</html>