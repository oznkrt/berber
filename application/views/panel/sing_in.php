<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/login/images/icons/favicon.ico')?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/iconic/css/material-design-iconic-font.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animate/animate.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animsition/css/animsition.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/select2/select2.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/main.css')?>">
	<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

<div class="limiter">
	<div class="container-login100">
		<div class="login100-more" style="background-image: url('<?php echo base_url("assets/login/images/bg-01.jpg")?>')"></div>

	<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
		<form action="<?php echo base_url('welcome/sing_in')?>" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Sign In
					</span>
			<?php
			if(isset($error))
			{
				foreach ($error as $err)
			{?>
				<span ><?php echo $err?></span>
			<?php
			}
			}?>
			<div class="wrap-input100 validate-input" data-validate="Username is required">
				<span class="label-input100">Username</span>
				<input class="input100" type="text" name="username" placeholder="Username...">

			</div>

			<div class="wrap-input100 validate-input" data-validate = "Password is required">
				<span class="label-input100">Password</span>
				<input class="input100" type="password" name="pass" placeholder="*************">
				<span class="focus-input100"></span>
			</div>
			<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>

					<button type="submit" class="login100-form-btn" >Sign In</button>
				</div>

				<a href="<?php echo base_url('welcome/sing_up_page')?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
					Sign Up
					<i class="fa fa-long-arrow-right m-l-5"></i>
				</a>
			</div>
		</form>
	</div>
</div>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/login/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/login/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/login/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/login/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/login/js/main.js')?>"></script>

</body>
</html>
