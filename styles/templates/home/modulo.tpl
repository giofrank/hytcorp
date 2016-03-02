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
                    <div class="panel-heading"><i class="fa fa-plus"></i>REGISTRO DE NUEVO MODULO</div>
                      <div id="result"></div>
                          <div class="form-group">
                            <div class="col-lg-3">
                               <label for="codigo">Codigo</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="text" id="codigo" class="form-control" placeholder="ingrese nuevo codigo del modulo" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3">
                              <label for="cod_ent">Codigo entidad</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="text" id="cod_ent" class="form-control" placeholder="ingrese codigo principal" required>
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
        var connect, codigo, cod_ent, name, session, form, result;
        codigo=document.getElementById('codigo').value;
        cod_ent=document.getElementById('cod_ent').value;
        name=document.getElementById('name').value;

              
        if (codigo!='' && cod_ent!='' && name!='') {
            cod_ent=document.getElementById('cod_ent').value;
            form='codigo='+codigo+'&cod_ent='+cod_ent+'&name='+name;

            connect=window.XMLHttpRequest?new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

            connect.onreadystatechange = function(){

              if (connect.readyState == 4 && connect.status == 200) {

                if (parseInt(connect.responseText) == 1) {
                  result = "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Registrado: </strong> al sistema H&T</div>";
                    location.href='?view=index';
                  document.getElementById('result').innerHTML = result ;
                }else if (parseInt(connect.responseText) == 2){
                  result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>El codigo del modulo ya extiste.</div>";
            
                   document.getElementById('result').innerHTML = result ;
                }else if (parseInt(connect.responseText) == 3){
                  result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>El nombre del modulo ya existe.</div>";
            
                   document.getElementById('result').innerHTML = result ;
                }else{
                  result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>Datos incorrectos.</div>";
            
                   document.getElementById('result').innerHTML = result ;
                }
              }else if(connect.readyState != 4){
                result = "<div class='alert alert-dismissible alert-warning'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Espere: </strong>Procesando....</div>";
            
                 document.getElementById('result').innerHTML = result ;
              }
            }

            connect.open('POST', '?view=modulo', true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send(form);
          
        }else{
          result = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>x</button><strong>Error: </strong>Los campos son obligatorios, registro todo por favor</div>";
          document.getElementById('result').innerHTML = result ;
        }

    }
  }

</script>