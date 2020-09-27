<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rinba Official</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


  <link rel="shortcut icon" href="<?= base_url(); ?>assets/dist/img/Rinba_Official.png" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url()?>" class="h1">Rinba Official</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masukkan Username dan Password Anda Untuk Login</p>

      <form action="<?= base_url('Auth/login')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
          <!-- /.col -->
      </form>
      <div class="row">
      <div class="input-group mb-3">
            <a type="button" class="btn btn-success btn-block" href="<?= base_url()?>">Kembali ke Halaman Utama</a>
      </div>
        </div>


      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>/assets/dist/js/adminlte.min.js"></script>

<script src="<?= base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>


 <?php if ($this->session->flashdata('flash_data')): ?>
    <script>
    Swal.fire({
    title: "",
    text: "<?php echo $this->session->flashdata('flash_data'); ?>",
    timer: 10000,
    showConfirmButton: true,
    type: 'success'
    }).catch(swal.noop);
    </script>
    <?php endif; ?>

</body>
</html>
