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
			
			if ($this->db->insert("students_detail",$data)) {

				return TRUE;

			}
			else{

				return FALSE;
				
			}

		}

		public function delete($data){		

			print_r($data);
			print_r($this->db->get_where('students_detail', array('id' => $data))->result());exit;

			
			print_r($this->db->delete('students_detail', array('id' => $data)));
			exit;

			if ($query) {

				return TRUE;

			}
			else{

				return FALSE;
				
			}

		}

	}

?>
