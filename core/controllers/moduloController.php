<?php
	if ($_POST) {
		include('core/models/class.Acceso.php');
		$acceso= new Acceso();
		$acceso->modulo();
		exit;
	}else{
		$template= new Smarty();
		$template->display('home/modulo.tpl');
	}
 ?>