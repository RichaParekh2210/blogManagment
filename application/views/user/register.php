<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog Management</title>
</head>
<body>

<div id="container">
	<h3 class="text-center text-primary">Registeration</h3>
	<form action="<?php echo base_url().'index.php/user/registerUser'?>" method="POST" id="register-form" class="form-wrapper">
		<div class="form-group">
			<input type="text" name="fname" placeholder="First name" class="form-control" />
			<p class="error-msg text-danger" id="error_fname">Please enter first name</p>	
		</div>
		<div class="form-group">
			<input type="text" name="lname" placeholder="Last name" class="form-control" />
			<p class="error-msg text-danger" id="error_lname">Please enter last name</p>	
		</div>
		<div class="form-group">
			<input type="text" name="email" placeholder="Email" class="form-control" />
			<p class="error-msg text-danger" id="error_email">Please enter email name</p>	
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password" class="form-control" />
			<p class="error-msg text-danger" id="error_password">Please enter password</p>	
		</div>
		<div class="form-group">
			<input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" />
			<p class="error-msg text-danger" id="error_confirm_password"></p>	
		</div>
		<div class="form-group">
			<input type="submit" name="register" value="Register" class="btn btn-primary register-btn" class="form-control" />
		</div>
	</form>
	<p>Already have account?<a href="<?php echo base_url().'index.php/user/login'?>">Login</a></p>
</div>
<style type="text/css">
#blog-form .form-group,#register-form .form-group{
	margin-bottom: 10px !important;
}
</style>
</body>
</html>