<?= $this->extend('template/layout') ?>  

<?= $this->section('content'); ?> 
	
	<div class="content">
		<img src="/image/blackclover2.jpg" style="width: 15%">     
			<h1>
				<?= $judul; ?>
			</h1>      

				<form action="/segitiga/prosessegitiga" method="post">      
					<?= csrf_field(); ?>
					<!-- Untuk meregenerate token demi kemamanan website,hanya untuk method post -->
	         <p>      
	             <input type="text" style="margin-bottom: 1%; width: 15%" name="alas"  placeholder="Setengah * alas"value="<?= $alas; ?>">
	       <br>
	             <input type="text" style="width: 15%; margin-left: 0px" name="tinggi" placeholder="Tinggi" value="<?= $tinggi; ?>">
	         <br>
	               <h1><?= $hasil; ?></h1>  
	        </p>         
	        <p><button type="submit"><b>HITUNG</b></button></p>      
	    		</form> 
	    </div>
	   
<?= $this->endSection(); ?>

	