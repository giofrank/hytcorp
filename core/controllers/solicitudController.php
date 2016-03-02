<?php
	if ($_POST) {
		include('core/models/class.Acceso.php');
		$acceso= new Acceso();
		$acceso->solicitud();
		exit;
	}else{
		$template= new Smarty();
		$template->display('home/solicitud.tpl');
	}
 ?>