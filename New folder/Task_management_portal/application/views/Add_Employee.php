<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Employee</title>
</head>
<body>

	<div class="container mt-5 mb-5">

		<div class="card">
			
			<div class="card-body">
			
				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/addEmployeeDetails " class="form-control">
					
					<table class="table table-borderless d-flex justify-content-center employee">
						
						<tr>
							
							<td><label><b>Employee Name</b></label></td>
							<td><input type="text" name="employee_name" required></td>

						</tr>
						<tr>
							
							<td><label><b>Personal Email</b></label></td>
							<td><input type="text" name="personal_email" required></td>

						</tr>
						<tr>
							
							<td><label><b>Official Email</b></label></td>
							<td><input type="text" name="official_email" required></td>

						</tr>
						<tr>
							
							<td><label><b>Contact Number</b></label></td>
							<td><input type="text" name="contact_number" required></td>

						</tr>
						<tr>
							
							<td><label><b>Date of Birth</b></label></td>
							<td><input type="date" name="date_of_birth" class="date" required></td>

						</tr>
						<tr>
							
							<td><label><b>Date of Joining</b></label></td>
							<td><input type="date" name="date_of_joining" class="date" required></td>

						</tr>
						<tr>
							
							<td><label><b>Years of Experience</b></label></td>
							<td><input type="text" name="years_of_experience" required></td>

						</tr>
						<tr>
							
							<td><label><b>Address</b></label></td>
							<td><textarea name="address" rows="5" required></textarea></td>

						</tr>
						<tr>
							
							<td><label><b>Current Designation</b></label></td>
							<td>

								<select name="designation" required>
								
									<option></option>
									<option value="Junior Software Dveloper">Junior Software Dveloper</option>
									<option value="Senior Software Dveloper">Senior Software Dveloper</option>
									<option value="HR Manager">HR Manager</option>
								
								</select>

							</td>

						</tr>
						<tr>
							
							<td><label><b>Password</b></label></td>
							<td><input type="text" name="password" required></td>

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