{include 'overall/header.tpl'}
<body>
	{include 'overall/nav.tpl'}

  <section class="container-layout">
    
    <section class="container-module">
      <header class="cont-head">
        <a href="index.php?view=registro" class="btn btn-default">Agragar nuevo usuario</a>
        <a href="index.php?view=area" class="btn btn-default">Agragar nueva area</a>
          <a href="index.php?view=modulo" class="btn btn-default">Agragar nuevo modulo</a>
        <h4>H&T CORPORACION INGENIEROS</h4>
      </header>
      <section class="views">
              <div class="col-lg-6">
                <div class="panel panel-primary form-registro">
                    <div class="panel-heading"><i class="fa fa-plus"></i>REGISTRO DE NUEVO USUARIO</div>
                      <div id="result"></div>
                          <div class="form-group">
                            <div class="col-lg-3">
                               <label for="user">Usuario</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="text" id="user" class="form-control" placeholder="ingrese usuario" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3">
                              <label for="pass">Contraseña</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="password" id="pass" class="form-control" placeholder="ingrese contraseña" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3">
                              <label for="name">Nombre</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="text" id="name" class="form-control" placeholder="ingrese nombre" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3">
                              <label for="dni">DNI</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="text" id="dni" class="form-control" placeholder="ingrese numero de DNI" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-9">
                               <input type="button" id="registrar" class="btn btn-success" value="Guardar registro">
                               <a href="index.php?view=index" class="btn btn-danger">Cancelar</a>
                            </div>
                          </div>      
                  </div>
              </div>
      </section>
    </section>
  </section>
{include 'overall/fotter.tpl'}
<script>
  
  window.onload =function(){
    document.getElementById('registrar').onclick=function(){
        var connect, user, pass, name, dni, session, form, result;
        user=document.getElementById('user').value;
        pass=document.getElementById('pass').value;
        name=document.getElementById('name').value;
        dni=document.getElementById('dni').value;

              
        if (user!='' && pass!='' && name!='' && dni!='') {
        pass=document.getElementById('pass').value;
            form='user='+user+'&pass='+pass+'&name='+name+'&dni='+dni;

            connect=window.XMLHttpRequest?new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

            connect.onreadystatechange = function(){

              if (connect.readyState == 4 && connect.status == 200) {

                if (parseInt(connect.responseText) == 1) {
                  result = "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Registrado: </strong> al sistema H&T</div>";
                    location.href='?view=index';
                  document.getElementById('result').innerHTML = result ;
                }else if (parseInt(connect.responseText) == 2){
                  result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>El usuario ya existe.</div>";
            
                   document.getElementById('result').innerHTML = result ;
                }else if (parseInt(connect.responseText) == 3){
                  result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>El numero de DNI ya extiste.</div>";
            
                   document.getElementById('result').innerHTML = result ;
                }else{
                  result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>Datos incorrectas.</div>";
            
                   document.getElementById('result').innerHTML = result ;
                }
              }else if(connect.readyState != 4){
                result = "<div class='alert alert-dismissible alert-warning'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Espere: </strong>Procesando....</div>";
            
                 document.getElementById('result').innerHTML = result ;
              }
            }

            connect.open('POST', '?view=registro', true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send(form);
          
        }else{
          result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>Los campos son obligatorios, registro todo por favor</div>";
          document.getElementById('result').innerHTML = result ;
        }

    }
  }

</script>
