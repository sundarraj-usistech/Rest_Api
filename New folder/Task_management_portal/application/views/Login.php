<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<div class="container mt-5 mb-5">

		<div class="card">

			<div class="card-body mt-3">
				
				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/login " class="form-control">
					
					<table class="table table-borderless d-flex justify-content-center login">

						<tbody>
							
							<tr>
								
								<td><label><b>Username</b></label></td>
								<td><input type="email" name="username" class="input-field" placeholder="name@example.com" required></td>

							</tr>
							<tr>
								
								<td><label><b>Password</b></label></td>
								<td><input type="password" name="password" class="input-field" required></td>

							</tr>

						</tbody>
						
					</table>

					<div class="text-center">
						
						<button type="submit" name="login" class="btn btn-success float-center">LOGIN</button>

					</div>

				</form>

			</div>	

		</div>

	</div>

</body>
</html>