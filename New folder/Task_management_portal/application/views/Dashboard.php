<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>

	<?php $user_role = $this->session->userdata('user_role'); ?>

	<div class="container mt-5 mb-5">

		<div class="d-flex justify-content-between">
			
			<?php if ($user_role == 1) { ?>
			
				<span>
					
					<a href=" <?php echo base_url(); ?>TaskManagement/addEmployee " class="btn btn-secondary">ADD EMPLOYEE</a>

				</span>

			<?php }
			else{ ?>

				<span>
				
					<a href=" <?php echo base_url(); ?>TaskManagement/addProject " class="btn btn-secondary">ADD PROJECT</a>

				</span>

				<span>
					
					<a href=" <?php echo base_url(); ?>TaskManagement/addTask " class="btn btn-secondary">ADD TASK</a>

				</span>

			<?php } ?>

			<span>
				
				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/searchWithDueDate " class="form-control">
					
					<label>Enter the Due-Date</label>
					<input type="date" name="search_with_due_date" required>
					<button type="submit" name="search" class="btn btn-primary">SEARCH</button>

				</form>

			</span>

			<span>		
				
				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/searchWithKeyword " class="form-control">
					
					<input type="text" name="search_with_keyword" placeholder="Enter the Keyword">

					<button type="submit" name="search" class="btn btn-primary">SEARCH</button>

				</form>

			</span>

			<span>
		
				<a href=" <?php echo base_url(); ?>TaskManagement/logout " class="btn btn-primary float-end">LOGOUT</a>

			</span>


		</div>
		
		
	</div>

	<div class="container dashboard mt-5 mb-5">
		
		<div class="row">
			
			<?php foreach ($task_details as $key) { ?>
			
				<div class="col-md-4 mt-2 mb-2">

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