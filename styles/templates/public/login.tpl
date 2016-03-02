<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>H&T CORPORACION INGENIERIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
   
       <link rel="stylesheet" href="styles/css/style.css">
        <link rel="stylesheet" href="styles/css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">


  </head>

  <body>
 		<div class="cont"> </div>
	    <div class="es"></div>
	       <div class="grad"></div>
	       <div class="header-login">H&T CORPORACION INGENIERIA</div>
			  	<div class="demo">
				    <div class="logo"></div>
				    <div class="login">
				      <div id="result"></div>
					    <div class="login__form">
					        <div class="login__row">
					        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
					            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
					          </svg>  
					          <input id="name" type="text" class="login__input name" name="name" placeholder="Usuario"/>
					        </div>
					        <div class="login__row">
					          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
					            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
					          </svg> 
					          <input id="pass" type="password" class="login__input pass" name="pass" placeholder="Contraseña"/>
					        </div>
					        <input id="session" type="button" class="login__submit" value="Iniciar sesion">
					        <p class="login__signup">Acceder si estas registrado</p>
					    </div>
					      
				    </div>
			  	</div>
		<div class="img"></div>
		<footer class="footer-login">Siguenos en: www.facebook.com/profile.profile</footer class="footer-login">
	<script src='styles/js/jquery.js'></script> 
  </body>
</html>

<script>
	
	window.onload =function(){
		document.getElementById('session').onclick=function(){
				var connect, user, pass, session, form, result;
				user=document.getElementById('name').value;
				pass=document.getElementById('pass').value;
				if (user!='' && pass!='') {
						form='user='+user+'&pass='+pass;


						connect=window.XMLHttpRequest?new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');


						connect.onreadystatechange = function(){
							if (connect.readyState == 4 && connect.status == 200) {
								if (parseInt(connect.responseText) == 1) {
									result = "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Bienvenido: </strong> al sistema H&T</div>";
				  					location.href='?view=index';
				 					document.getElementById('result').innerHTML = result ;
								}else{
									result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>Credenciales incorrectas.</div>";
				  	
									 document.getElementById('result').innerHTML = result ;
								}
							}else if(connect.readyState != 4){
								result = "<div class='alert alert-dismissible alert-warning'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Espere: </strong>Procesando....</div>";
				  	
								 document.getElementById('result').innerHTML = result ;
							}
						}

						connect.open('POST', '?view=login', true);
						connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
						connect.send(form);
					
				}else{
					result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>Datos vacios ingrese</div>";
				 	document.getElementById('result').innerHTML = result ;
				}

		}
	}

</script>
