<?php 

	session_start();
	$view=isset($_GET['view'])? $_GET['view']:'login';
	require('core/libs/smarty/Smarty.class.php');
	require('core/models/class.Conexion.php');

	if (file_exists('core/controllers/'.$view.'Controller.php')) {
		include('core/controllers/'.$view.'Controller.php');
	}else{
		include('core/controllers/errorController.php');
	}


 ?>