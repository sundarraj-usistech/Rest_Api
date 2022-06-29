<?php

	class Student_Controller extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('Student_Model');

		}
		public function index(){

			$this->display_all();

		}

		public function display_all(){

			$api_url=base_url()."Rest_Api_Controller/display_all";
			$data=$this->Student_Model->display_all();
			$client=curl_init($api_url);
			curl_setopt($client, CURLOPT_POST, true);
			// curl_setopt($client, CURLOPT_POSTFIELDS, $data);
			curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
			$response=curl_exec($client);
			curl_close($client);
			echo $response;
			exit;

		}

		public function insert_View(){

			$this->load->view('Add_Student_View');

		}

		public function insert(){

			$api_url=base_url()."Rest_Api_Controller/insert";
			$data=$this->input->post();
			$client=curl_init($api_url);
			curl_setopt($client, CURLOPT_POST, true);
			curl_setopt($client, CURLOPT_POSTFIELDS, $data);
			curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
			$response=curl_exec($client);
			curl_close($client);
			echo $response;
			exit;

		}

	}

?>

