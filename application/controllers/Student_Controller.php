<?php

	class Student_Controller extends CI_Controller{

		public function __construct(){

			parent::__construct();

		}
		public function index(){

			$this->load->view('Add_Student_View');

		}

		public function insert(){

			$data=$this->input->post();
			print_r($data);

		}

	}

?>

