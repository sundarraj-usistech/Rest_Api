<?php

class Rest_Api_controller extends CI_Controller{

	public function __construct(){

		parent::__construct();

		header("Content-Type: json");
		header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
		header("Access-Control-Max-Age: 3600");

		$this->load->library('session');
		$this->load->model('Student_Model');

	}

	public function index(){

		$response['request_method']=$_SERVER["REQUEST_METHOD"];
		$response['url']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		// $response['hostname']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_HOST);
		// $response['username']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_USER);
		$response['status']=http_response_code();

		return $response;
		
	}

	public function insert(){

		$response=$this->index();

		$data=json_encode($this->input->post(), JSON_PRETTY_PRINT);

		if($response['status']==200 && $response['request_method']=='POST'){

			$result=json_decode($data);

		}

		if($this->Student_Model->insert($result)){

			$this->load->view('Add_Student_View');

		}

	}

	public function curl_demo(){

		// From URL to get webpage contents.
		// $url = "https://www.geeksforgeeks.org/";
			$url=base_url();

		// Initialize a CURL session.
		$ch = curl_init();

		// Return Page contents.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		//grab URL and pass it to the variable.
		curl_setopt($ch, CURLOPT_URL, $url);

		$result = curl_exec($ch);

		echo $result;

	}

}

?>