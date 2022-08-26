<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Task</title>
</head>
<body>

	<div class="container mt-5 mb-5">

		<div class="card">

			<div class="card-body">
			
				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/addTaskDetails " class="form-control">

				
					<table class="table table-borderless d-flex justify-content-center task">

						<tr>
							
							<td><label><b>Project Name</b></label></td>
							<td>

								<select name="project_name" required>

									<option></option>
								
									<?php foreach ($project_name as $key ) { ?>	

											<option value="<?php echo $key->project_name; ?>"><?php echo $key->project_name; ?></option>

									<?php } ?>
									
								</select>

							</td>

						</tr>
						<tr>
							
							<td><label><b>Task Name</b></label></td>
							<td><input type="text" name="task_name" required></td>

						</tr>
						<tr>
							
							<td><label><b>Task Description</b></label></td>
							<td><textarea name="task_description" rows="5" cols="21" required></textarea></td>

						</tr>
						<tr>
							
							<td><label><b>Task Owner</b></label></td>
							<td>

								<select name="task_owner" required>
								
									<option></option>

									<?php foreach ($employee_name as $key ) { ?>
										
										<option value="<?php echo $key->employee_name; ?>"><?php echo $key->employee_name; ?></option>

									<?php } ?>
																
								</select>

							</td>

						</tr>
						<tr>
							
							<td><label><b>Task Due Date</b></label></td>
							<td><input type="date" name="task_due_date" class="date" required></td>

						</tr>
						<tr>
							
							<td><label><b>Task Completed Date</b></label></td>
							<td><input type="date" name="task_completed_date" class="date" required></td>

						</tr>

					</table>

			</div>

		</div>
		<div class="text-center mt-3 mb-3">
			
			<h5>Follow Up</h5>

		</div>
		<div class="card">

			<div class="card-body">

				<table class="table table-borderless d-flex justify-content-center form-control task">

					<tr>
						
						<td><label><b>Follow Up Date</b></label></td>
						<td><input type="date" name="followup_date" class="date" required></td>

					</tr>
					<tr>
					
						<td><label><b>Follow Up Comments</b></label></td>
						<td><textarea name="followup_comments" rows="5" cols="21" required></textarea></td>

					</tr>
					<tr>
					
						<td><label><b>Followed Employee</b></label></td>
						<td>

							<select name="followed_employee" required>
							
								<option></option>
						
								<?php foreach ($employee_name as $key ) { ?>
									
									<option value="<?php echo $key->employee_name; ?>"><?php echo $key->employee_name; ?></option>

								<?php } ?>
							
							</select>

						</td>

					</tr>
					<tr>
						
						<td><label><b>Color of the Task</b></label></td>
						<td><input type="color" name="task_colour" required></td>

					</tr>

				</table>

				<div class="text-center">
					
					<button type="submit" name="create" class="btn btn-primary">CREATE</button>

				</div>	

			</div>
			
		</div>

			</form>

	</div>

</body>
</html>