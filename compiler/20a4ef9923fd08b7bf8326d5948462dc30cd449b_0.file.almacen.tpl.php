<?php
/* Smarty version 3.1.29, created on 2016-03-01 05:23:44
  from "C:\xampp\htdocs\hyt\styles\templates\home\almacen.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d519507df340_78909683',
  'file_dependency' => 
  array (
    '20a4ef9923fd08b7bf8326d5948462dc30cd449b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hyt\\styles\\templates\\home\\almacen.tpl',
      1 => 1456806214,
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
function content_56d519507df340_78909683 ($_smarty_tpl) {
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
        <div class="col-lg-12">
            <div class="panel panel-primary form-registro">
                <div class="panel-heading">AREA DE LOGISTICA <a href="" class="btn btn-default pull-right btn-xs"><i class="fa fa-plus"></i> Nuevo</a></div>
                <div id="result"></div>
	            <div class="table-list">
					<table class="table table-hover display" id="example" >
							<thead class='header-tab'>
							    	<tr>
								    	<th>Item</th>
								    	<th>Nombre de almacen</th>
								    	<th>modulo al que pertenece</th>
								    	<th>¿Es central?</th>
								    	<th>Sub area</th>
								    	<th></th>
								    	<th></th>	
							    	</tr>	
							</thead>
							<tfoot class='header-tab'>
							    	<tr>
								    	<th>Item</th>
								    	<th>Nombre de almacen</th>
								    	<th>modulo al que pertenece</th>
								    	<th>¿Es central?</th>
								    	<th>Sub area</th>
								    	<th></th>
								    	<th></th>
							    	</tr>	
							</tfoot>
							<tbody>
								<?php
$_from = $_smarty_tpl->tpl_vars['almacen']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_alm_0_saved_item = isset($_smarty_tpl->tpl_vars['alm']) ? $_smarty_tpl->tpl_vars['alm'] : false;
$__foreach_alm_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['alm'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['alm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['alm']->value) {
$_smarty_tpl->tpl_vars['alm']->_loop = true;
$__foreach_alm_0_saved_local_item = $_smarty_tpl->tpl_vars['alm'];
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['alm']->value['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['alm']->value['id_module'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['alm']->value['central'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['alm']->value['sub_area'];?>
</td>
										<td><a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a></td>
										<td><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i></a></td>
									</tr>
								<?php
$_smarty_tpl->tpl_vars['alm'] = $__foreach_alm_0_saved_local_item;
}
if ($__foreach_alm_0_saved_item) {
$_smarty_tpl->tpl_vars['alm'] = $__foreach_alm_0_saved_item;
}
if ($__foreach_alm_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_alm_0_saved_key;
}
?>
							</tbody>
					</table>
				</div>
            </div>
        </div>

        
      </section>
    </section>
  </section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/fotter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	$(document).ready(function() {
		$('#example').dataTable( {
			"sPaginationType": "full_numbers"
		} );
	});
<?php echo '</script'; ?>
><?php }
}
