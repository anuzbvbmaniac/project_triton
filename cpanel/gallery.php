<?php 
session_start();
if (!isset($_SESSION['user_logged'])){
	header('Location:index.php?loginfirst=yes');
}

require_once('../connection.php');

if(isset($_POST['post'])){
	
	$level = $_POST['level'];	
	
	if($_FILES['file1']['name'] == TRUE){

		$fname1 = $_FILES['file1']['name'];
		$description1 = $_POST['description1'];

		$ext = pathinfo($fname1, PATHINFO_EXTENSION);
		$date= date('Y=m-d H:i:s');

		$new_name1 = md5(uniqid($date,true))."_Triton.".$ext;

		if($ext=='gif'|| $ext =='png' || $ext=='jpg'){

			move_uploaded_file($_FILES['file1']['tmp_name'],'gallery/'.$new_name1);

			
			$insert= "INSERT INTO tbl_gallery (image_id, image_name, description, image_in) VALUES (NULL, '$new_name1', '$description1', '$level')";
			$conn->query($insert);

			header("location:gallery.php?upload=success");
		}else{
			header("location:gallery.php?file=fail");
		}
	}

	if($_FILES['file2']['name'] == TRUE){

		$fname2 = $_FILES['file2']['name'];
		$description2 = $_POST['description2'];

		$ext2 = pathinfo($fname2, PATHINFO_EXTENSION);
		$date= date('Y=m-d H:i:s');

		$new_name2 = md5(uniqid($date,true))."_Triton.".$ext2;

		if($ext2=='gif'|| $ext2 =='png' || $ext2=='jpg'){

			move_uploaded_file($_FILES['file2']['tmp_name'],'gallery/'.$new_name2);

			
			$insert2= "INSERT INTO tbl_gallery (image_id, image_name, description, image_in) VALUES (NULL, '$new_name2', '$description2', '$level')";
			$conn->query($insert2);

			header("location:gallery.php?upload=success");
		}else{
			header("location:gallery.php?file=fail");
		}
	}

	if($_FILES['file3']['name'] == TRUE){

		$fname3 = $_FILES['file3']['name'];
		$description3 = $_POST['description3'];

		$ext3 = pathinfo($fname3, PATHINFO_EXTENSION);
		$date= date('Y=m-d H:i:s');

		$new_name3 = md5(uniqid($date,true))."_Triton.".$ext3;

		if($ext3=='gif'|| $ext3 =='png' || $ext3=='jpg'){

			move_uploaded_file($_FILES['file3']['tmp_name'],'gallery/'.$new_name3);

			
			$insert3= "INSERT INTO tbl_gallery (image_id, image_name, description, image_in) VALUES (NULL, '$new_name3', '$description3', '$level')";
			$conn->query($insert3);

			header("location:gallery.php?upload=success");
		}else{
			header("location:gallery.php?file=fail");
		}
	}

	if($_FILES['file4']['name'] == TRUE){

		$fname4 = $_FILES['file4']['name'];
		$description4 = $_POST['description1'];

		$ext4 = pathinfo($fname4, PATHINFO_EXTENSION);
		$date= date('Y=m-d H:i:s');

		$new_name4 = md5(uniqid($date,true))."_Triton.".$ext4;

		if($ext4=='gif'|| $ext4 =='png' || $ext4=='jpg'){

			move_uploaded_file($_FILES['file4']['tmp_name'],'gallery/'.$new_name4);

			
			$insert4= "INSERT INTO tbl_gallery (image_id, image_name, description, image_in) VALUES (NULL, '$new_name4', '$description4', '$level')";
			$conn->query($insert4);

			header("location:gallery.php?upload=success");
		}else{
			header("location:gallery.php?file=fail");
		}
	}

}

?>


<?php 

if(isset($_GET['file']))
{
	?>
	<script type="text/javascript">

		alert("Invalid File Format selected..!!!");
	</script>
	<?php
}
if(isset($_GET['upload']))
{
	?>
	<script type="text/javascript">

		alert("Photo Uploaded successfully !!!");
	</script>
	<?php
}
if(isset($_GET['update']))
{
	?>
	<script type="text/javascript">

		alert("Details Updated successfully !!!");
	</script>
	<?php
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
    <title>Triton - Gallery Images</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/plugins/icomoon/style.css" rel="stylesheet">
    <link href="../assets/plugins/uniform/css/default.css" rel="stylesheet" />
    <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
    <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="../assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet" type="text/css" />
    <!-- Theme Sty -->
    <link href="../assets/css/triton.css" rel="stylesheet">
    <link href="../assets/css/themes/admin.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
</head>

<body>

    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar">
            <a class="logo-box" href="index.html">
            <span>Triton</span>
            <i class="fa fa-lock"></i>
            </a>
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li>
                            <a href="dashboard.php">
                        <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                        </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);">
                                    <i class="menu-icon fa fa-id-card"></i><span>Faculty</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                            <ul class="sub-menu">
                                <li><a href="plusTwoStream.php">+2</a></li>
                                <li class=""><a href="bachelorFaculty.php">Bachelor</a></li>
                                <li><a href="masterFaculty.php">Master</a></li>
                            </ul>
                        </li>
                        <!--Medias-->
                        <li class="active-page">
                            <a href="javascript:void(0);">
                                    <i class="menu-icon fa fa-image"></i><span>Medias</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                            <ul class="sub-menu">
                                <li><a href="adBanner.php">Ad-Setting</a></li>
                                <li><a class="active" href="gallery.php">Gallery</a></li>
								<li><a href="sliderImage.php">Slider Images</a></li>
                            </ul>
                        </li>
                        <!--News And Notices-->
                        <li>
                            <a href="javascript:void(0);">
                                    <i class="menu-icon fa fa-newspaper-o"></i><span>News & Notices</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                            <ul class="sub-menu">
                                <li><a href="news.php">News</a></li>
                                <li><a href="notice.php">Notices</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="activity.php">
                        <i class="menu-icon fa fa-play"></i><span>Activity</span>
                        </a>
                        </li>


                        </li>
                        <li>
                            <a href="aboutUs.php">
                        <i class="menu-icon fa fa-adn"></i><span>About Us</span>
                        </a>
                        </li>
                        <li>
                            <a href="feedback.php">
                        <i class="menu-icon fa fa-feed"></i><span>Feedback</span>
                        </a>
                        </li>

                        <li class="menu-divider"></li>
                        <li>
                            <a href="#">
                        <i class="menu-icon icon-help_outline"></i><span>Documentation</span>
                        </a>
                        </li>
                        <li>
                            <a href="#">
                        <i class="menu-icon icon-public"></i><span>Changelog</span><span class="label label-danger">1.0</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
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
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                </li>
                                <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                                <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                    <ul class="dropdown-menu dropdown-lg dropdown-content">
                                        <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                        <li class="slimscroll dropdown-notifications">
                                            <ul class="list-unstyled dropdown-oc">
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-check"></i></span>
                                       <span class="notification-info">Finished uploading Triton Project <b>"Triton Project"</b>.
                                          <small class="notification-date">20:00</small>
                                       </span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/admin.png" alt="" class="img-circle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile</a>
                                        </li>
                                        <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="changePassword.php">Account Settings</a>
                                        </li>
                                        <li><a href="logout.php">Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
            <!-- /Page Header -->
            <!-- Page Inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Uploaded Images || Gallery <i class="fa"></i></h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                        <div class="col-md-8 panel panel-white">
                            <div class="profile-timeline">
                                <ul class="list-unstyled">
			<?php 

			$query_check = "SELECT * FROM tbl_gallery AS g, tbl_level AS l WHERE l.level_id=g.image_in";
			$result = $conn->query( $query_check );
			?>
									
													<?php
				$counter = 0;
				while($data = $result->fetch_array())
				{
					?>
                                        <li class="timeline-item col-md-6">
                                            <div class="panel panel-white">
                                                <div class="panel-body">
                                                    <div class="timeline-item-header">

                                                            <p>
                                                                <?php echo ++$counter; ?>
                                                            </p>

                                                           <!-- <small>Date</small>-->
                                                    </div>
													<img style="max-height: 135px;" class="img-responsive" src='gallery/<?php echo $data['image_name']; ?>'  alt="Image Unavailable"/>

                                                    <div class="timeline-item-post">
                                                        <p>
                                                            <?php echo $data['description'] ?>
                                                        </p>
                                                        <div class="timeline-options">
                                                            <a><i class="fa fa-building"></i><?php echo  $data['level_name']; ?></a>


                                                        </div>

                                                    </div>
                                                </div>
						<!-- <a href="delete.page?" >Delete</a> -->
						<script type="text/javascript">
							function confirmDelete(delUrl) {
								if (confirm("Are you sure you want to delete this Photo ?")) {
									document.location = delUrl;
								}
							}
						</script>
                                                <a class="btn btn-danger" href="javascript:confirmDelete('deletePhoto.php?id=<?php echo $data['image_id']; ?>')">DELETE</a>
							<a  class="btn btn-success pull-right" href="updatePhoto.php?id=<?php echo $data['image_id']; ?>" >UPDATE</a>
                                            </div>
                                        </li>
														<?php
				}
				?>




                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Upload Images</h4>
                                </div>



                                <div class="panel-body">
                                    <form lpformnum="1" method="POST" enctype = "multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Level</label>

											<select class="form-control" name="level">
												<option disabled selected>Select..</option>
												<?php
												$query_check = "SELECT * FROM tbl_level";
												$result = $conn->query( $query_check );
												while($data = $result->fetch_array())
												{
													?>
													<option value="<?php echo $data['level_id']?>"><?php echo $data['level_name']?></option>
													<?php
												}
												?>
											</select>

                                        </div>

                                        <div class="form-group">
											<label for="exampleInputFile">Image 1</label>
											<input type="file" name="file1" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required="required">
											<small id="fileHelp" class="form-text text-muted">Choose Photo to upload to gallery of webpage.</small>
										</div>
										
				<div class="form-group">
					<label for="exampleInputEmail1">Image 1 - Description</label>
					<input type="text" required="required" name="description1" class="form-control" maxlength="35" placeholder="Image Desription Here" maxlength="35" >
				</div>
				
				<div class="form-group">
					<label for="exampleInputFile">Image 2</label>
					<input type="file" name="file2" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					<small id="fileHelp" class="form-text text-muted">Choose Photo to upload to gallery of webpage.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Image 2 - Description</label>
					<input type="text"  name="description2" class="form-control" id="" aria-describedby="" placeholder="Image Desription Here" maxlength="35" >
				</div>

				<div class="form-group">
					<label for="exampleInputFile">Image 3</label>
					<input type="file" name="file3" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					<small id="fileHelp" class="form-text text-muted">Choose Photo to upload to gallery of webpage.</small>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Image 3 - Description</label>
					<input type="text"  name="description3" class="form-control" id="" aria-describedby="" placeholder="Image Desription Here" maxlength="35" >
				</div>

				<div class="form-group">
					<label for="exampleInputFile">Image 4</label>
					<input type="file" name="file4" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					<small id="fileHelp" class="form-text text-muted">Choose Photo to upload to gallery of webpage.</small>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Image 4 - Description</label>
					<input type="text"  name="description4" class="form-control" id="" aria-describedby="" placeholder="Image Desription Here" maxlength="35" >

				</div>

                                        <button type="submit" name="post" class="btn btn-primary">Post</button>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <!-- Row -->
                    </div>
                    <!-- Main Wrapper -->
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
        </div>
        <!-- /Page Content -->
    </div>
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