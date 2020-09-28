<script src="<?= base_url()?>assets/e-commerce/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/jquery.stellar.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/aos.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url()?>assets/e-commerce/js/scrollax.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url()?>assets/e-commerce/js/google-map.js"></script> -->
<script src="<?= base_url()?>assets/e-commerce/js/main.js"></script>
<script src="<?= base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<?php if ($this->session->flashdata('flash_msg')): ?>
    <script>
    Swal.fire({
    title: "",
    text: "<?php echo $this->session->flashdata('flash_msg'); ?>",
    timer: 10000,
    showConfirmButton: true,
    type: 'success'
    }).catch(swal.noop);
    </script>
    <?php endif; ?>

<script type="text/javascript">
	
$(document).ready(function(){
	$("#id_kategori").change(function(e){
		var id_kategori = $("#id_kategori").val();
		var urutkan = $("#urutkan").val();
		var kata_kunci = $("#kata_kunci").val();
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Katalog/filter'); ?>",
			data: {id_kategori: id_kategori, urutkan: urutkan, kata_kunci:kata_kunci},
			
			success : function(data){
				// MyTable.fnDestroy();
				$('#daftar_produk').html(data);
				// refresh();
			},
			error: function(data){

			}
		});
	});

	$("#urutkan").change(function(e){
		var id_kategori = $("#id_kategori").val();
		var urutkan = $("#urutkan").val();
		var kata_kunci = $("#kata_kunci").val();
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Katalog/filter'); ?>",
			data: {id_kategori: id_kategori, urutkan: urutkan, kata_kunci:kata_kunci},
			
			success : function(data){
				// MyTable.fnDestroy();
				$('#daftar_produk').html(data);
				// refresh();
			},
			error: function(data){

			}
		});
	});
});
</script>