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
</head>
<body>

    <section class="heading">
        <div class="text-center">
            <h4 class="tect-heavy">Recruit better with Kalibrr.</h4>
            <h6>More talent discovery, conversations that deliver.</h6>
            <br><br>
        </div>
    </section>

	<!-- Sign Up Form -->
	<section class="sign-up">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-7 mx-auto">
                    <div class="card-body">
                        <form action="<?php echo site_url('UserController/Register'); ?>" method="POST" class="register-form" id="register-form">
                            <div class="form-label">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="FirstName">First Name</label>
                                        <input type="text" id="inputFirstName" name="firstname" class="form-control" placeholder="" required autofocus>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="LastName">Last Name</label>
                                        <input type="text" id="inputLastName" name="lastname" class="form-control" placeholder="" required autofocus>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-label">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Company">Company</label>
                                        <input type="text" id="inputCompany" name="company" class="form-control" placeholder="" required autofocus>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="industry">Industry</label>
                                        <input type="text" id="industry" name="industry" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-label">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="PositioninCompany">Position in Company</label>
                                        <input type="text" id="Position" name="PositioninCompany" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Companysize">Company Size</label>
                                        <input type="text" id="Companysize" name="CompanySize" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-label">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="workEmail">Work Email</label>
                                        <input type="email" id="workEmail" name="WorkEmail" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Mobilenumber">Mobile Number</label>
                                        <input type="number" id="Mobilenumber" name="MobileNumber" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2"> I have read and I agree with Kalibrr's Privacy Policy.</label>
                            </div>
                            <button class="btn btn-lg btn-success text-uppercase" type="submit">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="padding-top:50px;padding-bottom:50px">
    <div class="row">
      <div class="col-md-2" >
        <img class="d-block w-100" src="<?php echo base_url();?>assets/image/BCA.png" alt="">
      </div>
      <div class="col-md-2">
        <img class="d-block w-100" src="<?php echo base_url();?>assets/image/Gojek.png" alt="">
      </div>
      <div class="col-md-2">
        <img class="d-block w-100" src="<?php echo base_url();?>assets/image/Accenture.png" alt="">
      </div>
      <div class="col-md-2">
        <img class="d-block w-100" src="<?php echo base_url();?>assets/image/pwc.png" alt="">
      </div>
      <div class="col-md-2">
        <img class="d-block w-100" src="<?php echo base_url();?>assets/image//Shopee.png" alt="">
      </div>
      <div class="col-md-2">
        <img class="d-block w-100" src="<?php echo base_url();?>assets/image/unilever.png" alt="">
      </div>
      </div>
    </div>


</body>
</html>