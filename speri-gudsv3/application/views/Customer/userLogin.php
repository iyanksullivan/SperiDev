<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/util.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url(); ?>/assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Customer Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username tidak boleh kosong">
						<!-- <input class="input100" type="text" name="username" placeholder="Username"> -->
						 <input type="text" class="input100" name="username" id="exampleInputPassword1" placeholder="Username" required> 
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password tidak boleh kosong">
						<!-- <input class="input100" type="password" name="password" placeholder="Password"> -->
					 	<input type="password" class="input100" name="password" id="exampleInputPassword1" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
						</span>
					</div>
					<div>
						<?php if(!empty($error)){echo $error;} ?>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<a class="txt2" href="#">
							Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="<?=site_url('Customer/register')?>">
							Daftar akun baru
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>