<?php include('registerDB.php') ?>

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeQueue</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/material-icons.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
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
                    <li  role="presentation"><a href="index.html">Home </a></li>
                    <li  role="presentation"><a href="#">About </a></li>
                    <li  class="active" role="presentation"><a href="login.php">Login </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="background-image"></div>
    <div class="content"></div><!--content-->
            <div class="row register-form">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal custom-form validate-form" method="POST" action="register.php">
                        <h1>Register Form</h1>
                        <div class="form-group" >
                            <div class="col-sm-4 label-column " >
                                <label class="control-label" for="name-input-field">Name </label>
                            </div>
                            <div class="col-sm-6 input-column validate-input" data-validate = "Valid Name is required">
                                <input class="form-control validate-control"  type="text" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="email-input-field">Email </label>
                            </div>
                            <div class="col-sm-6 input-column validate-input" data-validate = "Valid email is required :kokcheng@xxxx.com" >
                                <input class="form-control validate-control"  type="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column" >
                                <label class="control-label" for="pawssword-input-field">Password </label>
                            </div>
                            <div class="col-sm-6 input-column validate-input" data-validate = "password  is required">
                                <input class="form-control validate-control"  type="password" name="password_1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="repeat-pawssword-input-field">Repeat Password </label>
                            </div>
                            <div class="col-sm-6 input-column validate-input" data-validate = "password  is required">
                                <input class="form-control validate-control"  type="password" name="password_2">
                            </div>
                        </div>

                        <div class="checkbox validate-input" data-validate="Please check this box to proceed">
                            <label>
                                <input class="validate-control" type="checkbox" name="checkbox">I've read and accept the terms and conditions</label>
                        </div>
                        <button class="btn btn-default submit-button" type="submit" name="login" value="Login">Register</button>
                    </form>
                </div>
            </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
    <script src="assets/js/validate.js"></script>
    
</body>

</html>