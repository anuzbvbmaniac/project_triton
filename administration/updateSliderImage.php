<?php 
session_start();
require_once('../connection.php');

if (!isset($_SESSION['user_logged'])){
	header('Location:index.php?loginfirst=yes');
}
if(isset($_POST['update'])){

   $id=$_POST['id'];
   
   $oldFile=$_POST['oldFile'];

   $fname = $_FILES['file']['name'];
   $ext = pathinfo($fname, PATHINFO_EXTENSION);
   $date= date('Y=m-d H:i:s');

   $new_name = md5(uniqid($date,true))."_Triton.".$ext;

   if($ext=='gif'|| $ext =='png' || $ext=='jpg'){

      move_uploaded_file($_FILES['file']['tmp_name'],'sliderImage/'.$new_name);

      unlink("sliderImage/".$oldFile);

      $update= "UPDATE tbl_sliderimage SET  image_name='$new_name' WHERE image_id='$id'";

      $conn->query($update);

      header("location:sliderImage.php?update=success");
   }else{
      header("location:updateSliderImage.php?file=fail");
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Triton School, College">
   <meta name="keywords" content="Triton">
   <meta name="author" content="Anuz Pandey">
   <!-- Title -->
   <title>Triton - Slider Image</title>
   <!-- Styles -->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
   <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <link href="../assets/plugins/icomoon/style.css" rel="stylesheet">
   <link href="../assets/plugins/uniform/css/default.css" rel="stylesheet"/>
   <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
   <link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
   <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
   <link href="../assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
   <link href="../assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet" type="text/css"/>
   <!-- Theme Sty -->
   <link href="../assets/css/triton.css" rel="stylesheet">
   <link href="../assets/css/themes/admin.css" rel="stylesheet">
   <link href="../assets/css/custom.css" rel="stylesheet">
</head>
<body>
   <?php 

   if(isset($_GET['file']))
   {
     ?>
     <script type="text/javascript">

       alert("Invalid File Format selected..!!!");
    </script>
    <?php
 }
 if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query_check = "SELECT * FROM tbl_sliderImage WHERE image_id='$id'";
  $result = $conn->query( $query_check );
  while($data = $result->fetch_array())
  {
    ?>
    <!-- Page Container -->
    <div class="page-container">
      <!-- Page Sidebar -->
      
      <!-- /Page Sidebar -->
      <!-- Page Content -->
      <style>
      .page-content{
         width: 100% !important;
      }
   </style>
   <div class="page-content">
      <!-- Page Header -->
      <div class="page-header">
         <!--Search Form-->
         <div class="search-form">
            <form action="#" method="GET">
               <div class="input-group">
                  <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                  <span class="input-group-btn">
                     <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                  </span>
               </div>
            </form>
         </div>
         <!--// search form-->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <div class="logo-sm">
                     <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                     <a class="logo-box" href="index.html"><span>Triton</span></a>
                  </div>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <i class="fa fa-angle-down"></i>
                  </button>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </div>
      <!-- /Page Header -->
      <!-- Page Inner -->
      
      <div class="page-inner">
         <div class="page-title">
           <a class="btn btn-danger" href="sliderImage.php">  BACK</a>
           <h3 class="breadcrumb-header">Change Slider Image <i class="fa fa-image"></i></h3>
        </div>
        <div id="main-wrapper">
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-white">
                  <div class="panel-heading clearfix">
                     <h4 class="panel-title">Slider Photo</h4>
                  </div>

                  <div class="panel-body">
                     <form lpformnum="1" method="POST" enctype = "multipart/form-data">
                        <div class="form-group">
                         <input type="hidden" name="id" value="<?php echo $data['image_id']?>"/>
                         <input type="hidden" name="oldFile" value="<?php echo $data['image_name']?>"/>
                         
                         <input type="file" name="file" required="required" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                         <small id="fileHelp" class="form-text text-muted">You can change slider photo anytime with any image file .</small>
                      </div>
                      <button type="submit" name="update" class="btn btn-primary">Update</button>
                      
                   </form>
                </div>
             </div>
          </div>
       </div>
       <!-- Row -->
    </div>
    <!-- Main Wrapper -->
    <div class="page-footer">
      <style>
      .namawebaAnuz:hover {
         color: gold;
         transition: 0.5s ease;
      }
   </style>
   <p>Made with <i class="fa fa-heart red-color"></i> by <a target="_blank" class="namawebaAnuz" href="https://www.linkedin.com/in/anuj-pandey-832620138/">Anuz Pandey</a>
   </p>
</div>
</div>
<!-- /Page Inner -->
</div>
<!-- /Page Content -->
</div>
<?php
}
}
?>
<!-- /Page Container -->
<!-- Javascripts -->
<script src="../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
<script src="../assets/plugins/switchery/switchery.min.js"></script>
<script src="../assets/plugins/dropzone/dropzone.min.js"></script>
<script src="../assets/plugins/plupload/js/plupload.full.min.js"></script>
<script src="../assets/plugins/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
<script src="../assets/js/triton.js"></script>
<script src="../assets/js/pages/form-file-upload.js"></script>
</body>
</html>
<?php 


?>