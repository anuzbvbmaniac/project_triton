<?php 
include('header.php');
 require_once('../../connection.php');
$query_check = "SELECT * FROM tbl_notice WHERE notice_for=4";
$result = $conn->query( $query_check );
$data = $result->fetch_array();
if (empty($data)){
	?>
	<div class="news-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">  </div>
				<div class="col-lg-6">
					<h3>No New Notice</h3>
					
				</div>
			</div>	
		</div>
	</div>

	<?php
}else{
	$query_check = "SELECT * FROM tbl_notice WHERE notice_for=4";
	$result = $conn->query( $query_check );
	while($data=$result->fetch_array()){
		?>
		<div class="contaier-fluid">
			<div class="news-section">
				<div class="container">
					<div class="row">

						<div class="col-lg-3"> <!-- <a href="#"> <img class="" src="img/header.jpg" alt=""> --> </a> </div>
						<div class="col-lg-9">
							<?php
							if ($data['notice_file']=='File Not Added'){
								?>
								<h3><?php  echo $data['notice'];?> <i> (No file Attached)</i></h3>
								<?php
							}else{
								?>
								<h3><a href="../../cpanel/noticeFiles/<?php echo $data['notice_file']?>"><?php  echo $data['notice'];?></a><i> ( File Attached)</i></h3>
								<?php
							}
							?>

							<p><?php  echo $data['notice_content'];?></p>
							<!-- <a class="btn btn-primary" href="#">Read More..</a> -->
						</div>
					</div>
				</div>
			</div>	
		</div>
		<?php
	}
}

include('footer.php');
 ?>