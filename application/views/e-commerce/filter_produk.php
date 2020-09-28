<?php if($data_produk == NULL) {?>

	<div class="ftco-section container d-flex justify-content-center py-5">
	<div class="col-md-12 text-center heading-section ftco-animate">
	    <h1 class="big">Not Found</h1>
	  <h2>Produk yang Anda Cari Tidak Ditemukan</h2>
	</div>
	</div>
<?php  } else{?> 
                
	<?php foreach($data_produk as $produk) {?>
	<div class="col-sm col-md-6 col-lg-3 ftco-animate" >
        
		<div class="product">
			<a href="<?= base_url('Katalog/product_detail/'.$produk->id_produk)?>" class="img-prod"><img class="img-fluid"  src="<?= base_url().'assets/dist/img/'.$produk->gambar_produk_1?>" alt="Gambar Produk">
			<?php if($produk->stok == 0){ ?>
                <span class="status">Stok Produk Tidak Tersedia</span>
            <?php }  ?>
			</a>
			<div class="text py-3 px-3">
				<h3><a href="<?= base_url('Katalog/product_detail/'.$produk->id_produk)?>"><?= $produk->nama_produk?></a></h3>
				<div class="d-flex">
					<div class="pricing">
						<p class="price"><span><?= rupiah($produk->harga) ?></span></p>
					</div>
					<div class="rating">
                        <p class="text-right">
                            <?php if($produk->stok == 0) {?>
                            <button type="button" data-toggle="modal" data-target="#modal_kosong" class="btn btn-primary"><span>Order </span></button>
                            <?php } else {?>
                            <a type="button" target="_blank" href="https://api.whatsapp.com/send?phone=<?= $whatsapp->contact?>&text=Halo%20Admin,%20saya%20mau%20order <?= $produk->nama_produk?>" class="btn btn-primary"><span>Order </span></a>
                            <?php } ?>
                        </p>
                    </div>
				</div>
				<hr>
				
			</div>
		</div>
        
	</div>
<?php  }}?>  
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>