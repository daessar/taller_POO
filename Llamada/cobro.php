<?php 
	require_once "models/llamada.php";
	$llamada = new Llamada($_POST["indicativo"], $_POST["duracion"]); 
	require_once "view/partials/vheader.php";
	require_once "view/vcobro.php";
	require_once "view/partials/vfooter.php";
 
 ?>