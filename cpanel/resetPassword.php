<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<legend>
			Password Reset
		</legend>
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div style="padding-top:30px" class="panel-body">

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

					<form id="resetform" class="form-horizontal" role="form" action="" method="POST">

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email" required="required">
						</div>
					</div>
					<div style="margin-top:10px" class="form-group">
						<!-- Button -->
						<div class="col-sm-12 controls">
							<input type="submit" id="btn-login" class="btn btn-success" name="send" value="Send Code">

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	
</form>
</body>
</html>
<?php
if(isset($_POST['send'])){
$email=$_POST['email'];
$to      = $email; // Send email to our user
$subject = 'Passwor Reset | Authentication'; // Give the email a subject 
$message = '

Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.



Please click this link to activate your account:


'; // Our message above including the link

$headers = 'From:noreply@triton.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); 
}
?>