<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?= base_url()?>">Rinba Official</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php if($halaman=='Halaman Utama') echo'active'?>"><a href="<?= base_url()?>" class="nav-link">Halaman Utama</a></li>
	         <li class="nav-item <?php if($halaman=='Katalog') echo'active'?>"><a href="<?= base_url('Katalog')?>" class="nav-link">Katalog Produk</a></li>
	          
	          
	          <li class="nav-item <?php if($halaman=='Kontak') echo'active'?>"><a href="<?= base_url('Kontak')?>" class="nav-link">Kontak</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>