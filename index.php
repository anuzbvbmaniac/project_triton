<!DOCTYPE HTML>

<html>
<head>
<title>TRITON</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/index.css"/>
</head>
<body onLoad="openNav()">

<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <?php 
  require_once('connection.php');
  $query_check = "SELECT * FROM tbl_banner";
  $result = $conn->query( $query_check );
  $data = $result->fetch_array();
  $file=$data['banner_file'];
     ?>
		<img src="images/<?php echo $file; ?>" alt="">
  </div>

</div>

<div class="accomodation">
  <div class="wrapper">
    <div class="info-sec1 middle">
      <h3> <img width="300px" src="images/triton-international.png" alt=""> </h3>
      <div class="wrapper-inner">


        <div class="block-3">
          <div class="hovereffect"> <span class="hover1"> <img src="images/1.schl.png" class="responsive height-fixed" alt="School Wepage">
            <div class="overlay">
              <h2>School</h2>
              <a class="info" href="visitors/Final-School/index.php" target="_blank"> Visit Page </a> </div>
            </span> </div>
        </div>
        
        <div class="block-3">
          <div class="hovereffect"> <span class="hover1"> <img src="images/2.plus2.png" class="responsive height-fixed" alt="Plus Two Wepage">
            <div class="overlay">
              <h2>High School</h2>
              <a class="info" href="visitors/Triton plustwo/index.php" target="_blank"> Visit Page </a> </div>
            </span> </div>
        </div>

        <div class="block-3">
          <div class="hovereffect"> <span class="hover1"> <img src="images/3.bachelor.png" class="responsive height-fixed" alt="Bachelor Wepage">
            <div class="overlay">
              <h2>Bachelor</h2>
              <a class="info" href="visitors/bachelor/index.php" target="_blank"> Visit Page </a> </div>
            </span> </div>
        </div>
        
        <div class="block-3">
          <div class="hovereffect"> <span class="hover1"> <img src="images/4.master.png" class="responsive height-fixed" alt="Masters Wepage">
            <div class="overlay">
              <h2>MASTER</h2>
              <a class="info" href="visitors/Master/index.php" target="_blank"> Visit Page </a> </div>
            </span> </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}	
</script>
</body>
</html>
<?php 	
 ?>