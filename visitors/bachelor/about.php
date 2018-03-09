<?php
include('header.php');
?>
  <?php
     require_once('../../connection.php');
     $query_check = "SELECT * FROM tbl_aboutus WHERE abt_id=3";
     $result = $conn->query( $query_check );
     $data = $result->fetch_array();
     ?>
<div class="image">
	<img src="../../administration/aboutUsImage/<?php echo $data['featured_image']?>">
</div>

<div class="about">
	<div class="container">
		<div class="row">
			<h2>ABOUT US</h2>
			
			<p><?php echo $data['about_us_text']?></p>
			
		</div>
	</div>
</div>

<?php
include('footer.php');
?>