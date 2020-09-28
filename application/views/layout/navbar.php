<div class="wrapper">
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user-cog"></i>
          <span class="hidden-xs"><?php echo $userdata->nama_petugas; ?></span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="<?= base_url('Admin/edit_password')?>" class="dropdown-item">
            <i class="fas fa-key mr-2"></i> Ubah Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('Auth/logout')?>" data-toggle="modal" data-target="#modal_logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
          
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <div class="modal fade" id="modal_logout" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin Logout?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a href="<?= base_url('Auth/logout')?>" class="btn btn-info">Ya</a>
            </div>
        </div>
      </div>
  </div>