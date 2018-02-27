<?php 
session_start();
if (!isset($_SESSION['user_logged'])){
	header('Location:index.php?loginfirst=yes');
}
	include('navigation.php');
?>
	<div class="container">
		<legend> Recent Notices </legend>
		<a class="btn btn-primary" href="dashboard.php">Back</a>
		
		<?php 
		require_once('../connection.php');
		$query_check = "SELECT * FROM tbl_notice";
		$result = $conn->query( $query_check );
		

		?>
		<table class="table table-bordered" >
			<tr class="heading">
				<th>Date</th>
				<th>Notice</th>
				<th colspan="2">Actions</th>
			</tr>

			<?php
			while($data = $result->fetch_array())
			{
				?>
				<tr>
					<td><?php echo  $data['publish_date']; ?></td>
					<td><a href="noticeFiles/<?php echo $data['notice_file'] ?>"><?php echo $data['notice']; ?></a></td>
					
					<!-- <a href="delete.page?" >Delete</a> -->
					<script type="text/javascript">
						function confirmDelete(delUrl) {
							if (confirm("Are you sure you want to delete this Notice ?")) {
								document.location = delUrl;
							}
						}
					</script>
					<td >

						<a class="btn btn-danger" href="javascript:confirmDelete('deleteNotice.php?id=<?php echo $data['notice_id']; ?>')">DELETE</a>
						<a  class="btn btn-success" href="updateNotice.php?id=<?php echo $data['notice_id']; ?>" >UPDATE</a>

					</td>
				</tr>

				<?php }

				?>

			</table>

		</div>
		<?php

		if(isset($_GET['succ']))
		{
			?>
			<script type="text/javascript">

				alert('Notice Published ..!!');
			</script>
			<?php
		}
		if(isset($_GET['file']))
		{
			?>
			<script type="text/javascript">

				alert("Invalid File Format selected..!!!");
			</script>
			<?php
		}
		if(isset($_GET['update']))
		{
			?>
			<script type="text/javascript">

				alert('Notice Upadated ..!!');
			</script>
			<?php
		}
		?>

		<div class="container">
			<form lpformnum="1" class="form-control" method="POST" enctype = "multipart/form-data">
				<fieldset>
					<legend>Publish Notice</legend>

					<div class="form-group">
						<label for="exampleInputEmail1">Notice Title</label>
						<input type="text" required="required" name="title" class="form-control" id="" aria-describedby="" placeholder="Enter Notice" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
						
					</div>

					<div class="form-group">
						<label for="exampleInputFile">File Attached</label>
						<input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
						<small id="fileHelp" class="form-text text-muted">If there is any file attached with notice (i.e.image), Upload from here.</small>
					</div>

				</fieldset>
				<button type="submit" name="publish" class="btn btn-primary">Publish</button>
			</fieldset>
		</form>
	</div>
</body>
</html>
<?php 

if(isset($_POST['publish'])){
	
	$noticeTitle = $_POST['title'];	
	// $date=date('Y-m-d');

	$fname = $_FILES['file']['name'];
	$ext = pathinfo($fname, PATHINFO_EXTENSION);
	$date= date('Y=m-d H:i:s');

	$new_name = md5(uniqid($date,true))."_Trinton.".$ext;

	if($ext=='gif'|| $ext =='png' || $ext=='jpg' || $ext=='pdf' || $ext=='docx' || $ext=='txt' || $ext=='pptx' || $ext=='xlsx'){

		move_uploaded_file($_FILES['file']['tmp_name'],'noticeFiles/'.$new_name);

		$insert= "INSERT INTO tbl_notice (notice_id, notice, publish_date, notice_file) values (NULL, '$noticeTitle', '$date', '$new_name')";

		$conn->query($insert);

		header("location:notice.php?succ=insert");
	}else{
		header("location:notice.php?file=fail");
	}

}
?>