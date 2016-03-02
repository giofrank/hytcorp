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
{include 'overall/fotter.tpl'}
