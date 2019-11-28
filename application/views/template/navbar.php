    
    <nav class="navbar navbar-expand-lg  bg-dar">
      <div class="container-fluid">
        <a class="navbar-brand " href="index.html">CardBoard</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

   
        <div class="collapse navbar-collapse" id="nav barsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
            <li class="nav-item">
              <a class="nav-link active" style="color: orange" href="index.php<?php ?>">Inicio</a>
            </li>
    
       
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: orange" href="#" id="dropdown04" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">REGISTROS</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item"style="color: orange" href="<?= base_url('empleado_controller') ?>">Registro empleado</a>
                <a class="dropdown-item" style="color: orange" href="<?= base_url('usuario_controller/index') ?>">usuario</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: orange" href="<?= base_url('compania_controller/index')  ?>">Compañia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"style="color: orange" href="<?= base_url('reparaciones_controller/index') ?>">reparaciones</a>
            </li>
             <li class="nav-item">
              <a class="nav-link"style="color: orange" href="<?= base_url('suspensiones_controller/index') ?>">suspenciones</a>
            </li>
             <li class="nav-item">
              <a class="nav-link"style="color: orange" href="<?= base_url('empleado_equipo_controller/index') ?>">Empleado equipo</a>
            </li>
          
          </ul>



          <div class="navbar-nav ml-auto">
            <form method="post" class="search-form">
              <span class="icon ion ion-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </form>
          </div>

        </div>
      </div>
    </nav>