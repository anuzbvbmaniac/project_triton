<?php 
include('dashboard.php');


if(isset($_GET['file']))
{
	?>
	<script type="text/javascript">

		alert("Invalid File Format selected..!!!");
	</script>
	<?php
}
if(isset($_GET['nofile']))
{
	?>
	<script type="text/javascript">

		alert("No any file selected..!!!");
	</script>
	<?php
}
?>
<body>

	<div class="container">
		<form lpformnum="1" class="form-control" method="POST" enctype = "multipart/form-data">
			<fieldset>
				<legend>Change Banner Pic</legend>
				<div class="form-group">
					<label for="exampleInputFile">Banner Photo</label>
					<input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					<small id="fileHelp" class="form-text text-muted">You can change banner photo anytime with any file .</small>
				</div>

			</fieldset>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
		</fieldset>
	</form>
</div>
</body>
<?php 

if(isset($_POST['update'])){
	require_once('../connection.php');
	$query_check = "SELECT * FROM tbl_banner";
	$result = $conn->query( $query_check );
	$data = $result->fetch_array();
	// print_r($data);
	// die();
	
	if($_FILES['file']['name'] == TRUE){
		$oldFile=$data['banner_file'];

		$fname = $_FILES['file']['name'];
		$ext = pathinfo($fname, PATHINFO_EXTENSION);
		$date= date('Y=m-d H:i:s');

		$new_name = md5(uniqid($date,true))."_Trinton.".$ext;

		if($ext=='gif'|| $ext =='png' || $ext=='jpg'){

			move_uploaded_file($_FILES['file']['tmp_name'],'../images/'.$new_name);

			unlink("../images/".$oldFile);

			$insert= "UPDATE tbl_banner SET banner_file='$new_name'";

			$conn->query($insert);

			header("location:../index.php?update=success");
		}else{
			header("location:adBanner.php?file=fail");
		}
	}else{
		header("location:adBanner.php?nofile=true");
	}


}
?>