<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container mt-5" align="center">
		
		<form method="post" action="<?php base_url(); ?>Rest_Api_Controller/insert">
			
			<table>
				
				<tr>
					
					<td><label>Name</label></td>
					<td><input type="text" name="name" class="form-control"></td>

				</tr>
				<tr>
					
					<td><label>Class</label></td>
					<td><input type="text" name="class"></td>

				</tr>

			</table>

			<span align="center">
				
				<input type="submit" value="SUBMIT" class="btn" id="add_student">

			</span>

		</form>	

	</div>

	<script type="text/javascript">

		$(document).ready(function(){

			$(#add_student).click(function(){

				var name = $(#name).val();
				var Class = $(#class).val();

				if((name=="" && Class=="")||(name=="")||(Class=="")){

					alert('Fill all the Fields');

				}
				else{

					jQuery.ajax({

						type:"POST",
						url:"<?php base_url(); ?>Rest_Api_Controller/insert",
						dataType:'html',
						data:{name: name, class: Class},
						success: function(res){

							if (res==1) {

								alert('Data Saved Successfully');

							}
							else{

								alert('Data not Saved');

							}

						},
						error: function(){

							alert('Data not Saved');

						}

					});

				}

			});

		});

	</script>
	
</body>
</html>

