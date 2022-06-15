<?php

	class Student_Model extends CI_Model{

		public function __construct(){

			parent::__construct();

		}

		public function insert($data){			

			$result=json_decode($data);

			if ($this->db->insert("api_data", $result)) {

				return TRUE;

			}
			else{

				return FALSE;
				
			}

		}

	}

?>
