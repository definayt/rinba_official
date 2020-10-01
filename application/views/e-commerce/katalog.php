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
    <br>
    <section class="" id="search-box">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center py-1">
            <div class="col-md-12 text-center heading-section ftco-animate">
              
              <div class="row d-flex justify-content-center mt-1">
                <div class="col-md-6">
                  Pencarian
                <form action="<?= base_url('Katalog/pencarian')?>" class="subscribe-form" method="GET">
                    <div class="form-group d-flex">

                      <input type="text" class="form-control" id="kata_kunci" name="kata_kunci" placeholder="Masukkan kata kunci pencarian barang" value="<?= $kata_kunci?>">
                      <input type="submit" value="Cari" class="submit px-3">
                    </div>
                </div>
                <div class="col-md-2">
                     Filter Kategori
                    <select name="id_kategori" class="form-control" id="id_kategori">
                        <option value="">Semua Kategori</option>
                        <?php foreach($data_kategori as $kategori){ ?>
                            <option class="dropdown-item" value="<?= $kategori->id_kategori?>" <?php if ($id_kategori == $kategori->id_kategori) echo "selected"; ?>><?= $kategori->nama_kategori?></option>
                        <?php }?>
                    </select>
                </div>
                 <div class="col-md-2">
                     Urutkan
                    <select name="urutkan" class="form-control" id="urutkan">
                        <option class="form-control" value="A-Z">A-Z</option>
                        <option class="form-control" value="Z-A">Z-A</option>
                        <option value="1-10">Harga Terendah-Tertinggi</option>
                        <option value="10-1">Harga Tertinggi-Terendah</option>
                    </select>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
		<section class="ftco-section bg-light">
    	<div class="container-fluid">
            <div class="post_submitting"></div>
    		<div class="row " id="daftar_produk">
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
    			
    		</div>
    		
    	</div>
    </section>
    
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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


		