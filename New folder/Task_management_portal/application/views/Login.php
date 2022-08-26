<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<div>
		
		<form method="post" action=" <?php echo base_url(); ?>TaskManagement/login ">
			
			<table>
				<tr>
					
					<td><label>Username</label></td>
					<td><input type="text" name="username" required></td>

				</tr>
				<tr>
					
					<td><label>Password</label></td>
					<td><input type="password" name="password" required></td>

				</tr>

			</table>

			<span>
				
				<button type="submit" name="login" class="btn btn-primary">LOGIN</button>

			</span>

		</form>

	</div>

</body>
</html>