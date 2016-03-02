<?php
	if ($_POST) {
		include('core/models/class.Acceso.php');
		$acceso= new Acceso();
		$acceso->movimiento();
		exit;
	}else{
		$template= new Smarty();
		$template->display('home/movimiento.tpl');
	}
 ?>