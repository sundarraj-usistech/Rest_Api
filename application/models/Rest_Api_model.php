<?php

	class Rest_Api_model extends CI_Model{

		public function __construct(){

			parent::__construct();

		}

		public function fetch_All(){

			$this->db->select('*');
			$this->db->from('student_details');
			$query=$this->db->get();
			return $query->result();

		}

	}

?>
