<?php
include('header.php');
require_once('../../connection.php');
$query_check = "SELECT * FROM tbl_gallery WHERE image_in=1";
$result = $conn->query( $query_check );
$data = $result->fetch_array();
if (empty($data)){
  ?>
  <div class="news-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-6">
          <h3>No Photo Posted Yet.</h3>
        </div>
      </div>
    </div>
  </div>
  <?php
}else{


  ?>
  <div class="gallery">
   <div class="container">

    <div class="row">
     <?php
     $query_check = "SELECT * FROM tbl_gallery WHERE image_in=1";
     $result = $conn->query( $query_check );
     while($data=$result->fetch_array()){
      ?>
      <div class="col-lg-3 col-sm-4 col-xs-6">
        <a title="<?php echo $data['description']?>" href="#"><img class="thumbnail img-responsive" src="../../administration/gallery/<?php echo $data['image_name']?>"></a>
      </div>
      <?php
    }
    ?>
  </div>
  
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <button class="close" type="button" data-dismiss="modal">×</button>
       <h3 class="modal-title">Heading</h3>
     </div>
     <div class="modal-body">
     </div>
     <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
<?php

}
include('footer.php');
?>