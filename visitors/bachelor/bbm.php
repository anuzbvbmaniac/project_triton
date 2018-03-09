<?php
include('header.php');
require_once('../../connection.php');
$query_check = "SELECT * FROM tbl_bachelorFaculty WHERE faculty='BBM'";
$result = $conn->query( $query_check );
$data = $result->fetch_array();
?>
<div class="image"> <img src="../../administration/bachelorFacultyImage/<?php echo $data['featured_image']?>"> </div>
<div class="about">
  <div class="container">
    <div class="row">
      <h2><?php echo $data['faculty']?></h2>
      <p><?php echo $data['description']?></p>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>