<!DOCTYPE html>
<html lang="en">
 
  <body>

    
    <!-- END nav -->
		
	<div class="hero-wrap js-fullheight" style="background-image: url('<?= base_url()?>assets/dist/img/Rinba_Official.png'); max-height: 500px;"></div>

   	<section class="ftco-section">
	    <div class="container">
	      <div class="row d-flex justify-content-center py-5">
	        <div class="col-md-7 text-center heading-section ftco-animate">
	        	<h1 class="big">Pencarian</h1>
	          <h2>Pencarian Barang di Katalog</h2>
	          <div class="row d-flex justify-content-center mt-5">
	            <div class="col-md-12">
	              <form action="#" class="subscribe-form" method="GET">
	                <div class="form-group d-flex">
	                  <input type="text" class="form-control" name="kata_kunci" placeholder="Masukkan kata kunci pencarian barang">
	                  <input type="submit" value="Cari" class="submit px-3">
	                </div>
	              </form>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
    </section>
    
    <section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">New Product</h1>
            <h2 class="mb-4">Produk Terbaru</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    					<?php foreach($data_produk_new as $produk) {?>
    					<div class="item">
    						<div class="col-sm col-md-6 col-lg ftco-animate">
			    				<div class="product">
			    					<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url().'assets/dist/img/'.$produk->gambar_produk_1?>" alt="Gambar Produk"></a>
			    					<div class="text py-3 px-3">
			    						<h3><a href="#"><?= $produk->nama_produk?></a></h3>
			    						<div class="d-flex">
			    							<div class="pricing">
					    						<p class="price"><span><?= rupiah($produk->harga) ?></span></p>
					    					</div>
					    					<div class="rating">
				    							<p class="text-right">
			    									<a type="button" target="_blank" href="https://api.whatsapp.com/send?phone=<?= $whatsapp->contact?>&text=Halo%20Admin,%20saya%20mau%20order <?= $produk->nama_produk?>" class="add-to-cart"><span>Order </span></a>
				    								
				    							</p>
				    						</div>
				    					</div>
				    					<hr>
			    					</div>
			    				</div>
			    			</div>
	    				</div>
	    				<?php  }?>	    				
    				</div>
    			</div>
    		</div>
    		<div class="row d-flex justify-content-center mt-5">
    			
    			<a href="<?= base_url('Katalog')?>" class="btn btn-primary py-3 col-md-8">Lihat Produk Lainnya</a>
    			
    		</div>
    	</div>
    </section>

    


  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  
    
  </body>
</html>