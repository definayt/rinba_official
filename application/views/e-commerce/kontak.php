<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url()?>assets/e-commerce/images/bg_6.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-0 bread">Contact Rinba Official</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Halaman Utama</a></span> <span>Contact</span></p>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
    <div class="container">
      <div class="row d-flex justify-content-center py-3">
        <?php foreach ($data_contact as $contact) { ?>
            <div class="col-md-8 text-center heading-section ftco-animate">
        		<div class="row d-flex justify-content-center mt-2">   
        			<?php 
        				$alamat ='';
        				if (strpos($alamat, 'https://') == FALSE){
        					$alamat .= 'https://';
        				}
        				if(strtolower($contact->jenis_contact)=='whatsapp') {
        			 			$alamat =$alamat.'api.whatsapp.com/send?phone=';
        			 	}
        			 	$alamat .= $contact->contact;

        			 ?>
              		<a href="<?= $alamat?>" target="blank" class="btn btn-primary py-3 col-md-8"><?= $contact->jenis_contact?></a>
          		</div>
        	</div>
        <?php }  ?>
      </div>
    </div>
</section>