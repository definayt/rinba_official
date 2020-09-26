

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Produk</li>
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
                <a type="button" class="btn btn-info col-md-3" href="<?= base_url('Produk/insert')?>">
                 Tambah Produk
                 </a>
              </div>
              
              
              <div class="card-body">
                <table id="list-data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                      foreach ($data_produk as $produk){?>
                        <tr>
                          <td><?= $no?></td>
                          <td><?= $produk->nama_produk?></td>                        
                          <td><?= $produk->nama_kategori?></td> 
                          <td><?= $produk->harga?></td>  
                          <td><?= $produk->stok?></td>  
                          

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
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin menghapus produk ini?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya, Hapus</a>
            </div>
        </div>
      </div>
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

  



