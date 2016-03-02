<?php

	$template= new Smarty();
	$type=isset($_GET['type'])?$_GET['type']:null;

	$db= new Conexion();

	switch ($type) {
		case 'almacen':
			echo 'almacen';
			break;
		case 'otro':
			
			break;
		
		default:
			$sql= $db->query("SELECT * FROM area_hyt WHERE sub_area='almacen';");
			if ($db->rows($sql)>0) {
				$psql="SELECT name FROM module_hyt WHERE id_module=?;";
				$prepare_sql=$db->prepare($psql);
				$prepare_sql->bind_param('i',$id_module);
				
				while($x=$db->recorrer($sql)){

					$id_module=$x['id_module'];
					$prepare_sql->execute();
					$prepare_sql->bind_result($name);
					$prepare_sql->fetch();

					$almacen[] = array(
						'id_module' =>$name,
						'name' =>$x['name'] ,
						'central' =>$x['central'] ,
						'sub_area' =>$x['sub_area']
						);
				}
				$prepare_sql->close();
				$template->assign('almacen', $almacen);
			}
		break;
	}
		$template->display('home/almacen.tpl');
	
 ?>