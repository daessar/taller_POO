<?php 
  require_once "models/comision.php";
  $comision = new Comision($_POST["comision"]);
  require_once "view/partials/vheader.php";
  require_once "view/vresultado.php";
  require_once "view/partials/vfooter.php";
?>