<?php 

if(isset($_POST['submit'])) {

	
	$email = $_POST['email'];
	$password = $_POST['password'];






}

?>


<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-23.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 11:20:03 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Lajum-Mail | Login and Register Form </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<section class="fxt-template-animation fxt-template-layout23" data-bg-image="img/blueback.png">
		<div class="fxt-bg-overlay" >
			<div class="fxt-content">
				<div class="fxt-header">
					<!-- <a href="login-23.html" class="fxt-logo"><img src="img/email.jpg" alt="Logo"></a> -->
				</div>
				<div class="fxt-form">
					<p style="color: darkblue">Login into your account</p>
					<form method="POST" action="login.php">

						
						<div class="form-group">
							<div class="fxt-transformY-50 fxt-transition-delay-1">
								<input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
							</div>
						</div>

						<div class="form-group">
							<div class="fxt-transformY-50 fxt-transition-delay-2">
								<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
								<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
							</div>
						</div>

						<div class="form-group">
							<div class="fxt-transformY-50 fxt-transition-delay-3">
								<div class="fxt-checkbox-area">
									<div class="checkbox" style="color: black;">
										<input id="checkbox1" type="checkbox">
										<label for="checkbox1">Keep me logged in</label>
									</div>
									<!-- <a href="forgot-password-23.html" class="switcher-text">Forgot Password</a> -->
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="fxt-transformY-50 fxt-transition-delay-4">
								<button type="submit" name="submit" class="fxt-btn-fill">Log in</button>
							</div>
						</div>
					</form>
				</div>
				
				<div class="fxt-footer">
					<div class="fxt-transformY-50 fxt-transition-delay-9">
						<p>Don't have an account?<a href="sign_up.php" class="switcher-text2 inline-text">Sign up</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="js/jquery-3.5.0.min.js"></script>
	<!-- Popper js -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="js/main.js"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-23.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 11:20:09 GMT -->
</html>