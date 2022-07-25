<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Detail</title>
</head>
<body>

	<div class="container mt-5">
			
		<table class="table table-striped">

			<tr>
					
				<th>ID</th>
				<th>Name</th>
				<th>Class</th>
				<th>Action</th>

			</tr>			
				
			<?php foreach($data as $row){ ?>

			<tr>

				<td><?php echo $row->id; ?></td>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->class; ?></td>
				<td><a href="<?php echo base_url(); ?>Student/delete?id=<?php echo $row->id; ?>"><button type="submit" class="btn btn-danger">DELETE</button></a></td>

			</tr>

			<?php	} ?>					

		</table>

	</div><?php exit; ?>

</body>
</html>