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
  $level='1';
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

  <title>Triton International School</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</head>

<body>
  <div class="container">
   <a class="logo" href="#">
    <img class="img-responsive" src="img/school-logo.png" width="278" height="82" alt="Triton International College">
  </a>
</div>

<nav class="navbar navbar-inverse">
  <div class="contaier-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="form">

  <div class="fish" id="fish"></div>
  <div class="fish" id="fish2"></div>

  <form id="waterform" method="post" action="contact.php">

    <div class="formgroup" id="name-form">
      <label for="name">Your name*</label>
      <input class="form-control" type="text" id="name" name="name" required="required" />
    </div>

     <div class="formgroup" id="phone-form">
      <label for="phone">Your Phone*</label>
      <input class="form-control" type="text" pattern="[9][0-9]{9}" id="phone" name="phone" required="required" />
    </div>

    <div class="formgroup" id="email-form">
      <label for="email">Your e-mail (Optional)</label>
      <input class="form-control" type="email" id="email" name="email" />
    </div>   

    <div class="formgroup" id="message-form">
      <label for="message">Your message*</label>
      <textarea class="form-control" id="message" name="message" required="required" pattern="(\w+\W+){0,49}\w+\W*"></textarea>
    </div>


    <input class="form-control" name="send" type="submit" value="Send your message!" />
  </form>
</div>

<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0206442784583!2d85.34353587182184!3d27.685756814593866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94dbf4c89dc33ceb!2sTriton+Int&#39;l+Sec.+School!5e0!3m2!1sen!2snp!4v1504548007392" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div> 

<div class="footer">
 <div class="container">
 	<div class="row">
 		<div class="social">
       <a href="https://www.facebook.com/triton.edu.np/" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
       <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
       <a href="https://plus.google.com/+OndřejBárta-Otaku" class="link youtube" target="_parent"><span class="fa fa-youtube-square"></span></a>
     </div>
   </div>
 </div>
 <div class="container">
   <div class="row">
    <div class="col-sm-4">
     <img src="img/phone.png">
     <div class="footer-text">
       <h4>Tel: 01-5104529, 5104450</h4>
       <h4>Toll Free No.: 1660-01-04450</h4>
     </div>
   </div>
   <div class="col-sm-4">
     <img src="img/email.png">
     <div class="footer-text">
       <h4>Email</h4>
       <h4>tritonintlcollege@gmail.com</h4>
     </div>
   </div>
   <div class="col-sm-4">
     <img src="img/location.png">
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

