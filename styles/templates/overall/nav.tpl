<nav class="navigation">
      <div class="user">
        <div class="photo"></div>
        <div class="name">
          {if isset($smarty.session.name)}
            <p>{$smarty.session.name}</p>
          {/if}
        </div>
        <div class="menu-user"><i class="fa fa-bars"></i></div>
        <div class="sesion">
          <i class="fa fa-sort-up skin"></i>
          <article class="sesion-works">
            <a href="index.php?view=logistica" class="task">
              <i class="fa fa-pencil-square"></i>
              <p>Logis.</p>
            </a>
            <div class="task">
              <i class="fa fa-suitcase"></i>
              <p>Admin.</p>
            </div>
            <div class="task">
              <i class="fa fa-money"></i>
              <p>Conta.</p>
            </div>
            <div class="task">
              <i class="fa fa-plus-square"></i>
              <p>S. gest</p>
            </div>
            <div class="task">
              <i class="fa fa-group"></i>
              <p>Prod.</p>
            </div>
          </article>
          <a class="logout" href="?view=logout">Cerrar sesion<i class="fa fa-sign-out"></i></a>
        </div>
      </div>
      <div class="calendary">
        
        
      </div>
      <div class="cont-menu">
        <a class="module mo-ad">ADMINISTRACION</a>
          <div class="administration content-menu">
          </div>
        <a class="module mo-lo" >LOGISTICA</a>
          <div class="logistic content-menu">
            <a class="almacen sub-menu" href='index.php?view=almacen'>ALMACEN</a>
            <a class="compras sub-menu" href='index.php?view=compra'>COMPRA</a>
            <a class="solicitud sub-menu" href='index.php?view=solicitud'>SOLICITUD</a>
            <a class="inventario sub-menu" href='index.php?view=inventario'>INVENTARIO</a>
            <a class="movimiento sub-menu" href='index.php?view=movimiento'>MOVIMIENTO</a>
          </div>
        <a class="module mo-co" >CONTABILIDAD</a>
          <div class="contability content-menu">
            
          </div>
        <a class="module mo-ss">SSO Y SGI</a>
          <div class="ssoysgi content-menu">
            
          </div>
        <a class="module mo-pr">PRODUCCION</a>
          <div class="production content-menu">
            
          </div>
      </div>
    </nav>