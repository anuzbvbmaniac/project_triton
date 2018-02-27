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
	$query_check = "SELECT * FROM tbl_notice WHERE notice_id='$id'";
	$result = $conn->query( $query_check );
	while($data = $result->fetch_array())
	{
		?>
		<body>
			<div class="container">
				<form lpformnum="1" class="form-control" method="POST" enctype = "multipart/form-data">
					<fieldset>
						<legend>Publish Notice</legend>

						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $data['notice_id']?>"/>
							<input type="hidden" name="oldFile" value="<?php echo $data['notice_file']?>"/>

							<label for="exampleInputEmail1">Notice Title</label>
							<input type="text" required="required" name="title" class="form-control" id="" aria-describedby="" value="<?php echo $data['notice']; ?>" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">

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
	</body>
	<?php
}
}
?>
</html>
<?php 

if(isset($_POST['update'])){
	
	$noticeTitle = $_POST['title'];	
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

			$insert= "UPDATE tbl_notice SET notice='$noticeTitle', notice_file='$new_name' WHERE notice_id='$id'";

			$conn->query($insert);

			header("location:notice.php?update=success");
		}else{
			header("location:updateNotice.php?file=fail");
		}
	}else{
		$insert= "UPDATE tbl_notice SET notice='$noticeTitle' WHERE notice_id='$id'";
		$conn->query($insert);
		header("location:notice.php?update=success");
	}

}
?>