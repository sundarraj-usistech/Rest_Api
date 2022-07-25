<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>
</head>
<body>

	<div class="container mt-5">
	
		<?php 
		
			if(validation_errors()){ ?>

				<div class="alert alert-warning alert-dismissible fade show" role="alert" id="warning-alert">

  					<strong><?php echo validation_errors(); ?></strong>

  					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

				</div>

	<?php	
			
			}

	 ?>

		<form method="post" action="<?= base_url(); ?>Student/insert">
			
			<table>
				
				<tr>
					
					<td><label>Name</label></td>
					<td><input type="text" name="name" class="form-control" value="<?php echo set_value('name') ?>"></td>

				</tr>
				<tr>
					
					<td><label>Class</label></td>
					<td><input type="text" name="class" class="form-control" value="<?php echo set_value('class') ?>"></td>

				</tr>

			</table>

			<span>
		
				<input type="submit" class="btn btn-success" value="ADD">

			</span>

		</form>	

	</div>

	<!-- <script src="<?php // echo base_url(); ?>assets/js/jQuery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		
		setTimeout(function() {

		    $('#warning-alert').alert('çlose');
		    },1000);

	</script> -->
	
</body>
</html>

