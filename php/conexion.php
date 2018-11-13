<?php

class database {
  private $pdo;//variable para iniciar el pdo
  var $host = "localhost";//nombre del host que se ocupara
  var $bdname = "catalago_reventon";//nombre de la base de datos
  var $user = "root";//nombre del usuario
  var $password = "";//la contraseña para acceder a la base

  public function __construct() {
    try {
      //se conecta a la base
      $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->bdname, $this->user, $this->password);//prepara la conexión
      $this->pdo->exec("set character set utf8");
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();//mensaje por si surge un error
    }
  }
//cierra la conexion
  function CerrarConexion() {
    $this->pdo = null;
  }

  function showProduct($buscar){
    $sql = $this->pdo->prepare("SELECT Nom_producto, Talla, imagen, Precio FROM articulo WHERE Nom_producto LIKE '%$buscar%'");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }else{
        echo 'No hemos encontrado ningun registro con la palabra '.$buscar;
      }
    $this->CerrarConexion();
  }

  
} 