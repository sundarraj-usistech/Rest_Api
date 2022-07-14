<?php

	class Student_Model extends CI_Model{

		public function __construct(){

			parent::__construct();

		}

		public function display(){

			$this->db->order_by('id','ASC');
			$query=$this->db->get('students_detail');
			return $query->result();

		}

		public function insert($data){

			$insert_data=json_decode($data);			
			
			if ($this->db->insert("students_detail",$insert_data)) {

				return TRUE;

			}
			else{

				return FALSE;
				
			}

		}

	}

?>
