<?php
include('header.php');
?>
<div class="about">

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
       <span class="welcome">
         About Us
       </span><br>
       <?php
       require_once('../../connection.php');
       $query_check = "SELECT * FROM tbl_aboutus WHERE abt_id=1";
       $result = $conn->query( $query_check );
       $data = $result->fetch_array();
       ?>
       <p class="about-p"><?php echo $data['about_us_text']?></p>
       
     </div>
     
     <div class="col-lg-6">
       <img src="../../administration/aboutUsImage/<?php echo $data['featured_image']?>" class="about-img">
     </div>
   </div>
 </div>
 <div class="about-1">
  <div class="container">
   <div class="row">

    <h3>Triton is well set to provide a transforming experience for students under the new management.
    The college is on full swing to adapt to all modernities of the fast changing world.</h3>

  </div>
</div>
</div>
<?php
include('footer.php');
?>