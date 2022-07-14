<?php

	class Student extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('Student_Model');
			$this->load->view('header');
			$this->load->view('footer');

			date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

		}
		
		public function index(){

			$this->Login_View();

		}

		public function Login_View(){

			$this->load->view('Login_View');

			log_message('debug', 'This Page is used to Login');

		}

		public function display(){

			$api_url=base_url()."Api/display"; 
			$data=$this->Student_Model->display();
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

		public function Add_Student_View(){

			$this->load->view('Add_Student_View');
			
			log_message('debug', 'This Page is used to Insert New Data');

		}

		public function insert(){

			$api_url=base_url()."Api/insert";
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

