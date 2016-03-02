<?php
	if ($_POST) {
		include('core/models/class.Acceso.php');
		$acceso= new Acceso();
		$acceso->area();
		exit;
	}else{
		$template= new Smarty();
		$template->display('home/area.tpl');
	}
 ?>