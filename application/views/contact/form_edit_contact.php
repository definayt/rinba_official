

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Contact</li>
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
                <form id="form_tambah_pegawai" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Contact/proses_edit/')?>">
                 <input type="hidden" name="id_contact" value="<?= $data_contact->id_contact?>">
                  <div class="input-group form-group">Jenis Contact</div>
                
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-tags"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Instagram/Whatsapp/Shopee" name="jenis_contact" aria-describedby="sizing-addon2" value="<?= $data_contact->jenis_contact?>" required>
                  </div>
               
                  <div class="input-group form-group">Contact</div>
               
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-tags"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="081229476730 / instagram.com/rinba.official" name="contact" aria-describedby="sizing-addon2" value="<?= $data_contact->contact?>"required>
                  </div>
                  <div class="row mb-2 ">
                    <div class="col-sm-3 ">
                        <button type="submit" class="form-control btn btn-success">Simpan</button>            
                    </div>
                </form>
                    <div class="col-sm-3">
                      
                        <a type="cancel" class="form-control btn btn-danger" data-toggle="modal" data-target="#modal_back" onclick="deleteScript('<?= base_url('Contact')?>')"> <i class="glyphicon glyphicon-remove"></i> Batal</a>  
                      
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
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin membatalkan perubahan Data Contact?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya</a>
            </div>
        </div>
      </div>
  </div>

  



