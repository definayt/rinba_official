<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url()?>assets/e-commerce/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Katalog Produk</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Halaman Utama</a></span> <span>Katalog Produk</span></p>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row">
                <?php foreach($data_produk as $produk) {?>
    			<div class="col-sm col-md-6 col-lg-3 ftco-animate">
                    
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid"  src="<?= base_url().'assets/dist/img/'.$produk->gambar_produk_1?>" alt="Gambar Produk">
    					<?php if($produk->stok == 0){ ?>
                            <span class="status">Stok Produk Tidak Tersedia</span>
                        <?php }  ?>
    					</a>
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
                <?php  }?>  
    			
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <?php for ($i=0; $i <=($total_produk/12) ; $i++) { 
                    # code...
                ?>
                <li class="<?php if($this->session->userdata('page_katalog')==$i+1) echo'active'?>"><a href="#"><span><?= $i+1?></a></span></li>
                
                <?php } ?>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

		