
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
                <div class="panel-heading">AREA DE LOGISTICA INVENTARIO-MARZO-2016<a href="" class="btn btn-success btn-xs pull-right"><i class="fa fa-search"></i>  Buscar inventario</a><a href="" class="btn btn-default btn-xs pull-right"><i class="fa fa-print"></i>  Imprimir</a></div>
                <div id="result"></div>
	            <div class="table-list">
					<table class="table table-hover display" id="example" >
						<thead class='header-tab'>
							<tr>
								<th>Item</th>
								<th>Articulo</th>
								<th>Precio. U</th>
								<th>Entradas</th>
								<th>Salidas</th>
								<th>Stock</td>
								<td>Detalles</td>	
							</tr>	
						</thead>
						<tfoot class='header-tab'>
							<tr>
								<th>Item</th>
								<th>Articulo</th>
								<th>Precio. U</th>
								<th>Entradas</th>
								<th>Salidas</th>
								<th>Stock</td>
								<td>Detalles</td>	
							</tr>	
						</tfoot>
						<tbody>
							<tr class="sin-stock">
							 <td>1</td>
							 <td>Planchas</td>
							 <td>$. 12.35</td>
							 <td>5</td>
							 <td>1</td>
							 <td>4</td>
							 <td><a href="" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr class="con-stock">
							 <td>2</td>
							 <td>Clavo de 4'</td>
							 <td>$. 10.2</td>
							 <td>1</td>
							 <td>1</td>
							 <td>0</td>
							 <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr  class="medio-stock">
							 <td>3</td>
							 <td>Pernos</td>
							 <td>$. 4.00</td>
							 <td>13</td>
							 <td>1</td>
							 <td>12</td>
							 <td><a href="" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr>
							 <td>4</td>
							 <td>Laptop</td>
							 <td>$. 500.58</td>
							 <td>5</td>
							 <td>2</td>
							 <td>3</td>
							 <td><a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr>
							 <td>5</td>
							 <td>Madera</td>
							 <td>$. 20.00</td>
							 <td>43</td>
							 <td>40</td>
							 <td>3</td>
							 <td><a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr>
							 <td>6</td>
							 <td>Sillas de plastico color verde</td>
							 <td>$. 14.23</td>
							 <td>100</td>
							 <td>34</td>
							 <td>66</td>
							 <td><a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr>
							 <td>7</td>
							 <td>Vidrios catedral</td>
							 <td>$. 145</td>
							 <td>23</td>
							 <td>2</td>
							 <td>21</td>
							 <td><a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr>
							 <td>8</td>
							 <td>Mouse</td>
							 <td>$. 10.00</td>
							 <td>45</td>
							 <td>4</td>
							 <td>44</td>
							 <td><a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr>
							 <td>8</td>
							 <td>Teclado numerio</td>
							 <td>$. 12.00</td>
							 <td>23</td>
							 <td>12</td>
							 <td>11</td>
							 <td><a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
							<tr>
							 <td>10</td>
							 <td>Alambre negro de 8'</td>
							 <td>$. 0.45</td>
							 <td>100</td>
							 <td>45</td>
							 <td>55</td>
							 <td><a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
							</tr>
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