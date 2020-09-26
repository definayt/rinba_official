

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Produk</li>
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
              <div class="card-body">
                <form id="form_tambah_pegawai" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Produk/proses_edit/')?>" enctype="multipart/form-data">
                 <input type="hidden" name="id_produk" value="<?= $data_produk->id_produk?>">
                  <label class="input-group form-group control-label">Nama Produk</label>
                
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-tags"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk" aria-describedby="sizing-addon2" value="<?= $data_produk->nama_produk?>" required>
                  </div>

                  <label class="input-group form-group control-label">Kategori</label>
               
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-tags"></i>
                    </span>
                    <select class="form-control" name="id_kategori" aria-describedby="sizing-addon2">
                      <?php
                      foreach ($data_kategori as $kategori) {
                        ?>
                        <option value="<?= $kategori->id_kategori?>" <?php if($kategori->id_kategori==$data_produk->id_kategori) echo "selected";?>><?= $kategori->nama_kategori ?></option>
                      <?php }
                      ?>
                    </select>
                  </div>
               
                  <label class="input-group form-group control-label">Deskripsi Produk</label>
               
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-tags"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Deskripsi Produk" name="deskripsi_produk" aria-describedby="sizing-addon2" value="<?= $data_produk->deskripsi_produk?>"required>
                  </div>

                  <label class="input-group form-group control-label">Harga</label>
               
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-tags"></i>
                    </span>
                    <input type="number" class="form-control" placeholder="Harga" name="harga" aria-describedby="sizing-addon2" value="<?= $data_produk->harga?>"required>
                  </div>

                  <label class="input-group form-group control-label">Stok</label>
               
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-tags"></i>
                    </span>
                    <input type="number" class="form-control" placeholder="Stok" name="stok" aria-describedby="sizing-addon2" value="<?= $data_produk->stok?>"required>
                  </div>

                  <label class="input-group form-group control-label">Gambar 1</label>
                   <div class="input-group form-group">
                      <img id="upload_image1" src="<?= base_url().'assets/dist/img/'.$data_produk->gambar_produk_1 ?>"/>
                      <input type="hidden" name="foto_lama_1" value="<?= $data_produk->gambar_produk_1?>">
                    </div>
                   <div class="input-group form-group">
                      <input id="gambar1" name="uploadgambar1" class="form-control col-12" type="file" accept="image/*" onchange="preview_image1(event)"><br>
                    </div>
                   <div class="input-group form-group">
                      <span class="required">*Pilih File untuk mengubah Gambar 1. Lewati langkah ini jika tidak ingin mengubah gambar 1</p></span>
                    </div>
                  

                  <label class="input-group form-group control-label">Gambar 2</label>
                   <div class="input-group form-group">
                      <img id="upload_image2" src="<?= base_url().'assets/dist/img/'.$data_produk->gambar_produk_2 ?>"/>
                      <input type="hidden" name="foto_lama_2" value="<?= $data_produk->gambar_produk_2?>">
                    </div>
                   <div class="input-group form-group">
                      <input id="gambar2" name="uploadgambar2" class="form-control" type="file" accept="image/*" onchange="preview_image2(event)"><br>
                    </div>
                    <div class="input-group form-group">
                      <span class="required">*Pilih File untuk mengubah Gambar 2. Lewati langkah ini jika tidak ingin mengubah gambar 2</p></span>
                    </div>
                  

                  <div class="row mb-2 ">
                    <div class="col-sm-3 ">
                        <button type="submit" class="form-control btn btn-success">Simpan</button>            
                    </div>
                </form>
                    <div class="col-sm-3">
                      
                        <a type="cancel" class="form-control btn btn-danger" data-toggle="modal" data-target="#modal_back" onclick="deleteScript('<?= base_url('Produk')?>')"> <i class="glyphicon glyphicon-remove"></i> Batal</a>  
                      
                    </div>
                
                
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
  <div class="modal fade" id="modal_back" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin membatalkan perubahan Data Produk?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya</a>
            </div>
        </div>
      </div>
  </div>

  



