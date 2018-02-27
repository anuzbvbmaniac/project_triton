
<?php

if(isset($_GET['id'])){
	require_once('../connection.php');
	$id = $_GET['id']; 
	$delete = "DELETE FROM tbl_feedback where feedback_id='$id'";
	$conn->query($delete);
	header("location:feedback.php?delete=yes");
}

?>