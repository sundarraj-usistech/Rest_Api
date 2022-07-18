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
			
			if ($this->db->insert("students_detail",$data)) {

				return TRUE;

			}
			else{

				return FALSE;
				
			}

		}

		public function delete($data){		
			
			$query=$this->db->delete('students_detail' , array('id'=>$data));

			if ($query) {

				return TRUE;

			}
			else{

				return FALSE;
				
			}

		}

	}

?>
