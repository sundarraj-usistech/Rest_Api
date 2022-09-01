<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Project</title>
</head>
<body>

	<div class="container mt-5 mb-5">

		<div class="card">

			<div class="card-body mt-2">

				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/addProjectDetails " class="form-control">
					
					<table class="table table-borderless d-flex justify-content-center project">
						
						<tr>
							
							<td><label><b>Project Name</b></label></td>
							<td><input type="text" name="project_name" class="input-field" required></td>

						</tr>
						<tr>
							
							<td><label><b>Project Description</b></label></td>
							<td><textarea name="project_description" rows="5" class="input-field" required></textarea></td>

						</tr>
						<tr>
							
							<td><label><b>Project Owner</b></label></td>
							<td><input type="text" name="project_owner" value="<?php echo $this->session->userdata('user_name'); ?>" class="input-field" readonly></td>

						</tr>

					</table>

					<div class="text-center">
						
						<button type="submit" name="create" class="btn btn-primary">ADD</button>

					</div>

				</form>
				
			</div>

		</div>

	</div>

</body>
</html>