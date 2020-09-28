
<footer class="main-footer">
    <strong>Copyright &copy; 2020 Rinba Official.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
</footer>

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= base_url()?>assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url()?>assets/dist/js/pages/dashboard3.js"></script>

<script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?= base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
   function deleteScript(url) {
      $('#btn-delete').attr('href', url);
    }

    function resetScript(url) {
      $('#btn-reset').attr('href', url);
    }

  $(function () {
    $("#list-data").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });

  $(function () {
    $(".list-data-dashboard").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "pageLength" : 2,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });

  $(document).ready(function() {
       
        $('.edit-kategori').on("click", function(){
       
        var data= this.id;
       
        var datanya = data.split("|");
       


        $("#IsiModal").html('<form method="POST" action="'+datanya[2]+'"><input type="hidden" name="id_kategori" value="'+datanya[0]+'"><table class="table"><tr><td>Nama Kategori</td><td width="10">:</td><td><input type="text" name="nama_kategori" class="form-control" required="required" value="'+datanya[1]+'"></td></tr></table></div><div class="modal-footer"><button type="submit" class="btn btn-success"> Simpan</button> <button type="button" class="btn btn-danger" data-dismiss="modal"> Tutup </button> </form>');
        });
   
    });

  $(document).ready(function() {
        // even ketika link a href diklik
        $('.detail-produk').on("click", function(){
        // ambil nilai id dari link detail simpan dalam var DataMahasiswa
        var data= this.id;
        // Pecah DataMahasiswa dengan tanda | sebagai pemisah data hasilnya
        // disimpan dalam array datanya
        var datanya = data.split("|");
        // Untuk pengujian data
        
        // bagian ini yang akan ditampilkan pada modal bootstrap
        // pengetikan HTML tidak boleh dienter, karena oleh javascript akan dibaca \r\n sehingga
        // modal bootstrap tidak akan jalan
        $("#IsiModalDetail").html('<table class="table"><tr><td style="text-align:center"><img src="'+datanya[3]+'" alt="Gambar Produk 1" class="brand-image" style="opacity: .8 ; max-height: 200px;  max-width: 200px"></td><td></td><td style="text-align:center"><img src="'+datanya[4]+'" alt="Gambar Produk 1" class="brand-image" style="opacity: .8 ; max-height: 200px ;  max-width: 200px"></td></tr><table><br><table class="table table-bordered"><tr></tr><tr><td style="max-width:10px">Nama Produk</td><td>'+datanya[0]+'</td></tr><tr><td>Kategori</td><td>'+datanya[1]+'</td></tr><tr><td>Deskripsi Produk</td><td>'+datanya[2]+'</td></tr><tr><td>Harga</td><td>'+datanya[5]+'</td></tr><tr><td>Stok</td><td>'+datanya[6]+'</td></tr></table>');
        });
   
    });
    
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script> -->
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

<script type="text/javascript">
      //buat nampilin image
      function preview_image1(event){
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('upload_image1');
          output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
      }
      function preview_image2(event){
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('upload_image2');
          output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
      }
      //buat reset image
      function hapus_image(){
        document.getElementById('upload_image1').src="";
        document.getElementById('upload_image2').src="";
      }

       function show_password(){
          var password = document.getElementById('pass_lama');
          if (password.type === "password") {
            password.type = "text"
          }
          else{
            password.type = "password";
          }
        }
        function show_password2(){
          var password = document.getElementById('pass_baru');
          if (password.type === "password") {
            password.type = "text"
          }
          else{
            password.type = "password";
          }
        }
        function show_password3(){
          var password = document.getElementById('pass_konfirmasi');
          if (password.type === "password") {
            password.type = "text"
          }
          else{
            password.type = "password";
          }
        }
    </script>