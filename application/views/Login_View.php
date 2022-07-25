<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

</head>

<body>

	<div class="container mt-5">
		<?php 
		
			if(validation_errors()){ ?>

				<div class="alert alert-danger alert-dismissible fade show" role="alert" id="warning-alert">

  					<strong><?php echo validation_errors(); ?></strong>

  					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

				</div>

	<?php	
			
			}

	 ?>
		
		<div>
			
			<form method="post" action="<?php echo base_url(); ?>Student/login">
	
				<table>
					
					<tr>

						<td><label>Username</label></td>
						<td><input type="text" name="username" class="form-control"></td>

					</tr>

					<tr>

						<td><label>Password</label></td>
						<td><input type="text" name="password" class="form-control"></td>

					</tr>

				</table>

				<span class="login">
					
					<input type="button" value="Login" class="btn btn-primary">

				</span>

			</form>	

		</div>

	</div>

</body>
</html>