<?php
/* Smarty version 3.1.29, created on 2016-03-01 07:32:15
  from "C:\xampp\htdocs\hyt\styles\templates\home\logistica.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d5376fb9e252_04280205',
  'file_dependency' => 
  array (
    'a7c2e771cb8e57694bfa424d9ce8159c56538097' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hyt\\styles\\templates\\home\\logistica.tpl',
      1 => 1456813935,
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
function content_56d5376fb9e252_04280205 ($_smarty_tpl) {
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
          <div class="col-lg-4">
                <div class="panel  form-registro">
                    <div class="panel-heading panel-articulos"><i class="fa fa-plus"></i> ARTICULOS - ACTIVOS</div>
                    <div class="content-articles">
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Registrar entrada de articulo</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Registrar salida de articulo</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Ver stock de articulo</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Ver todos de articulo</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Actualizar datos articulo</a>
                      </div>
                    </div>
                </div>
          </div>
          <div class="col-lg-4">
                <div class="panel form-registro">
                    <div class="panel-heading panel-almacenes"><i class="fa fa-plus"></i> ALMACENES - PROYECTOS</div>
                    <div class="content-articles">
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Registrar nuevo almacen</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Dar de baja almacen</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Ver detalles de almacen</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Ver inventario de almacen</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Actualizar datos de almacen</a>
                      </div>
                    </div>   
                </div>
          </div>
          <div class="col-lg-4">
                <div class="panel form-registro">
                    <div class="panel-heading panel-orden"><i class="fa fa-plus"></i> ORDEN DE COMPRA</div>
                    <div class="content-articles">
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Registrar nueva orden de compra</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Verificar orden de compra</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">ver detalle de orden de compra</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Buscar orden de commpra</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Actualizar datos de orden de compra</a>
                      </div>
                    </div>    
                </div>
          </div>
          <div class="col-lg-4">
                <div class="panel form-registro">
                    <div class="panel-heading panel-solicitud"><i class="fa fa-plus"></i> SOLICITUD DE COTIZACION</div>
                    <div class="content-articles">
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Generar cotizacion</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Ver estao de cotizacion</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Observacion de cotizacion</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Verificar cotizacion</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Actualizar datos co0tizacion</a>
                      </div>
                    </div>   
                </div>
          </div>
          <div class="col-lg-4">
                <div class="panel form-registro">
                    <div class="panel-heading panel-inventario"><i class="fa fa-plus"></i> INVETARIO MENSUAL</div>
                    <div class="content-articles">
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Ver inventario general</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Ver inventario de almacen especifico</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Buscar inventario</a>
                      </div>
                    </div>   
                </div>
          </div>
          <div class="col-lg-4">
                <div class="panel form-registro">
                    <div class="panel-heading panel-personal"><i class="fa fa-plus"></i> PERSONAL LOGISTICO</div>
                    <div class="content-articles">
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="">Ver encargado de almacen</a>
                      </div>
                      <div class="col-lg-12">
                        <i class="fa fa-plus"></i><a href="" >Datos personales</a>
                      </div>
                    </div>   
                </div>
          </div>
      </section>
    </section>
  </section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/fotter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
