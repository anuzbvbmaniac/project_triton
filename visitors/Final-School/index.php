<?php
include('header.php');
?>
<!--Carousel 3 Images-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>

	</ol>
	<div class="carousel-inner">
		<?php
		require_once('../../connection.php');
		$query_check = "SELECT * FROM tbl_sliderImage WHERE level_image=1 AND image_id=1";
		$result = $conn->query( $query_check );
		$data=$result->fetch_array();
		?>
		<div class="item active"> <img src="../../administration/sliderImage/<?php echo $data['image_name']?>" alt="First slide"> </div> 
		<?php
		$query_check = "SELECT * FROM tbl_sliderImage WHERE level_image=1 AND image_id=2";
		$result = $conn->query( $query_check );
		$data1=$result->fetch_array();
		?>

		<div class="item"> <img src="../../administration/sliderImage/<?php echo $data1['image_name']?>" alt="Second slide"> </div>
		<?php
		$query_check = "SELECT * FROM tbl_sliderImage WHERE level_image=1 AND image_id=3";
		$result = $conn->query( $query_check );
		$data2=$result->fetch_array();
		?>
		<div class="item"> <img src="../../administration/sliderImage/<?php echo $data2['image_name']?>" alt="Third slide"> </div>

	</div>
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"> </span>
	</a>
</div>
<!--School Information Section-->
<div class="info">
	<div class="container">

		<div class="row">
			<?php
			$query_check = "SELECT * FROM tbl_activities";
			$result = $conn->query( $query_check );
			while($data=$result->fetch_array()){
				?>
				<div class="col-md-4 text-center">
					<div class="contain"> <img src="../../administration/activityImage/<?php echo $data['icon']?>">
						<h3><?php echo $data['activity']?></h3>
						<p><?php echo $data['activity_detail']?></p>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<div class="about"> <img src="img/header__bottom.png" class="cloud1">
	<div class="container">
		<div class="row">
			<div class="col-lg-6"> <span class="welcome"> Welcome </span><br>
				<?php
				$query_check = "SELECT * FROM tbl_wlcmMsg WHERE msg_id=1";
				$result = $conn->query( $query_check );
				$data = $result->fetch_array();
				?>
				<p class="about-p"><?php echo $data['msg']?> </p>
				<button  type="button" class="btn btn-primary btn-lg"><a href="about.php">Read More</a></button>
			</div>
			<div class="col-lg-6"> <img src="../../administration/welcomeMessageImage/<?php echo $data['image']?>" class="about-img"> </div>
		</div>
	</div>
	<img src="img/header__top.png" class="cloud2"> </div>
	<div class="news">
		<div class="container">
			<h1>News and Notices</h1>
			<div class="row">
				<?php
				$query_check = "SELECT * FROM tbl_news WHERE news_level=1 LIMIT 4";
				$result = $conn->query( $query_check );
				while($data=$result->fetch_array()){
					?>
					<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
						<div class="card h-100"> <a href="news.php"><img class="card-img-top" src="../../administration/newsImage/<?php echo $data['featured_image']?>" alt=""></a>
							<div class="card-body">
								<h4 class="card-title"> <a href="news.php" class="news-title"><?php echo $data['news_heading']?></a> </h4>
								<p class="card-text"><?php echo $data['news_content']?></p>
								<a href="news.php" class="news-link">Read More...</a> </div>
							</div>
						</div>
						<?php
					}
					?>
					<a href="news.php"><button type="button"  class="btn btn-primary btn-lg">View More</button></a>
				</div>
			</div>
		</div>
		<div class="facilities">
			<div class="container">
				<div class="circle"> </div>
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<h1>Gallery</h1>
					<?php
					$query_check = "SELECT * FROM tbl_gallery WHERE image_in=1 LIMIT 8";
					$result = $conn->query( $query_check );
					while($data=$result->fetch_array()){
						?>
						<div class="col-lg-3 col-sm-4 col-xs-6"><a title="<?php echo $data['description']?>" href="#"><img class="thumbnail img-responsive" src="../../administration/gallery/<?php echo $data['image_name']?>"></a></div>
						<?php
					}
					?>
					<a href="gallery.php"><button type="button" class="btn btn-primary btn-lg">View More..</button></a>
					<hr>
					<hr>
				</div>
			</div>
			<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" type="button" data-dismiss="modal">×</button>
							<h3 class="modal-title">Heading</h3>
						</div>
						<div class="modal-body"> </div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="enroll">
			<div class="container">
				<div class="row">
					<h2>Enroll Your Child With us</h2>
					<a href="contact.php"><button class="btn btn-default" data-dismiss="modal">Contact Us</button></a>
				</div>
			</div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0206442784583!2d85.34353587182184!3d27.685756814593866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94dbf4c89dc33ceb!2sTriton+Int&#39;l+Sec.+School!5e0!3m2!1sen!2snp!4v1504548007392" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<?php
		include('footer.php');
		?>