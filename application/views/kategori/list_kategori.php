

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Kategori</li>
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
                <button type="button" class="btn btn-info col-md-3" data-toggle="modal" data-target="#modal_tambah">
                 Tambah Kategori
                 </button>
              </div>
              
              
              <div class="card-body">
                <table id="list-data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                      foreach ($data_kategori as $kategori){?>
                        <tr>
                          <td><?= $no?></td>
                          <td><?= $kategori->nama_kategori?></td>                        
                          

                          <td>
                             <button type="button" class="btn btn-warning edit-kategori" data-toggle="modal" data-target="#modal_edit"
                            id="<?php echo $kategori->id_kategori.'|'.$kategori->nama_kategori.'|'. base_url('Kategori/proses_edit/'.$kategori->id_kategori) ?>"
                            > Edit</button>
                            
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus" onclick="deleteScript('<?= base_url('Kategori/delete/'.$kategori->id_kategori)?>')">
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
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin menghapus kategori ini?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya, Hapus</a>
            </div>
        </div>
      </div>
  </div>

  <!-- Modal tambah -->
  <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"><span class="fas fa-tag"></span>&nbsp;Tambah Kategori</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
        </div>
        <div class="modal-body" id="">
          <form method="POST" action="<?= base_url('Kategori/proses_tambah')?>">
            <table class="table">
              <tr>
                <td>Nama Kategori</td>
                <td>
                    <input type="text" name="nama_kategori" class="form-control" required="required">
                </td>
              </tr>
            </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">  Simpan</button>

          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">  Tutup</button>
          </div>
      </div>
    </div>
  </div>

  <!-- Modal edit-->
  <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"><span class="fas fa-tag"></span>&nbsp;Edit Kategori</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
        </div>
        <div class="modal-body" id="IsiModal">
         
            ...
        
        </div>
      </div>
    </div>
  </div>



