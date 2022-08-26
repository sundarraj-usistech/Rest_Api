<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>

	<?php $user_role = $this->session->userdata('user_role'); ?>

	<div class="container">
		
		<?php if ($user_role == 1) { ?>
			
			<span>
				
				<a href=" <?php echo base_url(); ?>TaskManagement/addEmployee " class="btn btn-primary">ADD EMPLOYEE</a>

			</span>

		<?php }
		else{ ?>

			<span>
			
				<a href=" <?php echo base_url(); ?>TaskManagement/addProject " class="btn btn-primary">ADD PROJECT</a>

			</span>

			<span>
				
				<a href=" <?php echo base_url(); ?>TaskManagement/addTask " class="btn btn-primary">ADD TASK</a>

			</span>

		<?php } ?>

		<span>		
			
			<form method="post" action=" <?php echo base_url(); ?>TaskManagement/searchWithKeyword ">
				
				<input type="text" name="search_with_keyword" required>

				<button type="submit" name="search">SEARCH</button>

			</form>

		</span>

		<span>
	
			<a href=" <?php echo base_url(); ?>TaskManagement/logout " class="btn btn-primary">LOGOUT</a>

		</span>

	</div>

	<div class="container">
		
		<div class="row">
			
			<?php foreach ($task_details as $key) { ?>
			
				<div class="col-md-4">

					<div class="card">

						<div class="card-body">
							
							<h5 class="card-title"><?php echo $key->task_name; ?></h5>

							<p class="card-text"><?php echo $key->task_description; ?></p>

						</div>
						
					</div>
					
				</div>

			<?php } ?>	

		</div>

	</div>

</body>
</html>