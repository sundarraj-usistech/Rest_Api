<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Employee</title>
</head>
<body>

	<div>
		
		<form method="post" action=" <?php echo base_url(); ?>TaskManagement/addEmployeeDetails ">
			
			<table>
				
				<tr>
					
					<td><label>Employee Name</label></td>
					<td><input type="text" name="employee_name" required></td>

				</tr>
				<tr>
					
					<td><label>Personal Email</label></td>
					<td><input type="text" name="personal_email" required></td>

				</tr>
				<tr>
					
					<td><label>Official Email</label></td>
					<td><input type="text" name="official_email" required></td>

				</tr>
				<tr>
					
					<td><label>Contact Number</label></td>
					<td><input type="text" name="contact_number" required></td>

				</tr>
				<tr>
					
					<td><label>Date of Birth</label></td>
					<td><input type="date" name="date_of_birth" required></td>

				</tr>
				<tr>
					
					<td><label>Date of Joining</label></td>
					<td><input type="date" name="date_of_joining" required></td>

				</tr>
				<tr>
					
					<td><label>Years of Experience</label></td>
					<td><input type="text" name="years_of_experience" required></td>

				</tr>
				<tr>
					
					<td><label>Address</label></td>
					<td><textarea name="address" rows="5" cols="23" required></textarea></td>

				</tr>
				<tr>
					
					<td><label>Current Designation</label></td>
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
					
					<td><label>Password</label></td>
					<td><input type="text" name="password" required></td>

				</tr>

			</table>

			<span>
				
				<button type="submit" name="create">CREATE</button>

			</span>

		</form>

	</div>

</body>
</html>