<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head'); ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar'); ?>
	
		<div class="jumbotron mb-0 pt-5" style="margin-top: 4rem;">
			<div class="container">

				<h1>Deteksi diri anda</h1>
				<h5 class="mt-3">Apakah anda mengalami hal berikut ini?</h5>

				<div class="row mt-3">

					<?php foreach ($info as $row): ?>
					<div class="col-lg-2">

						<div class="card shadow my-4 my-lg-0" style="border-radius: 1rem;">
						  <img src="<?= base_url('assets/img/informasi/') . $row['gambar'] ?>" class="card-img w-75 mx-auto pt-3">
						  <div class="card-body">
						    <p class="card-text text-center font-weight-bold"><?= $row['teks'] ?></p>
						  </div>
						</div>

					</div>
					<?php endforeach ?>

				</div>
				<div class="row mt-sm-5 justify-content-center">
					<div class="col-lg-8">
						<div class="alert alert-danger text-center" role="alert">
			  				Jika Anda mengalami gejala seperti diatas segera periksakan diri anda ke rumah sakit terdekat!
						</div>
					</div>
				</div>
				
			</div>
		</div>


	<?php $this->load->view('_partials/footer') ?>
	<?php $this->load->view('_partials/js'); ?>
</body>
</html>