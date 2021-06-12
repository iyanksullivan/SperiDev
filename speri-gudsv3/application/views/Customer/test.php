<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Customer Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username tidak boleh kosong">
						<!-- <input class="input100" type="text" name="username" placeholder="Username"> -->
						 <input type="text" class="input100" name="username" id="exampleInputPassword1" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password tidak boleh kosong">
						<!-- <input class="input100" type="password" name="password" placeholder="Password"> -->
					 	<input type="text" class="input100" name="password" id="exampleInputPassword1" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
						</span>
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