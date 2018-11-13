<?php 

include_once 'php/conexion.php';

class funciones{

  private $bd;

  function __construct(){
    $this->bd = new database();
  }

  public function buscar(){
    if (isset($_POST['search'])) {
      $buscar = $_POST['search'];
      $busqueda = $this->bd->showProduct($buscar);
      $texto='';
      foreach ($busqueda as $bus){
        $texto.='
        <li class="item-product"> 
            <a href="#">
              <img class="img-product" src="img/'.$bus['imagen'].'" alt="">
            </a>
            <div class="product-info">
              <h2 class="product-name">'.$bus['Nom_producto'].'</h2>
            </div>
            <div class="price-box">
              <span>$'.$bus['Precio'].'.00</span>
            </div>
            <div class="block-button">
              <a href="#" class="button-detail">Ver Detalles</a>
            </div>
        </li>
       ';
      }
      return $texto; 
    }
  }

   public function menu() {
    $menu='
      <div class="header-content seeker">
    <div class="search-form">
      <form action="products.php" method="post">
      <input type="search" name="search" placeholder="Buscar productos..." autocomplete="off">
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
      <li class="nv-item"><a class="nv-link" href="#">Inicio</a></li>
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
    ';
    echo $menu;
  }
 
}
?>