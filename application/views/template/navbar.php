<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?= base_url()?>">Rinba Official</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?= base_url()?>" class="nav-link">Halaman Utama</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog Produk</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?= base_url('Katalog')?>">Semua Produk</a>
              	<?php foreach($data_kategori as $kategori){ ?>
	              	<a class="dropdown-item" href="<?= base_url('Katalog/kategori/'.$kategori->nama_kategori)?>"><?= $kategori->nama_kategori?></a>
            	<?php }?>
              </div>
            </li>
	          
	          <li class="nav-item"><a href="<?= base_url('Kontak')?>" class="nav-link">Kontak</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>