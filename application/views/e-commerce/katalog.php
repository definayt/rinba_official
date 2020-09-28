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
    <div class="container-fluid">
		<div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-2">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i> Filter Kategori
                    <select name="id_kategori" class="form-control" id="id_kategori">
                        <option value="">Semua Kategori</option>
                        <?php foreach($data_kategori as $kategori){ ?>
                            <option class="dropdown-item" value="<?= $kategori->id_kategori?>" <?php if ($id_kategori == $kategori->id_kategori) echo "selected"; ?>><?= $kategori->nama_kategori?></option>
                        <?php }?>
                    </select>
                </div>
                 <div class="col-md-2">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-sort-list"></i> Urutkan
                    <select name="urutkan" class="form-control" id="urutkan">
                        <option class="form-control" value="A-Z">A-Z</option>
                        <option class="form-control" value="Z-A">Z-A</option>
                        <option value="1-10">Harga Terendah-Tertinggi</option>
                        <option value="10-1">Harga Tertinggi-Terendah</option>
                    </select>
                </div>
            </div>
        </div>
		<section class="ftco-section bg-light">
    	<div class="container-fluid">
            
    		<div class="row" id="daftar_produk">
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
                <?php  }?>  
    			
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


		