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
include('header.php');
?>

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
<?php include('footer.php');  ?>
