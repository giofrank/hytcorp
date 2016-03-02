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
{include 'overall/fotter.tpl'}
