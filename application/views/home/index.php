<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head'); ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar'); ?>

		<div class="jumbotron mb-0 pt-5" style="margin-top: 4rem;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<h1 class="text-center mt-2">Data Terbaru Covid-19 per-Provinsi di Indonesia</h1>
					</div>
				</div>
			
				<div class="row mt-5" id="card-wrap">
					<div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
						<div class="card bg-info text-white shadow" >
						  	<div class="card-body">
						    	<h5 class="card-title">Jumlah Positif</h5>
						    	<p class="card-text font"><?= $positif; ?></p>
						  	</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
						<div class="card bg-danger text-white shadow" >
						  	<div class="card-body">
						    	<h5 class="card-title">Jumlah Meninggal</h5>
						    	<p class="card-text font"><?= $meninggal; ?></p>
						  	</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
						<div class="card bg-success text-white shadow" >
						  	<div class="card-body">
						    	<h5 class="card-title">Jumlah Sembuh</h5>
						    	<p class="card-text font"><?= $sembuh; ?></p>
						  	</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
						<div class="card bg-warning text-white shadow" >
						  	<div class="card-body">
						    	<h5 class="card-title">Jumlah Dirawat</h5>
						    	<p class="card-text font"><?= $dirawat; ?></p>
						  	</div>
						</div>
					</div>	
				</div>

				<h5 class=" mt-5">Terakhir data diperbarui : <?= $tanggal; ?></h5>

				<div class="row">
					<div class="col table-responsive">
						<table class="table table-hover bg-light table-bordered">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Provinsi</th>
						      <th scope="col">Kasus</th>
						      <th scope="col">Sembuh</th>
						      <th scope="col">Meninggal</th>
						      <th scope="col">Dirawat</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 1; ?>
						  	<?php foreach ($prov as $row_p): ?>
						  		<tr>
							      <th scope="row"><?= $i++; ?></th>
							      <td><?= $row_p->key ?></td>
							      <td><?= $row_p->jumlah_kasus ?></td>
							      <td><?= $row_p->jumlah_sembuh ?></td>
							      <td><?= $row_p->jumlah_meninggal ?></td>
							      <td><?= $row_p->jumlah_dirawat ?></td>
							    </tr>
						  	<?php endforeach ?>
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php $this->load->view('_partials/footer') ?>
	<?php $this->load->view('_partials/js'); ?>
</body>
</html>