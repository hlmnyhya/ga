<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('templates/header.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('templates/nav.php') ?>

		<div class="content">
			<h1>Update Profile</h1>

			 <form method="post" action="<?php echo base_url('setting/ProsesEditData'); ?>">
				<div>
					<label for="Nama_lengkap">Name</label>
					<input type="text" name="Nama_lengkap" class="<?= form_error('Nama_lengkap') ? 'invalid' : '' ?>"
					value="<?= form_error('Nama_lengkap') ? set_value('Nama_lengkap') : $current_user->Nama_lengkap ?>" 
					required maxlength="32"/>
					<div class="invalid-feedback">
						<?= form_error('Nama_lengkap') ?>
					</div>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="text" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>"
					value="<?= form_error('email') ? set_value('email') : $current_user->email ?>" 
					required maxlength="32"/>
					<div class="invalid-feedback">
						<?= form_error('email') ?>
					</div>
				</div>

				<div>
					<button type="submit" name="save" class="button button-primary">Save Update</button>
				</div>
			</form>

			<?php $this->load->view('templates/footer.php') ?>
		</div>
	</main>
</body>

</html>