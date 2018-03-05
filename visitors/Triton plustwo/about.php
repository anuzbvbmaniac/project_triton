<?php
include('header.php');
?>
<div class="about">
	<div class="container">
    <div class="row">
      <h1 class="about-us">
       About Us
     </h1>
     <?php
     require_once('../../connection.php');
     $query_check = "SELECT * FROM tbl_aboutus WHERE abt_id=2";
     $result = $conn->query( $query_check );
     $data = $result->fetch_array();
     ?>
     <div class="col-lg-6">
       <br>
       <p class="about-p"><?php echo $data['about_us_text']?></p>
       
     </div>
     
     <div class="col-lg-6">
       <img src="../../cpanel/aboutUsImage/<?php echo $data['featured_image']?>" class="about-img">
     </div>
   </div>
 </div>
 <div class="about-1">
  <div class="container">
   <div class="row">
     
    <h4>Triton is well set to provide a transforming experience for students under the new management.
    The college is on full swing to adapt to all modernities of the fast changing world.</h4>

  </div>
</div>
</div>
</div>

<?php
include('footer.php');
?>