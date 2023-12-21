<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOWL Indonesia</title>
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/login1/css/style.css">
   <link rel="icon" type="img" href="assets/login1/images/orion.jpeg"/>
</head>

<body>
    <div class="container"> <!-- mengatur tampilan  -->
        <div class="login">
				<form class="login100-form validate-form" action="<?php echo base_url('Auth/login') ?>" method="POST"><!-- mengirimkan data dari client ke server -->
					 <h1>Login</h1>
                <hr>
                <p>Sistem Informasi Inventori Pada PT.Orion OWL Indonesia</p>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center">
						<a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
					</div>
				</form>
 </div>
        <div class="right">
            <br>
            <img src="<?php echo base_url() ?>assets/login1/images/orion.jpeg" alt="">
        </div>
    </div>
</body>

</html>