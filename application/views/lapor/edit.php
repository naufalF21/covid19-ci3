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
								    <input type="text" class="form-control" id="nama" name="nama" value="<?= $lapor['nama'] ?>">
								    <?=form_error('nama', '<small class="text-danger font-italic">', '</small>');?>
								</div>
								<div class="form-group">
								    <label for="alamat">Alamat</label>
								    <textarea class="form-control" id="alamat" rows="2" name="alamat" id="alamat"><?= $lapor['alamat'] ?></textarea>
								    <?=form_error('alamat', '<small class="text-danger font-italic">', '</small>');?>
								 </div>
								 <div class="form-group">
								    <label for="phone">Nomor Handphone</label>
								    <input type="text" class="form-control" id="phone" name="phone" value="<?= $lapor['phone'] ?>">
								    <?=form_error('phone', '<small class="text-danger font-italic">', '</small>');?>
								</div>
								<div class="form-group">
								    <label for="email">Email address</label>
								    <input type="text" class="form-control" id="email" name="email" value="<?= $lapor['email'] ?>">
								    <?=form_error('email', '<small class="text-danger font-italic">', '</small>');?>
								</div>
								<div class="form-group">
								    <label for="pesan">Pesan</label>
								    <textarea class="form-control" id="pesan" rows="4" name="pesan" id="pesan"><?= $lapor['pesan'] ?></textarea>
								    <?=form_error('pesan', '<small class="text-danger font-italic">', '</small>');?>
								 </div>
								 <a class="btn btn-danger" href="<?= base_url() ?>">Kembali</a>
								<button type="submit" class="btn btn-primary">Edit</button>
							</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	<?php $this->load->view('_partials/footer') ?>
	<?php $this->load->view('_partials/js'); ?>
</body>
</html>