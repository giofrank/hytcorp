<?php
/* Smarty version 3.1.29, created on 2016-03-02 15:46:55
  from "C:\xampp\htdocs\hyt\styles\templates\home\solicitud.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d6fcdf287158_39113480',
  'file_dependency' => 
  array (
    '2b12c9daa5636d971117b062fdcdca274bd625d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hyt\\styles\\templates\\home\\solicitud.tpl',
      1 => 1456930010,
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
function content_56d6fcdf287158_39113480 ($_smarty_tpl) {
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
          <dic class="col-lg-12">
                <div class="panel panel-primary form-registro">
                    <div class="panel-heading"><i class="fa fa-plus"></i> SOLICITUD DE COMPRA</div>
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
                              <input type="text" id="pass" class="form-control" placeholder="ingrese contraseña" required>
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
              </dic>
      </section>
    </section>
  </section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/fotter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
