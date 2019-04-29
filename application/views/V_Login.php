<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Log In Kalibrr</title>

	<!-- Bootstrap & CSS -->
	<link rel="stylesheet" href="<?php echo base_url('Assets/Bootstrap/js/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('Assets/Bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('Assets/css/login.css');?>">
</head>
<body>

	<!-- Log In Form -->
	<section class="log-in">
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
						<div class="card-body">
							<h5 class="card-title text-center">Sign In to Kalibrr</h5>
							<?php
								if(isset($_SESSION['SuccessReg'])) {
                               		$this->load->view('Alerts/SuccessReg');
                            	} else if(isset($_SESSION['falselogin'])) {
                                	$this->load->view('Alerts/FailLogin');
                            	}
                        	?>
                        	<form method="POST" action="<?php echo site_url('UserController/signIn'); ?>" class="register-form" id="login-form">
                        		<div class="form-label-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
                                    <label for="your_password">Password</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="remember-password" id="remember-password">
                                    <label class="custom-control-label" for="remember-password">Remember password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                                <hr class="my-4">
                                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                        	</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>


</body>
</html>