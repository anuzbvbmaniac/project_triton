
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
  	<!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Trinton's Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="changePassword.php">Change Password</a></li>
          <li><a href="notice.php">Notices</a></li>
          <li><a href="feedback.php">Feedbacks</a></li>
        </ul>
      </li>
      <li><a href="logout.php">Log out</a></li>
      <!-- <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
	

</div>
</body>
</html>