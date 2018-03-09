<?php 
session_start();
require_once('../connection.php');
if(isset($_GET['key'])){
	 $value = md5($_GET['key']);
	$fetchDate = "SELECT * FROM tbl_admin WHERE password='$value'";
	if($result = $conn->query($fetchDate)){	
		$num=$result->num_rows; 
		if($num>0){
			echo "<span class='fa fa-check' style='color:#00A41E;'></span> Password Match";
		}else{
			echo "<span class='fa fa-close' style='color:#FF0004;'></span> Password Doesn't Match";
		}
}else{
		echo $conn->error;	
	}
	}

if (isset($_POST['changePassword'])) {
	$newPassword=md5($_POST['password1']);
	$id=$_SESSION["uid"];
	$query="UPDATE tbl_admin SET password='$newPassword' WHERE id='$id'";
	$conn->query($query);

	header("location:index.php?update=password");
}

 ?>