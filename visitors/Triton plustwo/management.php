<?php
include('header.php');

require_once('../../connection.php');
$query_check = "SELECT * FROM tbl_plusTwoStream WHERE stream_name='Management'";
$result = $conn->query( $query_check );
$data = $result->fetch_array();

?>
<div class="about">
  <div class="container">
    <div class="row">
      <h1 class="about-us">
       Management
     </h1>
     <div class="col-lg-6">
       <br>
       <p class="about-p"><?php echo $data['description']?></p>

     </div>

     <div class="col-lg-6">
       <img src="../../administration/plusTwoStreamImage/<?php echo $data['featured_image']?>" class="about-img">
     </div>
   </div>
 </div>

</div>


<?php
include('footer.php');
?>