<?php

class Rest_Api_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();

		header("Content-Type: json");
		header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
		header("Access-Control-Max-Age: 3600");

		$this->load->library('form_validation');
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

		$this->form_validation->set_rules('name','Name','required|min_length[5]|max_length[15]|is_unique[api_data.name]');
		$this->form_validation->set_rules('class','Class','trim|required|min_length[3]|max_length[5]');
		
		if($this->form_validation->run() == TRUE){

			$data=json_encode($this->input->post());

			if($response['status']==200 && $response['request_method']=="POST"){

				if($this->Student_Model->insert($data)){

					echo "Success";

				}

			}
			
		}
		else{

			$this->load->view('Add_Student_View');

		}

	}

}

?>