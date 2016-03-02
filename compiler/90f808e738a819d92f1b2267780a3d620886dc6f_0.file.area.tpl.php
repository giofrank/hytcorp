<?php
/* Smarty version 3.1.29, created on 2016-02-25 16:01:26
  from "C:\xampp\htdocs\hyt\styles\templates\home\area.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf1746c26749_71784686',
  'file_dependency' => 
  array (
    '90f808e738a819d92f1b2267780a3d620886dc6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hyt\\styles\\templates\\home\\area.tpl',
      1 => 1456412377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/header.tpl' => 1,
    'file:overall/nav.tpl' => 1,
    'file:overall/fotter.tpl' => 1,
  ),
),false)) {
function content_56cf1746c26749_71784686 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <section class="container-layout">
    
    <section class="container-module">
      <header class="cont-head">
        <a href="index.php?view=registro" class="btn btn-default">Agragar nuevo usuario</a>
         <a href="index.php?view=area" class="btn btn-default">Agragar nueva area</a>
          <a href="index.php?view=modulo" class="btn btn-default">Agragar nuevo modulo</a>
        <h4>H&T CORPORACION INGENIEROS</h4>
      </header>
      <section class="views">
          <dic class="col-lg-6">
                <div class="panel panel-primary form-registro">
                    <div class="panel-heading"><i class="fa fa-plus"></i>REGISTRO DE NUEVO AREA</div>
                      <div id="result"></div>
                          <div class="form-group">
                            <div class="col-lg-3">
                               <label for="codigo">Codigo</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="text" id="codigo" class="form-control" placeholder="ingrese usuario" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3">
                              <label for="pass">Codigo entidad</label>
                            </div>
                            <div class="col-lg-9">
                              <input type="text" id="cod_ent" class="form-control" placeholder="ingrese contraseña" required>
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
              </dic>
      </section>
    </section>
  </section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/fotter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
  
  window.onload =function(){
    document.getElementById('registrar').onclick=function(){
        var connect, codigo, pass, name, dni, session, form, result;
        codigo=document.getElementById('codigo').value;
        cod_ent=document.getElementById('cod_ent').value;
        name=document.getElementById('name').value;

              
        if (codigo!='' && pass!='' && name!='') {
            pass=document.getElementById('pass').value;
            form='codigo='+codigo+'&pass='+pass+'&name='+name+'&dni='+dni;

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

<?php echo '</script'; ?>
><?php }
}
