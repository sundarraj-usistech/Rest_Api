<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Task</title>
</head>
<body>

	<div>
		
		<form method="post" action=" <?php echo base_url(); ?>TaskManagement/addTaskDetails ">
			
			<section>
				
				<table>
				
					<tr>
						
						<td><label>Project Name</label></td>
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
						
						<td><label>Task Name</label></td>
						<td><input type="text" name="task_name" required></td>

					</tr>
					<tr>
						
						<td><label>Task Description</label></td>
						<td><textarea name="task_description" rows="5" cols="21" required></textarea></td>

					</tr>
					<tr>
						
						<td><label>Task Owner</label></td>
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
						
						<td><label>Task Due Date</label></td>
						<td><input type="date" name="task_due_date" required></td>

					</tr>
					<tr>
						
						<td><label>Task Completed Date</label></td>
						<td><input type="date" name="task_completed_date" required></td>

					</tr>

				</table>


			</section>
			<section>
				
				<h4>Follow Up</h4>

				<table>
					
					<tr>
						
						<td><label>Follow Up Date</label></td>
						<td><input type="date" name="followup_date" required></td>

					</tr>
					<tr>
					
						<td><label>Follow Up Comments</label></td>
						<td><textarea name="followup_comments" rows="5" cols="21" required></textarea></td>

					</tr>
					<tr>
					
						<td><label>Followed Employee</label></td>
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
						
						<td><label>Color of the Task</label></td>
						<td><input type="color" name="task_colour" required></td>

					</tr>

				</table>

			</section>

			<span>
				
				<button type="submit" name="create">CREATE</button>

			</span>
			
		</form>

	</div>

</body>
</html>