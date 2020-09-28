 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?= base_url('Dashboard')?>">Home</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Produk</span>
                <span class="info-box-number">
                  <?= $total_produk?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Kategori</span>
                <span class="info-box-number"><?= $total_kategori?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-exclamation-triangle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Produk Kosong</span>
                <span class="info-box-number"><?= $total_produk_kosong?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Produk dengan Stok Kosong</h5>
                  
                  </div>
                  <!-- /.card-header -->
                <div class="card-body">
                <table  class="table table-bordered table-hover list-data-dashboard">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Kategori</th>
                          <th>Gambar Produk</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no=1;
                          foreach ($data_produk_kosong as $produk){?>
                              <tr>
                                <td><?= $no?></td>
                                <td><?= $produk->nama_produk?></td>                        
                                <td><?= $produk->nama_kategori?></td> 
                                <td><img class="img_display_dashboard" src="<?= base_url().'assets/dist/img/'.$produk->gambar_produk_1?>"></td>  
                                <td>
                                   <a type="button" class="btn btn-warning"  href="<?= base_url('Produk/edit/'.$produk->id_produk) ?>"
                                  > Edit</a>

                                  <button type="button" class="btn btn-success detail-produk" data-toggle="modal" data-target="#modal_detail"
                                  id="<?php echo $produk->nama_produk.'|'.$produk->nama_kategori.'|'.$produk->deskripsi_produk.'|'.base_url().'assets/dist/img/'.$produk->gambar_produk_1.'|'.base_url().'assets/dist/img/'.$produk->gambar_produk_2.'|'.$produk->harga.'|'.$produk->stok ?>"
                                  >
                                    Detail
                                  </button>
                                  
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus" onclick="deleteScript('<?= base_url('Produk/delete/'.$produk->id_produk)?>')">
                                    Delete
                                  </button>

                                </td>
                              </tr>
                              <?php $no++;}?>
                        
                        </tbody>
                      </table>
                    </div>
                  </div>

                    <!-- /.table-responsive -->
                 
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
        <!-- /.content -->
  </div>

   <!-- Modal detail -->
  <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"><span class="fa fa-user"></span>&nbsp;Detail Produk</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
        </div>
        <div class="modal-body" id="IsiModalDetail">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span>  Tutup</button>
          </div>
      </div>
    </div>
  </div>
<!-- Modals hapus -->  
  <div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin menghapus produk ini?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya, Hapus</a>
            </div>
        </div>
      </div>
  </div>
