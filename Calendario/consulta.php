<?php 
  require_once "models/mes.php";
  $fecha = new Mes($_POST["mes"], $_POST["year"]);
  require_once "view/partials/vheader.php";
  require_once "view/vconsulta.php";
  require_once "view/partials/vfooter.php";
?>