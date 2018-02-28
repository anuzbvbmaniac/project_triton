<?php

if(isset($_GET['feedback']))
{
  ?>
  <script type="text/javascript">

    alert('Your Feedback has Sent !!');

  </script>
  <?php
}

if(isset($_POST['send'])){
  require_once('../../connection.php');
  $name = $_POST['name']; 
  $level='3';
  $phone = $_POST['phone']; 

  if($_POST['email'] == TRUE){
  $email = $_POST['email']; 
  }else{
    $email = 'Email Not Available';
  }
  
  $message = $_POST['message']; 
  $fulltime=date('Y-m-d H:i:s');


  $send_feedback= "INSERT INTO tbl_feedback(feedback_id, feedback_in, feedback_by, phone,  email, feedback, feedback_date) VALUES (NULL, '$level', '$name', '$phone', '$email', '$message' ,'$fulltime')";

  $conn->query($send_feedback);


  header("location:contact.php?feedback=sent");
  

}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>Triton International Higher Secondary School</title>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>

	<!-- nav -->
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="0">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo2.png" alt="company logo" width="200" height="60"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right custom-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li class="dropdown">
						<a href="Streams.php" class="dropdown-toggle" data-toggle="dropdown">Streams <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="bbs.php">BBS</a></li>
							<li><a href="bsw.php">BSW</a></li>
							<li><a href="ba.php">BA</a></li>
							<li><a href="bbm.php">BBM</a></li>
						</ul>
					</li>
					<li><a href="News.php">News</a></li>
					<li><a href="Gallery.php">Gallery</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="image">
		<img src="img/about-bg.jpg">
	</div>
	<section id="contact">
		<div class="section-content">
			<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Get in Touch with us</span></h1>
			<h3></h3>
		</div>
		<div class="contact-section">
			<div class="container">
				<form method="POST">
					<div class="col-md-6  form-line">
						<div class="form-group">
							<label for="exampleInputUsername">Your name*</label>
							<input class="form-control" type="text" id="name" name="name" required="required"placeholder=" Enter Name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">Email Address(Optional)</label>
							<input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder=" Enter Email id">
						</div>	
						<div class="form-group">
							<label for="telephone">Mobile No.*</label>
							<input type="tel" name="phone" pattern="[9][0-9]{9}" class="form-control" id="telephone" required="required" placeholder=" Enter 10-digit mobile no.">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for ="description"> Message*</label>
							<textarea  class="form-control" name="message" id="description" required="required" placeholder="Enter Your Message"></textarea>
						</div>
						<div class="container-fluid">

							<button name="send" formaction="contact.php" type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</section>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.1142414019664!2d85.34216091454368!3d27.682863782802137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1992ab460d33%3A0x6210de13a55d9f97!2sTriton+Int&#39;l+College!5e0!3m2!1sen!2snp!4v1505144305829" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div> 


	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-logo">
					<a class="logo" href="#">
						<img src="img/logo2.png" width="278" height="82" alt="Triton International College">
					</a>
				</div>
				<div class="footer-about">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span class="display-none"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span></p>

				</div>
				<div class="social">
					<a href="https://www.facebook.com/triton.edu.np/" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
					<a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
					<a href="https://plus.google.com/+OndřejBárta-Otaku" class="link youtube" target="_parent"><span class="fa fa-youtube-square"></span></a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"> <img src="img/phone.png">
					<div class="footer-text">
						<h4>Tel: 01-5104529, 5104450</h4>
						<h4>Toll Free No.: 1660-01-04450</h4>
					</div>
				</div>
				<div class="col-sm-4"> <img src="img/email.png">
					<div class="footer-text">
						<h4>Email</h4>
						<h4>tritonintlcollege@gmail.com</h4>
					</div>
				</div>
				<div class="col-sm-4"> <img src="img/location.png">
					<div class="footer-text">
						<h4>Location</h4>
						<h4>Tinkune, Kathmandu, Nepal</h4>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>