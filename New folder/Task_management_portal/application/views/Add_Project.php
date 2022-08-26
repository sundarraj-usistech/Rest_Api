<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Project</title>
</head>
<body>

	<div>
		
		<form method="post" action=" <?php echo base_url(); ?>TaskManagement/addProjectDetails ">
			
			<table>
				
				<tr>
					
					<td><label>Project Name</label></td>
					<td><input type="text" name="project_name" required></td>

				</tr>
				<tr>
					
					<td><label>Project Description</label></td>
					<td><textarea name="project_description" rows="5" cols="21" required></textarea></td>

				</tr>
				<tr>
					
					<td><label>Project Owner</label></td>
					<td><input type="text" name="project_owner" value="<?php echo $this->session->userdata('user_name'); ?>" readonly></td>

				</tr>

			</table>

			<span>
				
				<button type="submit" name="create">CREATE</button>

			</span>

		</form>

	</div>

</body>
</html>