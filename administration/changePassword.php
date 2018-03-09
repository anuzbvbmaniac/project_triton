<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Triton School, College">
    <meta name="keywords" content="Triton">
    <meta name="author" content="Anuz Pandey">
    <!-- Title -->
    <title>Triton - Admin Dashboard</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/plugins/icomoon/style.css" rel="stylesheet">
    <link href="../assets/plugins/uniform/css/default.css" rel="stylesheet" />
    <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
    <!-- Theme Sty -->
    <link href="../assets/css/triton.css" rel="stylesheet">
    <link href="../assets/css/themes/admin.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <script type="text/javascript">
        function checkPassword() {
        			var password = document.getElementById( 'cpassword' ).value;
        			var req;
        			if ( window.XMLHttpRequest ) {
        				req = new XMLHttpRequest();
        
        			} else req = new ActiveXObject( "Microsoft.XMLHTTP" );
        			req.onreadystatechange = function () {
        				if ( req.readyState == 4 ) {
        					document.getElementById( 'displaydiv' ).innerHTML = req.responseText;
        					document.getElementById( 'btnChange' ).disabled = true;
        					if ( req.responseText == "<span class='fa fa-check' style='color:#00A41E;'></span> Password Match" ) {
        						document.getElementById( 'btnChange' ).disabled = false;
        					}
        
        				}
        
        			}
        			req.open( "GET", "checkPassword.php?key=" + password, true )
        			req.send();
        		}
    </script>
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
                        <li>
                            <a href="javascript:void(0);">
                                    <i class="menu-icon fa fa-image"></i><span>Medias</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                            <ul class="sub-menu">
                                <li><a href="adBanner.php">Ad-Setting</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
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
                            <a href="welcomeMessage.php">
                        <i class="menu-icon fa fa-envelope"></i><span>Welcome Message</span>
                        </a>
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
                    <h3 class="breadcrumb-header">Change Password</h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div id="rootwizard">

                                        <form method="post" id="passwordForm" action="checkPassword.php" method="POST">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Current Password</label>
                                                                    <input type="password" onkeyup="checkPassword()" class="form-control" name="cpassword" id="cpassword" placeholder="Current Password" required="required" autocomplete="off">
                                                                    <div class="col-sm-12" id="displaydiv">

                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">New Password</label>
                                                                    <input type="password" class="form-control" name="password1" id="password1" placeholder="New Password" required="required" autocomplete="off">
                                                                    <div class="" style="">
                                                                        <div class="col-sm-6">
                                                                            <span id="8char" class="fa fa-close" style="color:#FF0004;"></span> 8 Characters Long<br>
                                                                            <span id="ucase" class="fa fa-close" style="color:#FF0004;"></span> One Uppercase Letter
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <span id="lcase" class="fa fa-close" style="color:#FF0004;"></span> One Lowercase Letter<br>
                                                                            <span id="num" class="fa fa-close" style="color:#FF0004;"></span> One Number
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Repeat Password</label>
                                                                    <input type="password" class="form-control" required="required" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
                                                                    <div class="col-sm-12">
                                                                        <span id="pwmatch" class="fa fa-close" style="color:#FF0004;"></span> Passwords Match
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <input id="btnChange" name="changePassword" type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3>Information</h3>
                                                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Etiam rhoncus.
                                                                Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
                                                                nec odio et ante tincidunt tempus.</p>
                                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </form>
                                    </div>
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
    <script type="text/javascript">
		
		$("input[name=password1]").keyup(function(){
			
			var ucase = new RegExp("[A-Z]+");
			var lcase = new RegExp("[a-z]+");
			var num = new RegExp("[0-9]+");

			if($("#password1").val().length >= 8){
				$("#8char").removeClass("fa-close");
				$("#8char").addClass("fa-check");
				$("#8char").css("color","#00A41E");
			}else{
				$("#8char").removeClass("fa-check");
				$("#8char").addClass("fa-close");
				$("#8char").css("color","#FF0004");
			}

			if(ucase.test($("#password1").val())){
				$("#ucase").removeClass("fa-close");
				$("#ucase").addClass("fa-check");
				$("#ucase").css("color","#00A41E");
			}else{
				$("#ucase").removeClass("fa-check");
				$("#ucase").addClass("fa-close");
				$("#ucase").css("color","#FF0004");
			}

			if(lcase.test($("#password1").val())){
				$("#lcase").removeClass("fa-close");
				$("#lcase").addClass("fa-check");
				$("#lcase").css("color","#00A41E");
			}else{
				$("#lcase").removeClass("fa-check");
				$("#lcase").addClass("fa-close");
				$("#lcase").css("color","#FF0004");
			}

			if(num.test($("#password1").val())){
				$("#num").removeClass("fa-close");
				$("#num").addClass("fa-check");
				$("#num").css("color","#00A41E");
			}else{
				$("#num").removeClass("fa-check");
				$("#num").addClass("fa-close");
				$("#num").css("color","#FF0004");
			}

			if($("#password1").val() == $("#password2").val()){
				$("#pwmatch").removeClass("fa-close");
				$("#pwmatch").addClass("fa-check");
				$("#pwmatch").css("color","#00A41E");
			}else{
				$("#pwmatch").removeClass("fa-check");
				$("#pwmatch").addClass("fa-close");
				$("#pwmatch").css("color","#FF0004");
			}
		});

		$("input[name=password2]").keyup(function(){
			
			var ucase = new RegExp("[A-Z]+");
			var lcase = new RegExp("[a-z]+");
			var num = new RegExp("[0-9]+");

			if($("#password1").val().length >= 8){
				$("#8char").removeClass("fa-close");
				$("#8char").addClass("fa-check");
				$("#8char").css("color","#00A41E");
			}else{
				$("#8char").removeClass("fa-check");
				$("#8char").addClass("fa-close");
				$("#8char").css("color","#FF0004");
			}

			if(ucase.test($("#password1").val())){
				$("#ucase").removeClass("fa-close");
				$("#ucase").addClass("fa-check");
				$("#ucase").css("color","#00A41E");
			}else{
				$("#ucase").removeClass("fa-check");
				$("#ucase").addClass("fa-close");
				$("#ucase").css("color","#FF0004");
			}

			if(lcase.test($("#password1").val())){
				$("#lcase").removeClass("fa-close");
				$("#lcase").addClass("fa-check");
				$("#lcase").css("color","#00A41E");
			}else{
				$("#lcase").removeClass("fa-check");
				$("#lcase").addClass("fa-close");
				$("#lcase").css("color","#FF0004");
			}

			if(num.test($("#password1").val())){
				$("#num").removeClass("fa-close");
				$("#num").addClass("fa-check");
				$("#num").css("color","#00A41E");
			}else{
				$("#num").removeClass("fa-check");
				$("#num").addClass("fa-close");
				$("#num").css("color","#FF0004");
			}

			if($("#password1").val() == $("#password2").val()){
				$("#pwmatch").removeClass("fa-close");
				$("#pwmatch").addClass("fa-check");
				$("#pwmatch").css("color","#00A41E");
				document.getElementById('btnChange').disabled = false;
			}else{
				$("#pwmatch").removeClass("fa-check");
				$("#pwmatch").addClass("fa-close");
				$("#pwmatch").css("color","#FF0004");
				document.getElementById('btnChange').disabled = true;

			}
		});
	</script>
</body>

</html>