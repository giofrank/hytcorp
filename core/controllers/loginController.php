<?php
if (!isset($_SESSION['id_login'], $_SESSION['name'])) {
	if ($_POST) {
		include('core/models/class.Acceso.php');
		$acceso= new Acceso();
		$acceso->login();
		exit;
	}else{
		$template= new Smarty();
		$template->display('public/login.tpl');
	}
}else{
	header('location: ?view=login');
}
 ?>