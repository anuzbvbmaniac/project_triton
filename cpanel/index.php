

<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>
	<?php
//many wrong attempt
	if(isset($_COOKIE['login_count'])){
		if($_COOKIE['login_count']==3)
		{
			echo "You are blocked for 1 minutes because of many wrong attept..!!";
			die();
		}
	}

	if(isset($_GET['update']))
	{
		?>
		<script type="text/javascript">

			alert('You have just Changed your password, please log in with your new password.');
		</script>

		<?php
		
	}
	?>
	<div class="container">    
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
			<div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Sign In</div>
					<!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
				</div>     
				<?php	
				//Invalid Username or Password
				if(isset($_GET['warning']))
				{
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
				if(isset($_GET['loginfirst']))
				{
					?>
					<div class="alert alert-danger">
						<?php
						echo 'Please Login First';
						?>
					</div>
					<?php
				}
				?>
				<div style="padding-top:30px" class="panel-body" >

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

					<form id="loginform" class="form-horizontal" role="form" action="" method="POST">

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" required="required">                                        
						</div>

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="required">
						</div>

						<div class="input-group">
							<div class="checkbox">
								<label>
									<input id="showPassword" onclick="functionShowPassword()" type="checkbox" name="showPassword" value="1"> Show Password
								</label>
							</div>
						</div>
						<div style="margin-top:10px" class="form-group">
							<!-- Button -->

							<div class="col-sm-12 controls">
								<input type="submit" id="btn-login" class="btn btn-success" name="login" value="Login" >

							</div>
						</div>
					</form>     
				</div>               
			</div>  
		</div>
		<script type="text/javascript">
			function functionShowPassword() {
				var x = document.getElementById("login-password");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>

	</body>
	</html>
	<?php 
	session_start();
	require_once('../connection.php');
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		// echo $password;
		// die();
		$query_check = "SELECT * FROM tbl_admin WHERE username = '$username'  AND password ='$password'";
		$result = $conn->query( $query_check );
		if ( $result->num_rows > 0 ) {

			while ( $data = $result->fetch_assoc() ) {
				$id = $data[ 'id' ];
				$user = $data[ 'username' ];

			}

			$_SESSION['user_logged']=TRUE;
			$_SESSION["uid"] = $id;

			header('Location:dashboard.php?loginsucc=yes');
		}else {
			if ( isset( $_COOKIE[ 'login_count' ] ) ) {
				$_COOKIE[ 'login_count' ] = $_COOKIE[ 'login_count' ] + 1;
				setcookie( "login_count", $_COOKIE[ 'login_count' ], time() + 60 );
			} else {
				setcookie( "login_count", 1, time() + 60 );
			}
			header('Location:index.php?warning=loginfailed');
		}
	}
	?>