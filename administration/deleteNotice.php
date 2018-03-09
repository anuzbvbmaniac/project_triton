
<?php

if(isset($_GET['id'])){
	require_once('../connection.php');
	$id = $_GET['id']; 
	$fetch="select * from tbl_notice where notice_id='$id'";
	$result = $conn->query($fetch);
	while($row = $result->fetch_array()){
		unlink("noticeFiles/".$row['notice_file']);
	}

	$delete = "DELETE FROM tbl_notice where notice_id='$id'";
	$conn->query($delete);
	header("location:notice.php?delete=yes");
}

?>