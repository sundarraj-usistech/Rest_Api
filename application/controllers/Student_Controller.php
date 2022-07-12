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
			$data=http_build_query($data);
			$client=curl_init($api_url);
			curl_setopt($client, CURLOPT_POST, true);
			curl_setopt($client, CURLOPT_POSTFIELDS, $data);
			curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
			$response=curl_exec($client);
			echo $response;

			$httpcode=curl_getinfo($client, CURLINFO_HTTP_CODE);
			log_message('debug', 'Response Code:'.$httpcode);

			curl_close($client);
			exit;

		}

		public function insert_View(){

			$this->load->view('Add_Student_View');
			
			log_message('debug', 'This Page is used to Insert New Data');

		}

		public function insert(){

			$api_url=base_url()."Rest_Api_Controller/insert";
			$data=$this->input->post();
			$data=http_build_query($data);
			$client=curl_init($api_url);
			curl_setopt($client, CURLOPT_POST, true);
			curl_setopt($client, CURLOPT_POSTFIELDS, $data);
			curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
			$response=curl_exec($client);
			echo $response;

			$httpcode=curl_getinfo($client, CURLINFO_HTTP_CODE);
			log_message('debug', 'Response Code:'.$httpcode);

			curl_close($client);
			exit;

		}

	}

?>

