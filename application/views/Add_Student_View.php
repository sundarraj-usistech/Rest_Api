<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container mt-5" align="center">
		
		<form method="post" action="<?php echo base_url(); ?>Rest_Api_Controller/insert">
			
			<table>
				
				<tr>
					
					<td><label>Name</label></td>
					<td><input type="text" name="name"></td>

				</tr>
				<tr>
					
					<td><label>Class</label></td>
					<td><input type="text" name="class"></td>

				</tr>

			</table>

			<span align="center">
				
				<input type="submit" value="SUBMIT" class="btn" >

			</span>

		</form>	

	</div>
	
</body>
</html>
