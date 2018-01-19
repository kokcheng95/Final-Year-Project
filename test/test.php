<!DOCTYPE html>

<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>freequeue</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $("#btn").click(function(){
                 
              $.ajax({
                
                    type: "POST",
                    url: "testdb.php",
                    data: {
                          username:$("#username").val(),
                          email:$("#em").val(),
                          password:$("#ps").val()

                    },
                     
                     success: function(){

                    },
                    
                   
                        });


                });

         });</script>
   
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
                    <li  role="presentation"><a href="#">Home </a></li>
                    <li  role="presentation"><a href="#">About </a></li>
                    <li  class="active" role="presentation"><a href="#">Login </a></li>
                </ul>
            </div>
        </div>
    </nav>
   
            <div class="row register-form">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal custom-form">
                        <h1>Register Form</h1>
                        <div class="form-group" >
                            <div class="col-sm-4 label-column " >
                                <label class="control-label" for="name-input-field">Name </label>
                            </div>
                            <div class="col-sm-6 input-column validate-input" data-validate = "Valid Name is required">
                                <input class="form-control " required  type="text" id="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="email-input-field">Email </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" required type="email" id="em">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column" data-validate = "password Name is required">
                                <label class="control-label" for="pawssword-input-field">Password </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" required  type="password" id="ps">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="repeat-pawssword-input-field">Repeat Password </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" required id="repeat-pawssword-input-field" type="password" title="Please use only 6 digit">
                            </div>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" required>I've read and accept the terms and conditions</label>
                        </div>
                        <div>
                        <button class="btn btn-default submit-button" type="submit-button" id="btn">Register</button></div>
                    </form>
                </div>
            </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
    
    
</body>

</html>