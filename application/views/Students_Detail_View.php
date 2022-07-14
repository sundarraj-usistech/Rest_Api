<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container mt-5">
		
		<table class="table table-striped">
			
			<tr>
					
				<th>ID</th>
				<th>Name</th>
				<th>Class</th>

			</tr>

			<?php foreach($data as $row){ ?>

			<tr>
				
				<td><?php echo $row->id; ?></td>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->class ?></td>

			</tr>

		<?php } ?>

		</table>

	</div>

</body>
</html>