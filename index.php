<?php
include_once 'php/functions.php';
$fun = new funciones();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>El Reventon</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Styles personalize-->
  <link rel="stylesheet" href="css/nv.css">
  <!-- Style FonAwesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>

  <header class="header-main">
    <div class="header-content seeker">
      <div class="search-form">
        <form action="products.php" method="post" id="form">
          <input type="text" name="search" placeholder="Ingrese producto a buscar" autocomplete="off" id="search" maxlength="80">
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


</body>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="js/valided-forms.js"></script>

</html>
