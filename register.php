<?php include('registerDB.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styleRegister.css">
<!--===============================================================================================-->

</head>
<body>
	<div class="background-image"></div>
	<div class="content"></div><!--content-->
		<div class="container" style="margin-top:100px;">
			<div class="row">
		
		
				<div class="col-md-4 col-md-offset-4">
					
					<div class="panel panel-default">
					<h4>Register here</h4><br>
				
					<span><i class="fa fa-facebook"></i></span>
					<span><i class="fa fa-twitter"></i></span>
					<span><i class="fa fa-google-plus"></i></span>
					<br><br>
					<h4>OR</h4><hr>
				
						<div class="panel-body">
							<form method="post" action="register.php">
								<?php include('errors.php'); ?>
								<div class="form-group" data-validate = "Valid Name is required">
								
									<input type="text" name="username" class="form-control" placeholder="First and Last Name" >
									</div> 
								<div class="form-group" data-validate = "Valid Email is required :kokcheng@xxxx.com">
								
								<input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo $email; ?>">
								</div>
								<div class="form-group" data-validate = "Password is required ">
								
								<input type="password" name="password_1" class="form-control" placeholder="Password">
								</div>
								<div class="form-group" data-validate = "Password is required ">
								
								<input type="password" name="password_2" class="form-control" placeholder="Confirm Password">
								</div>
								<div class="form-group">
								<button type="submit" class="btn btn-success btn-lg btn-block" name="reg_user" value="Login">Register</button>
								</div>
								<p>
								Already a member? <a href="login.php">Sign in</a>
								</p>
								</form>
							</div><!--panel-body-->
							<div class="lock"><i class="fa fa-lock fa-3x"></i></div>
							<div class="label">Registration Form</div>
							<div class="label2"></div>

						</div><!--panel-default-->
					</div><!--colunm-->
				</div> <!-- row-->
			
			</div><!-- Container-->
		
	
  
</body>
</html>