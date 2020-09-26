

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <div class="card-header">
                <a type="button" class="btn btn-info col-md-3" href="<?= base_url('Admin/insert')?>">
                 Tambah Admin
                 </a>
              </div>
              
              
              <div class="card-body">
                <table id="list-data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                      foreach ($data_admin as $admin){?>
                        <tr>
                          <td><?= $no?></td>
                          <td><?= $admin->nama_petugas?></td>                        
                          <td><?= $admin->username?></td> 
                          
                          

                          <td>
                             <a type="button" class="btn btn-warning"  href="<?= base_url('Admin/edit/'.$admin->id_petugas) ?>"
                            > Edit</a>
                            
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_reset" onclick="resetScript('<?= base_url('Admin/reset/'.$admin->id_petugas)?>')">
                              Reset Password
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus" onclick="deleteScript('<?= base_url('Admin/delete/'.$admin->id_petugas)?>')">
                              Delete
                            </button>

                            

                          </td>
                        </tr>
                        <?php $no++;}?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



<!-- ./wrapper -->

<!-- Modals hapus -->  
  <div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin menghapus admin ini?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya, Hapus</a>
            </div>
        </div>
      </div>
  </div>

<!-- Modals hapus -->  
  <div class="modal fade" id="modal_reset" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin mereset password admin ini?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-reset" href="#" class="btn btn-info">Ya</a>
            </div>
        </div>
      </div>
  </div>

  



