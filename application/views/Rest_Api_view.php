<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<table>

		<!-- <tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>URL</th>		
		</tr> -->	

		<?php //foreach ($data as $row) { ?>
		<!-- <tr>
			
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->title; ?></td>
			<td><?php echo $row->description; ?></td>
			<td><?php echo $row->image_url; ?></td>

		</tr> -->	
			
		<?php	//}
		?>
		<?php
			header("Content-type:json");
			foreach ($data as $row) {
				 
				echo json_encode($row, JSON_PRETTY_PRINT);
				echo "<br>";

			} 
		?>
	</table>


</body>
</html>