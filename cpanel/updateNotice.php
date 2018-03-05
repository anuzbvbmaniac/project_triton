<?php 
session_start();
if (!isset($_SESSION['user_logged'])){
	header('Location:index.php?loginfirst=yes');
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
        <title>Triton - Notice > Update Notice</title>
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
<?php 

if(isset($_GET['file']))
{
	?>
	<script type="text/javascript">

		alert("Invalid File Format selected..!!!");
	</script>
	<?php
}
require_once('../connection.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query_check = "SELECT * FROM tbl_notice WHERE notice_id='$id'";
	$result = $conn->query( $query_check );
	while($data = $result->fetch_array())
	{
		?>
			<body>

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
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="menu-icon fa fa-id-card"></i><span>Faculty</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="plusTwoStream.php">+2</a></li>
                                    <li><a href="bachelorFaculty.php">Bachelor</a></li>
                                    <li><a href="masterFaculty.php">Master</a></li>
                                </ul>
                            </li>
                            <!--Medias-->
                            <li class="">
                                <a href="javascript:void(0);">
                                    <i class="menu-icon fa fa-image"></i><span>Medias</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li class=""><a class="" href="adBanner.php">Ad-Setting</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="sliderImage/.php">Slider Images</a></li>
                                </ul>
                            </li>
                            <!--News And Notices-->
                            <li class="active-page">
                                <a href="javascript:void(0);">
                                    <i class="menu-icon fa fa-newspaper-o"></i><span>News & Notices</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="news.php">News</a></li>
                                    <li><a class="active"  href="notice.php">Notices</a></li>
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
                        <h3 class="breadcrumb-header">Notice > Update Notice<i class="fa"></i></h3>
                    </div>
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-white">
				<form lpformnum="1" method="POST" enctype = "multipart/form-data">
					<fieldset>
						<legend>Update Notice</legend>

						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $data['notice_id']?>"/>
							<input type="hidden" name="oldFile" value="<?php echo $data['notice_file']?>"/>

							<label for="exampleInputEmail1">Notice Title</label>
							<input type="text" required="required" name="title" class="form-control" id="" aria-describedby="" value="<?php echo $data['notice']; ?>">

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Notice Content</label>
							<textarea cols="30" rows="5" type="text" required="required" name="notice_content" class="form-control" id="" aria-describedby=""  ><?php echo $data['notice_content']; ?></textarea>

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Notice For(Level)</label>
							<select class="form-control" name="level">
								<option disabled >Select..</option>
								<?php
								$query_check = "SELECT * FROM tbl_level";
								$result = $conn->query( $query_check );
								while($row = $result->fetch_array())
								{
									?>
									<option value="<?php echo $row['level_id']?>" <?php if( $data['notice_for']==$row['level_id']) echo 'selected="selected"';?>><?php echo $row['level_name']?></option>
									<?php
								}
								?>
							</select>

						</div>

						<div class="form-group">
							<label for="exampleInputFile">File Attached</label>
							<input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							<small id="fileHelp" class="form-text text-muted">If there is any file attached with notice (i.e.image), Upload from here.</small>
						</div>

					</fieldset>
					<button type="submit" name="update" class="btn btn-primary">Update</button>
				</fieldset>
			</form>
								</div>
									</div>
								</div>
							</div>
							<div class="page-footer">
                  <style>
                     .namawebaAnuz:hover{
                     color: gold;
                     }
                  </style>
                  <p>Made with <i class="fa fa-heart red-color"></i> by <a target="_blank" class="namawebaAnuz" href="https://www.linkedin.com/in/anuz-pandey123">Anuz Pandey</a></p>
               </div>
						</div>
				</div>
		</div>
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
}
}
?>
<?php 

if(isset($_POST['update'])){
	
	$noticeTitle = $_POST['title'];	
	$level = $_POST['level'];	
	$noticeContent = $_POST['notice_content'];	
	$id=$_POST['id'];
	
	if($_FILES['file']['name'] == TRUE){
		$oldFile=$_POST['oldFile'];

		$fname = $_FILES['file']['name'];
		$ext = pathinfo($fname, PATHINFO_EXTENSION);
		$date= date('Y=m-d H:i:s');

		$new_name = md5(uniqid($date,true))."_Trinton.".$ext;

		if($ext=='gif'|| $ext =='png' || $ext=='jpg' || $ext=='pdf' || $ext=='docx' || $ext=='txt' || $ext=='pptx' || $ext=='xlsx'){

			move_uploaded_file($_FILES['file']['tmp_name'],'noticeFiles/'.$new_name);

			unlink("noticeFiles/".$oldFile);

			$insert= "UPDATE tbl_notice SET notice='$noticeTitle', notice_content='$noticeContent', notice_for='$level', notice_file='$new_name' WHERE notice_id='$id'";

			$conn->query($insert);

			header("location:notice.php?update=success");
		}else{
			header("location:updateNotice.php?file=fail");
		}
	}else{
		$insert= "UPDATE tbl_notice SET notice='$noticeTitle', notice_content='$noticeContent', notice_for='$level' WHERE notice_id='$id'";
		$conn->query($insert);
		header("location:notice.php?update=success");
	}

}
?>