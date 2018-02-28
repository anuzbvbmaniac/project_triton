<?php 

include('navigation.php');

?>
<div class="container">
	<div class="aparties">
		<div class="sth">
			<?php

			require_once('../connection.php');
			if(isset($_GET['delete']))
			{
				?>
				<script type="text/javascript">

					alert("Message Deleted successfully..!!");
				</script>
				<?php
			}

			$feedback = "SELECT * FROM tbl_feedback AS f, tbl_level AS l WHERE f.feedback_in=l.level_id";
			$result = $conn->query($feedback);
			?>
		</div>
		<h4> Feedback | Messages </h4>
		<table class="table table-bordered" >
			<tr class="heading">
				<th>S/N</th>
				<th>Feedback In (Level)</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Message</th>
				<th>Date</th>
				<th>Action</th>
			</tr>

			<?php
			$counter = 0;
			while($data = $result->fetch_array())
			{

				?>
				<tr>
					<td><?php echo ++$counter; ?></td>
					<td><?php echo $data['level_name']; ?></td>
					<td><?php echo $data['feedback_by']; ?></td>
					<td><?php echo $data['phone']; ?></td>
					<?php
					if($data['email']=="Email Not Available"){
						?>
						<td><?php echo $data['email']; ?></td>
						<?php
					}else{
						?>
						<td><a href="https://mail.google.com"><?php echo $data['email']; ?></a></td>
						<?php
					}
					?>
					
					<td><?php echo $data['feedback']; ?></td>
					<td><?php echo $data['feedback_date']; ?></td>

					<!-- <a href="delete.page?" >Delete</a> -->
					<script type="text/javascript">
						function confirmDelete(delUrl) {
							if (confirm("Are you sure you want to delete ?")) {
								document.location = delUrl;
							}
						}
					</script>
					<td >

						<a class="btn btn-danger" href="javascript:confirmDelete('deleteFeedback.php?id=<?php echo $data['feedback_id']; ?>')">DELETE</a>

					</td>
				</tr>

				<?php }

				?>

			</table>

		</div>
	</div>

</div>