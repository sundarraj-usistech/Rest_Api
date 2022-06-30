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
		$response['hostname']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_HOST);
		$response['username']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_USER);
		$response['status']=http_response_code();

		return $response;
		
	}

	public function insert_View(){

		$this->load->view('Add_Student_View');

	}

	public function insert(){

		$response=$this->index();

		if($response['status']==200 && $response['request_method']=="POST"){

			$this->form_validation->set_rules('name','Name','required|min_length[5]|max_length[15]|is_unique[api_data.name]');
			$this->form_validation->set_rules('class','Class','trim|required|min_length[3]|max_length[5]');
			
			if($this->form_validation->run() == TRUE){

				$data=json_encode($this->input->post());
				print_r($data);exit;
				$this->Student_Model->insert_api_data($data);

			}
			
		}

	}
// 	public function display_all(){

// 		$result['data']=$this->Student_Model->display_all();

// 		if($result){
			
// 			$this->load->view('Student_View',$result);

// 		}

// 	}
}
?>