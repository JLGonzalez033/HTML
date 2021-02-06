<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Mi tiendita</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/users/<?php echo $userData['Imagen'];?>" 
          class="img-circle elevation-2" style=width:30px;height:30px alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $userData['Nombre']." ".$userData['Ap'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="./index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Inicio
            
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./usuarios.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./productos.php" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Productos
               
              </p>
            </a>
            <li class="nav-item">
            <a href="./php/salir.php" class="nav-link">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>
                Cerrar Sesion
                
              </p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>