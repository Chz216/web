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
  <link rel="stylesheet" href="css/nav.css">
  <!-- Style FonAwesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>

<header class="header-main">
  <?php $fun->menu(); ?>
</header>


</body>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/valided-form.js"></script>

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

</html>
