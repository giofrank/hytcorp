<?php
	if ($_POST) {
		include('core/models/class.Acceso.php');
		$acceso= new Acceso();
		$acceso->compra();
		exit;
	}else{
		$template= new Smarty();
		$template->display('home/logistica.tpl');
	}
 ?>