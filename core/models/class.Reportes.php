<?php 
	class Reporte{
		private $user;
		private $pass;
		private $pg_query;

		public function _fetchAll($sql){
			try {
				return mysqli_fetch_array($sql);
				
			} catch (Exception $reporte) {
				echo $reporte->getMessage();
			}
		}
	}
	
 ?>