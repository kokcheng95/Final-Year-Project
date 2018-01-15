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

	<div class="container" style="margin-top:100px">
		<div class="row">
			<div class="colunm">
			
				<div class="panel panel-default">
				<h4>Register here</h4><br>
				
				<span><i class="fa fa-facebook"></i></span>
				<span><i class="fa fa-twitter"></i></span>
				<span><i class="fa fa-google-plus"></i></span>
				<br><br>
				
					<div class="panel-body">
						<form method="post" action="register.php">
							<?php include('errors.php'); ?>
							<div class="input-group" data-validate = "Valid Name is required">
							<label>Username</label>
							<input type="text" name="username" placeholder="First and Last Name" >
							</div> 
							<div class="input-group" data-validate = "Valid Email is required :kokcheng@xxxx.com"
							<label>Email</label>
							<input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
							</div>
							<div class="input-group" data-validate = "Password is required "
							<label>Password</label>
							<input type="password" name="password_1" placeholder="Password">
							</div>
							<div class="input-group" data-validate = "Password is required "
							<label>Confirm password</label>
							<input type="password" name="password_2" placeholder="Confirm Password">
							</div>
							<div class="input-group">
							<button type="submit" class="btn" name="reg_user">Register</button>
							</div>
							<p>
							Already a member? <a href="login.php">Sign in</a>
							</p>
							</form>
					</div><!--panel-body-->
				</div><!--panel-default-->
			</div><!--colunm-->
		</div> <!-- row-->
	
	</div><!-- Container-->
  
</body>
</html>