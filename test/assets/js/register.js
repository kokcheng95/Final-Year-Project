$(document).ready(function(){
	$("#reg_user").click(function(){
		var username=$("#username").val();
		var email=$("#email").val();
		var password=$("#password").val();

		var data="username"+username+"&email"+email+"&password";
			$.ajax({
				method:"post",
				url:"../registerDB.php",
				data:data

			});


	});

});