<?php

			header("Content-Type: application/json; charset=UTF-8");
			header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
			header("Access-Control-Max-Age: 3600");
			
			$requestMethod = $_SERVER["REQUEST_METHOD"];

			foreach ($data as $row) {
				 
				echo json_encode($row, JSON_PRETTY_PRINT);
				

			} 

?>
	