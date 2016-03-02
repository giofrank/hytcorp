<?php 
	class Acceso{
		private $user;
		private $pass;
		private $pg_query;

		private function Encrypt($string){
			$sizeof=strlen($string)-1;
			$result='';
			for ($i=$sizeof; $i >=0 ; $i--) { 
				$result.=$string[$sizeof];
			}
			$result=md5($result);
			return $result;
		}

		public function Login(){
			try {
				if (!empty($_POST['user']) and !empty($_POST['pass'])) {
					$db= new Conexion();
					$this->user = mysqli_real_escape_string($db,$_POST['user']);
					$this->pass = $this->Encrypt($_POST['pass']);
					$sql=$db->query("select * from login where login_user='$this->user' and login_pass='$this->pass';");
					if ($db->rows($sql)>0) {
						$datos = $db->recorrer($sql);
						$_SESSION['id_login']=$datos['id_login'];
						$_SESSION['name']=$datos['login_name'];
						echo 1;
					}else{
						throw new Exception(2);
						
					}
					$db->liberar($sql);
					$db->close();
				}else{
					throw new Exception("Error: Datos vacios");
					
				}
				
			} catch (Exception $login) {
				echo $login->getMessage();
			}
		}

		public function Recuperar(){

		}

		public function registro(){
			try {
				if (!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['name']) and !empty($_POST['dni'])) {
					$db= new Conexion();
					$this->user = mysqli_real_escape_string($db,$_POST['user']);
					$this->name = mysqli_real_escape_string($db,$_POST['name']);
					$this->dni = mysqli_real_escape_string($db,$_POST['dni']);
					$this->pass = $this->Encrypt($_POST['pass']);
					$sql=$db->query("select * from login where login_user='$this->user' or login_dni='$this->dni';");

					if ($db->rows($sql)==0) {
						$sql2=$db->query("insert into login (login_user, login_pass, login_name, login_dni) values('$this->user', '$this->pass', '$this->name', $this->dni);");					
						echo 1;
					}else{
						$datos = $db->recorrer($sql);
						if (strtolower($this->user)==strtolower($datos['login_user'])) {
							throw new Exception(2);
						}else{
							throw new Exception(3);
						}
					}
					$db->liberar($sql);
					$db->close();
				}else{
					throw new Exception("Error: Datos vacios");
					
				}
				
			} catch (Exception $registro) {
				echo $registro->getMessage();
			}
		}

		public function modulo(){
			try {
				if (!empty($_POST['codigo']) and !empty($_POST['cod_ent']) and !empty($_POST['name'])) {
					$db= new Conexion();
					$this->codigo = mysqli_real_escape_string($db,$_POST['codigo']);
					$this->name = mysqli_real_escape_string($db,$_POST['name']);
					$this->cod_ent = mysqli_real_escape_string($db,$_POST['cod_ent']);
					$sql=$db->query("select * from module_hyt where name='$this->name' or id_module='$this->codigo';");

					if ($db->rows($sql)==0) {
						$sql2=$db->query("insert into module_hyt (id_module, id_hyt, name) values('$this->codigo', $this->cod_ent, '$this->name');");					
						echo 1;
					}else{
						$datos = $db->recorrer($sql);
						if (strtolower($this->codigo)==strtolower($datos['name'])) {
							throw new Exception(2);
						}else{
							throw new Exception(3);
						}
					}
					$db->liberar($sql);
					$db->close();
				}else{
					throw new Exception("Error: Datos vacios");
					
				}
				
			} catch (Exception $modulo) {
				echo $modulo->getMessage();
			}
		}

	}
	
 ?>