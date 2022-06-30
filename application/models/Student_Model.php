<?php

	class Student_Model extends CI_Model{

		public function __construct(){

			parent::__construct();

		}

		public function display_all(){

			$this->db->order_by('id','ASC');
			$query=$this->db->get('api_data');
			return $query->result();

		}

		public function insert_api_data($data){

			$result=json_decode($data);print_r($result);exit;
			// $insert_data=array(
			// 	name => $result[name],
			// 	class => $result[class]
			// );
			$this->db->insert($result);

		}

		public function insert($data){			

			if ($this->db->insert("api_data")) {

				return TRUE;

			}
			else{

				return FALSE;
				
			}

		}

	}

?>
