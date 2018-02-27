<?php 
session_start();
if (!isset($_SESSION['user_logged'])){
	header('Location:index.php?loginfirst=yes');
}
include('navigation.php');
?>
<div>
	<!-- your code here -->
</div>