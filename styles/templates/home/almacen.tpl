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
								{foreach from=$almacen key=$key item=alm}
									<tr>
										<td>{$key+1}</td>
										<td>{$alm.name}</td>
										<td>{$alm.id_module}</td>
										<td>{$alm.central}</td>
										<td>{$alm.sub_area}</td>
										<td><a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a></td>
										<td><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i></a></td>
									</tr>
								{/foreach}
							</tbody>
					</table>
				</div>
            </div>
        </div>

        
      </section>
    </section>
  </section>
{include 'overall/fotter.tpl'}
<script>
	$(document).ready(function() {
		$('#example').dataTable( {
			"sPaginationType": "full_numbers"
		} );
	});
</script>