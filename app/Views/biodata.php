<?= $this->extend('template/layout') ?>  

<?= $this->section('content'); ?> 
  
  <div class="content">
	
  
	
			<h2 align="center">Selamat Datang <?= $nama; ?> dari <?= $alamat; ?></h2>

			<table style="margin-left: 20%;" border="20">

  <tr>
    <th style="padding-right: 50px">Biodataku</th>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?= $nama; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?= $alamat; ?></td>
  </tr>
   <tr>
    <td>Jenis Kelamin</td>
    <td><?= $jeniskelamin; ?></td>
  </tr>
   <tr>
    <td>Asal Sekolah</td>
    <td><?= $asalsekolah; ?></td>
  </tr>
</table>
	
  </div>
  <?= $this->endSection(); ?>
