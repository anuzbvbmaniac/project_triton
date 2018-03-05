
<?php 
session_start();
if (!isset($_SESSION['user_logged'])){
	header('Location:index.php?loginfirst=yes');
}
require_once('../connection.php');
include('navigation.php');


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

		alert('Welcome Message Upadated ..!!');
	</script>
	<?php
}
?>

	<div class="container">
		<legend> Welcome Message </legend>
		<a class="btn btn-primary" href="dashboard.php">Back</a>

		<?php 

		$query_check = "SELECT * FROM tbl_wlcmMsg AS m, tbl_level AS l WHERE l.level_id=m.level";
		$result = $conn->query( $query_check );
		?>
		<table class="table table-bordered" >
			<tr class="heading">
				<th>Level</th>
				<th>Welcome Message</th>
				<th>Image</th>
				<th>Action</th>
			</tr>

			<?php
			while($data = $result->fetch_array())
			{
				?>
				<tr>
					<td><?php echo  $data['level_name']; ?></td>
					<td><?php echo $data['msg']; ?></td>
					<td><img src='welcomeMessageImage/<?php echo $data['image']; ?>' width="150px" height="150px" alt="Image Unavailable"/></td>

					<td >
						<a  class="btn btn-success" href="updateWelcomeMsg.php?id=<?php echo $data['msg_id']; ?>" >UPDATE</a>

					</td>
				</tr>
				<?php
			}
			?>
		</table>

	</div>
</body>
</html>