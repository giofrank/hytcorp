<?php 
	unset($_SESSION['id_login'],$_SESSION['name']);
	session_destroy();
	header('location: index.php?view=login');
 ?>