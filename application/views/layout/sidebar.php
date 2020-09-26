 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Dashboard')?>" class="brand-link">
      <img src="<?= base_url()?>/assets/dist/img/Rinba_Official.png" alt="Rinba Official Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rinba Official</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
 -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item ">
            <a href="<?= base_url('Dashboard')?>" class="nav-link <?php if($page=='Dashboard') echo'active'?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Kategori')?>" class="nav-link <?php if($page=='Kategori') echo'active'?>">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Kategori Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Produk')?>" class="nav-link <?php if($page=='Produk') echo'active'?>">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Daftar Seluruh Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Admin')?>" class="nav-link <?php if($page=='Admin') echo'active'?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Daftar Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Contact')?>" class="nav-link <?php if($page=='Contact') echo'active'?>">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Contact 
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>