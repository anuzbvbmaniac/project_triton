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

include('header.php');
?>
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
<?php
include('footer.php');
?>