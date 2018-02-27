<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		function checkPassword(){
			var password =  document.getElementById('cpassword').value; 
			var req;
			if(window.XMLHttpRequest)
			{
				req = new XMLHttpRequest();     

			}
			else req = new ActiveXObject("Microsoft.XMLHTTP");
			req.onreadystatechange = function()
			{
				if(req.readyState==4)
				{
					document.getElementById('displaydiv').innerHTML = req.responseText;
					document.getElementById('btnChange').disabled = true;
					if(req.responseText=="<span class='glyphicon glyphicon-ok' style='color:#00A41E;'></span> Password Match"){
						document.getElementById('btnChange').disabled = false;
					}

				}

			}
			req.open("GET", "checkPassword.php?key="+password, true)
			req.send();
		}


	</script>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<a href="dashboard.php"><button class="btn btn-primary" btnaction="">Back</button></a>
				<div class="col-sm-12">
					<h1>Change Password</h1>

				</div>
				<p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
				<form method="post" id="passwordForm" action="checkPassword.php" method="POST">
					<input type="password" onkeyup="checkPassword()" class="input-lg form-control" name="cpassword" id="cpassword" placeholder="Current Password" required="required" autocomplete="off">
					<div class="row">
						<div class="col-sm-12" id="displaydiv">
							
						</div>
					</div>
					<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" required="required" autocomplete="off">
					<div class="row">
						<div class="col-sm-6">
							<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
							<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
						</div>
						<div class="col-sm-6">
							<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
							<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
						</div>
					</div>
					<input type="password" class="input-lg form-control" required="required" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
					<div class="row">
						<div class="col-sm-12">
							<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
						</div>
					</div>
					<input id="btnChange" name="changePassword" type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
				</form>
			</div><!--/col-sm-6-->
		</div><!--/row-->
	</div>

	<script type="text/javascript">
		
		$("input[name=password1]").keyup(function(){
			
			var ucase = new RegExp("[A-Z]+");
			var lcase = new RegExp("[a-z]+");
			var num = new RegExp("[0-9]+");

			if($("#password1").val().length >= 8){
				$("#8char").removeClass("glyphicon-remove");
				$("#8char").addClass("glyphicon-ok");
				$("#8char").css("color","#00A41E");
			}else{
				$("#8char").removeClass("glyphicon-ok");
				$("#8char").addClass("glyphicon-remove");
				$("#8char").css("color","#FF0004");
			}

			if(ucase.test($("#password1").val())){
				$("#ucase").removeClass("glyphicon-remove");
				$("#ucase").addClass("glyphicon-ok");
				$("#ucase").css("color","#00A41E");
			}else{
				$("#ucase").removeClass("glyphicon-ok");
				$("#ucase").addClass("glyphicon-remove");
				$("#ucase").css("color","#FF0004");
			}

			if(lcase.test($("#password1").val())){
				$("#lcase").removeClass("glyphicon-remove");
				$("#lcase").addClass("glyphicon-ok");
				$("#lcase").css("color","#00A41E");
			}else{
				$("#lcase").removeClass("glyphicon-ok");
				$("#lcase").addClass("glyphicon-remove");
				$("#lcase").css("color","#FF0004");
			}

			if(num.test($("#password1").val())){
				$("#num").removeClass("glyphicon-remove");
				$("#num").addClass("glyphicon-ok");
				$("#num").css("color","#00A41E");
			}else{
				$("#num").removeClass("glyphicon-ok");
				$("#num").addClass("glyphicon-remove");
				$("#num").css("color","#FF0004");
			}

			if($("#password1").val() == $("#password2").val()){
				$("#pwmatch").removeClass("glyphicon-remove");
				$("#pwmatch").addClass("glyphicon-ok");
				$("#pwmatch").css("color","#00A41E");
			}else{
				$("#pwmatch").removeClass("glyphicon-ok");
				$("#pwmatch").addClass("glyphicon-remove");
				$("#pwmatch").css("color","#FF0004");
			}
		});

		$("input[name=password2]").keyup(function(){
			
			var ucase = new RegExp("[A-Z]+");
			var lcase = new RegExp("[a-z]+");
			var num = new RegExp("[0-9]+");

			if($("#password1").val().length >= 8){
				$("#8char").removeClass("glyphicon-remove");
				$("#8char").addClass("glyphicon-ok");
				$("#8char").css("color","#00A41E");
			}else{
				$("#8char").removeClass("glyphicon-ok");
				$("#8char").addClass("glyphicon-remove");
				$("#8char").css("color","#FF0004");
			}

			if(ucase.test($("#password1").val())){
				$("#ucase").removeClass("glyphicon-remove");
				$("#ucase").addClass("glyphicon-ok");
				$("#ucase").css("color","#00A41E");
			}else{
				$("#ucase").removeClass("glyphicon-ok");
				$("#ucase").addClass("glyphicon-remove");
				$("#ucase").css("color","#FF0004");
			}

			if(lcase.test($("#password1").val())){
				$("#lcase").removeClass("glyphicon-remove");
				$("#lcase").addClass("glyphicon-ok");
				$("#lcase").css("color","#00A41E");
			}else{
				$("#lcase").removeClass("glyphicon-ok");
				$("#lcase").addClass("glyphicon-remove");
				$("#lcase").css("color","#FF0004");
			}

			if(num.test($("#password1").val())){
				$("#num").removeClass("glyphicon-remove");
				$("#num").addClass("glyphicon-ok");
				$("#num").css("color","#00A41E");
			}else{
				$("#num").removeClass("glyphicon-ok");
				$("#num").addClass("glyphicon-remove");
				$("#num").css("color","#FF0004");
			}

			if($("#password1").val() == $("#password2").val()){
				$("#pwmatch").removeClass("glyphicon-remove");
				$("#pwmatch").addClass("glyphicon-ok");
				$("#pwmatch").css("color","#00A41E");
			}else{
				$("#pwmatch").removeClass("glyphicon-ok");
				$("#pwmatch").addClass("glyphicon-remove");
				$("#pwmatch").css("color","#FF0004");
			}
		});
	</script>
</body>
</html>
<?php 
// require_once('../connection.php');
// session_start();

?>