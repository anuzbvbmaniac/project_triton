<?php
include('header.php');
require_once('../../connection.php');
$query_check = "SELECT * FROM tbl_news WHERE news_level=1";
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
					<h3>No News Posted Yet.</h3>
				</div>
			</div>
		</div>
	</div>
	<?php
}else{
	$query_check = "SELECT * FROM tbl_news WHERE news_level=1";
	$result = $conn->query( $query_check );
	while($data=$result->fetch_array()){
		?>
		<div class="news-section">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-6"><img class="" src="../../cpanel/newsImage/<?php echo $data['featured_image']?>" alt="Image Unavailable"> </div>
					
					<div class="col-lg-6">
						<h3><?php echo $data['news_heading']?></h3>
						<p><?php echo $data['news_content']?></p>

					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

include('footer.php');
?>