<?php
	if ($_POST) {
		include('core/models/class.Reportes.php');
		$acceso= new Reportes();
		$acceso->inventario();
		exit;
	}else{
		$template= new Smarty();
		$template->display('home/inventario.tpl');
	}
 ?>