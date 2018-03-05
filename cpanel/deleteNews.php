
<?php

if(isset($_GET['id'])){
	require_once('../connection.php');
	$id = $_GET['id']; 
	$fetch="select * from tbl_news where news_id='$id'";
	$result = $conn->query($fetch);
	while($row = $result->fetch_array()){
		unlink("newsImage/".$row['featured_image']);
	}

	$delete = "DELETE FROM tbl_news where news_id='$id'";
	$conn->query($delete);
	header("location:news.php?delete=yes");
}

?>