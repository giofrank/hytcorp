<?php
	if ($_POST) {
		include('core/models/class.Acceso.php');
		$acceso= new Acceso();
		$acceso->registro();
		exit;
	}else{
		$template= new Smarty();
		$template->display('home/registro.tpl');
	}
 ?>