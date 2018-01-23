<?php include('loginDB.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FreeQueue</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="assets/img/freeQueue.png" id="logo"><strong>FreeQ</strong>ueue </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" ><a href="index.html">Home </a></li>
                    <li role="presentation"><a href="#">About </a></li>
                    <li class="active"><a href="login.php">Login </a></li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="limiter">
	
		<div class="container-login100">
		
			<div class="wrap-login100">
			<span class="login100-form-mainTitle">
					<strong>FreeQ</strong>ueue
					</span>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/freeQueue.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="login.php">
				  	
					
					<span class="login100-form-title">
						Log In Here
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required :kokcheng@xxxx.com">
						<input class="input100 validate-control" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 validate-control" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/bootstrap/js/popper.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/validate.js"></script>

</body>
</html>