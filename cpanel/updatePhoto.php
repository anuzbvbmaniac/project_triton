<?php 
session_start();
if (!isset($_SESSION['user_logged'])){
	header('Location:index.php?loginfirst=yes');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Notice</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css"/>
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
	$query_check = "SELECT * FROM tbl_gallery WHERE image_id='$id'";
	$result = $conn->query( $query_check );
	while($data = $result->fetch_array())
	{
		?>
		<body>
			<div class="container">
				<form lpformnum="1" class="form-control" method="POST" enctype = "multipart/form-data">
					<fieldset>
						<legend>Publish Notice</legend>
						<input type="hidden" name="id" value="<?php echo $data['image_id']?>"/>
						<input type="hidden" name="oldFile" value="<?php echo $data['image_name']?>"/>

						<div class="form-group">
							<label for="exampleInputEmail1">Photo Gallery of(Level)</label>
							<select class="form-control" name="level">
								<option disabled >Select..</option>
								<?php
								$query_check = "SELECT * FROM tbl_level";
								$result = $conn->query( $query_check );
								while($row = $result->fetch_array())
								{
									?>
									<option value="<?php echo $row['level_id']?>" <?php if( $data['image_in']==$row['level_id']) echo 'selected="selected"';?>><?php echo $row['level_name']?></option>
									<?php
								}
								?>
							</select>

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Image Description</label>
							<input type="text" required="required" name="description" class="form-control" id="" aria-describedby="" value="<?php echo $data['description']; ?>" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">

						</div>
						
						<div class="form-group">
							<label for="exampleInputFile">Image</label>
							<input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							<small id="fileHelp" class="form-text text-muted">If you want to update Cover Image for Abou us page, Upload from here.</small>
						</div>

					</fieldset>
					<button type="submit" name="update" class="btn btn-primary">Update</button>
				</fieldset>
			</form>
		</div>
	</body>
	<?php
}
}
?>
</html>
<?php 

if(isset($_POST['update'])){
	
	$description = $_POST['description'];	
	$level = $_POST['level'];	
	$id=$_POST['id'];
	
	if($_FILES['file']['name'] == TRUE){
		$oldFile=$_POST['oldFile'];

		$fname = $_FILES['file']['name'];
		$ext = pathinfo($fname, PATHINFO_EXTENSION);
		$date= date('Y=m-d H:i:s');

		$new_name = md5(uniqid($date,true))."_Triton.".$ext;

		if($ext=='gif'|| $ext =='png' || $ext=='jpg'){

			move_uploaded_file($_FILES['file']['tmp_name'],'gallery/'.$new_name);

			unlink("gallery/".$oldFile);

			$update= "UPDATE tbl_gallery SET description='$description', image_in='$level',  image_name='$new_name' WHERE image_id='$id'";

			$conn->query($update);

			header("location:gallery.php?update=success");
		}else{
			header("location:updatePhoto.php?file=fail");
		}
	}else{
	$update= "UPDATE tbl_gallery SET description='$description', image_in='$level' WHERE image_id='$id'";

			$conn->query($update);
		header("location:gallery.php?update=success");
	}

}
?>