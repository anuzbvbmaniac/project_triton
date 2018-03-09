<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Triton School, College">
	<meta name="keywords" content="Triton">
	<meta name="author" content="Anuz Pandey">

	<!-- Title -->
	<title>Triton - Admin Login</title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/plugins/icomoon/style.css" rel="stylesheet">
	<link href="../assets/plugins/uniform/css/default.css" rel="stylesheet"/>
	<link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
	<link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">

	<!-- Theme Styles -->
	<link href="../assets/css/triton.css" rel="stylesheet">
	<link href="../assets/css/themes/admin.css" rel="stylesheet">
	<link href="../assets/css/custom.css" rel="stylesheet">
</head>

<body>
	<?php
	//many wrong attempt
	if ( isset( $_COOKIE[ 'login_count' ] ) ) {
		if ( $_COOKIE[ 'login_count' ] == 3 ) {
			echo "You are blocked for 1 minutes because of many wrong attept..!!";
			die();
		}
	}

	if ( isset( $_GET[ 'update' ] ) ) {
		?>
	<script type="text/javascript">
		alert( 'You have just Changed your password, please log in with your new password.' );
	</script>

	<?php

	}
	?>
	<!-- Page Container -->
	<div class="page-container">
		<!-- Page Inner -->
		<div class="page-inner login-page">
			<div id="main-wrapper" class="container-fluid">
				<div class="row">
					
					<div class="col-sm-6 col-md-3 login-box">
						<img class="img-responsive" src="../assets/images/Triton-International.png" alt="">
						<h4 class="login-title">Sign in to your account</h4>
						<form id="loginform" class="form-horizontal" role="form" action="" method="POST">
							<?php
							//Invalid Username or Password
							if ( isset( $_GET[ 'warning' ] ) ) {
								?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php
								echo 'Invalid Username or Password';
								?>
							</div>
							<?php
							}
							?>
							<?php


							//Block Direct Access to dashboard(MSG)
							if ( isset( $_GET[ 'loginfirst' ] ) ) {
								?>
							<div class="alert alert-danger">
								<?php
								echo 'Please Login First';
								?>
							</div>
							<?php
							}
							?>

							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input id="login-username" autofocus type="text" class="form-control" name="username" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<label>
									<input id="showPassword" onclick="functionShowPassword()" type="checkbox" name="showPassword" value="1"> Show Password
								</label>
							
							</div>
							<div class="form-group">
								<input type="submit" id="btn-login" class="btn btn-blue" name="login" value="Login">
							</div>
							<div class="form-group">
								<a href="#" class="forgot-link">Forgot password?</a>
							</div>
							
							
							
							
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content -->
	</div>
	<!-- /Page Container -->


	<script type="text/javascript">
		function functionShowPassword() {
			var x = document.getElementById( "login-password" );
			if ( x.type === "password" ) {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

	<!-- Javascripts -->
	<script src="../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
	<script src="../assets/plugins/switchery/switchery.min.js"></script>
	<script src="../assets/js/triton.js"></script>

</body>

</html>
<?php
session_start();
require_once( '../connection.php' );
if ( isset( $_POST[ 'login' ] ) ) {
	$username = $_POST[ 'username' ];
	$password = md5( $_POST[ 'password' ] );
	// echo $password;
	// die();
	$query_check = "SELECT * FROM tbl_admin WHERE username = '$username'  AND password ='$password'";
	$result = $conn->query( $query_check );
	if ( $result->num_rows > 0 ) {

		while ( $data = $result->fetch_assoc() ) {
			$id = $data[ 'id' ];
			$user = $data[ 'username' ];

		}

		$_SESSION[ 'user_logged' ] = TRUE;
		$_SESSION[ "uid" ] = $id;

		header( 'Location:dashboard.php?loginsucc=yes' );
	} else {
		if ( isset( $_COOKIE[ 'login_count' ] ) ) {
			$_COOKIE[ 'login_count' ] = $_COOKIE[ 'login_count' ] + 1;
			setcookie( "login_count", $_COOKIE[ 'login_count' ], time() + 60 );
		} else {
			setcookie( "login_count", 1, time() + 60 );
		}
		header( 'Location:index.php?warning=loginfailed' );
	}
}
?>