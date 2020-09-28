<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div id="carouselExampleControls" class="carousel slide col-lg-6 mb-5 ftco-animate fadeInUp ftco-animated" data-ride="carousel">
				  <div class="carousel-inner" role="listbox">
				    <div class="carousel-item active">
				      <div class="img"><a href="<?= base_url().'/assets/dist/img/'.$data_produk->gambar_produk_1?>" class="image-popup"><img src="<?= base_url().'/assets/dist/img/'.$data_produk->gambar_produk_1?>" class="img-fluid" alt="Gambar Produk 1"></a></div>
				    </div>
				    <div class="carousel-item">
				      <div class="img"><a href="<?= base_url().'/assets/dist/img/'.$data_produk->gambar_produk_2?>" class="image-popup"><img src="<?= base_url().'/assets/dist/img/'.$data_produk->gambar_produk_2?>" class="img-fluid" alt="Gambar Produk 2"></a></div>
				    </div>
				    
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
    			
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
    				<h3><?php echo $data_produk->nama_produk?></h3>
    				<p class="price"><span><?php echo rupiah($data_produk->harga)?></span></p>
    				<p><?php echo $data_produk->deskripsi_produk?>
						</p>
						<div class="row mt-4">
							
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	
	             	
	             	
	          	</div>
          	</div>
          	<?php if($data_produk->stok == 0) {?>
	            <p><a  data-toggle="modal" data-target="#modal_kosong" class="btn btn-primary py-3 px-5">Order </a></p>
	        <?php } else {?>
	            <p><a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $whatsapp->contact?>&text=Halo%20Admin,%20saya%20mau%20order <?= $data_produk->nama_produk?>" class="btn btn-primary py-3 px-5">Order </a></p>
	        <?php } ?>
          	
    			</div>
    		</div>
    	</div>
    </section>

      <!-- Modals kosong -->  
  <div class="modal fade" id="modal_kosong" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda tidak dapat memesan produk ini karena stoknya sedang kosong!</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">OK</button>
                
            </div>
        </div>
      </div>
  </div>
