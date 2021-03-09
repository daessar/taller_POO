<?php
  require_once "models/paquete.php";
  $envio = new Paquete($_POST["tipo"], $_POST["servicio"],$_POST["peso"]);
  require_once "view/partials/vheader.php";
  require_once "view/vresultado.php";
  require_once "view/partials/vfooter.php";
?>