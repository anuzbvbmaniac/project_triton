<?php

if(isset($_GET['id'])){
	require_once('../connection.php');
	$id = $_GET['id']; 
	$fetch="select * from tbl_gallery where image_id='$id'";
	$result = $conn->query($fetch);
	while($row = $result->fetch_array()){
		unlink("gallery/".$row['image_name']);
	}

	$delete = "DELETE FROM tbl_gallery where image_id='$id'";
	$conn->query($delete);
	header("location:gallery.php?delete=yes");
}

?>