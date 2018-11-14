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
	   <h1>No se encontro ningun resultado</h1>
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
