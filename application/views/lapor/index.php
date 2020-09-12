<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head'); ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar'); ?>
	
		<div class="jumbotron mb-0 pt-5" style="margin-top: 4rem;">
			<div class="container">

				<div class="row justify-content-center mt-4">
					<div class="col-lg-6">

						<?php if ($this->session->flashdata('message')): ?>
	                        <div class="alert alert-success" role="alert"><?=$this->session->flashdata('message');?></div>
	                    <?php elseif ($this->session->flashdata('error')): ?>
	                        <div class="alert alert-danger" role="alert"><?=$this->session->flashdata('error');?></div>
	                    <?php endif;?>

						<div class="card">
							<div class="card-header">
							    <h3>Lapor sigap covid-19</h3>
							 </div>
							<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
								    <label for="nama">Nama Lengkap</label>
								    <input type="text" class="form-control" id="nama" name="nama">
								    <?=form_error('nama', '<small class="text-danger font-italic">', '</small>');?>
								</div>
								<div class="form-group">
								    <label for="alamat">Alamat</label>
								    <textarea class="form-control" id="alamat" rows="2" name="alamat" id="alamat"></textarea>
								    <?=form_error('alamat', '<small class="text-danger font-italic">', '</small>');?>
								 </div>
								 <div class="form-group">
								    <label for="phone">Nomor Handphone</label>
								    <input type="text" class="form-control" id="phone" name="phone">
								    <?=form_error('phone', '<small class="text-danger font-italic">', '</small>');?>
								</div>
								<div class="form-group">
								    <label for="email">Email address</label>
								    <input type="text" class="form-control" id="email" name="email">
								    <?=form_error('email', '<small class="text-danger font-italic">', '</small>');?>
								</div>
								<div class="form-group">
								    <label for="pesan">Pesan</label>
								    <textarea class="form-control" id="pesan" rows="4" name="pesan" id="pesan"></textarea>
								    <?=form_error('pesan', '<small class="text-danger font-italic">', '</small>');?>
								 </div>
								 <a class="btn btn-danger" href="<?= base_url() ?>">Kembali</a>
								<button type="submit" class="btn btn-primary">Lapor</button>
							</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-lg">
						<h1 class="mb-4">Riwayat lapor sigap covid-19</h1>
						<div class="table-responsive">
							<table class="table table-hover bg-light table-bordered ">
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Nama</th>
							      <th scope="col">Pesan</th>
							      <th scope="col">Tangal lapor</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i = 1; ?>
							  	<?php foreach ($lapor as $row) : ?>
							  	<tr>
							      <th scope="row"><?= $i++; ?></th>
							      <td><?= $row['nama'] ?></td>
							      <td><?= $row['pesan'] ?></td>
							      <td><?= $row['date_created'] ?></td>
							      <td>
							      	<a href="<?= base_url('lapor/update/') . $row['id']; ?>" class="badge badge-warning">update</a>
							      	<a href="<?= base_url('lapor/delete/') . $row['id']; ?>" class="badge badge-danger">delete</a>


							      </td>
							    </tr>	
							  	<?php endforeach; ?>
							    
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