<?php 
  require_once "models/viaje.php";
  $pasajeros = new Viaje($_POST["neira"], $_POST["aranzazu"], $_POST["salamina"], $_POST["pacora"], $_POST["aguadas"],);
  require_once "view/partials/vheader.php";
  require_once "view/vresultado.php";
  require_once "view/partials/vfooter.php";
?>