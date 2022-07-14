<?php

// if(!isset($_SERVER['HTTP_REFERER'])){

// 	log_message('error','Direct URL access');
//  die();

// }

class Api extends CI_Controller{

	public function __construct(){

		parent::__construct();

		header("Content-Type: json");
		header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
		header("Access-Control-Max-Age: 3600");

		$this->load->library('form_validation');
		$this->load->model('Student_Model');
		date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

		$this->load->view('header');
		$this->load->view('footer');

	}

	public function index(){

		$request['request_method']=$_SERVER["REQUEST_METHOD"];
		$request['url']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$request['hostname']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_HOST);
		$request['username']=parse_url($_SERVER['REQUEST_URI'], PHP_URL_USER);
		$request['status']=http_response_code();

		return $request;
		
	}

	public function display(){

		$request=$this->index();

		if($request['status']==200 && $request['request_method']=='POST'){

			$result['data']=$this->Student_Model->display();

			if($result){
				
				$query=$this->load->view('Students_Detail_View',$result);

				if($query){ 

					log_message('debug', strip_tags(trim('Data displayed Successfully')));

				}
				else{

					log_message('error', strip_tags(trim('Data cannot be displayed')));
					die;

				}

			}

		}

	}

	public function insert(){

		$request=$this->index();

		if($request['status']==200 && $request['request_method']=='POST'){

			$this->form_validation->set_rules('name','Name','required|min_length[5]|max_length[15]|is_unique[api_data.name]');
			$this->form_validation->set_rules('class','Class','trim|required|min_length[3]|max_length[5]');
			
			if($this->form_validation->run() == TRUE){

				$data=json_encode($this->input->post());
				$query=$this->Student_Model->insert($data);

				if($query){

					log_message('debug', strip_tags(trim('Data Inserted Successfully')));

				}

			}
			else{

				log_message('error', 'Insertion Error - '.strip_tags(trim(validation_errors())));

				$this->load->view('Add_Student_View',validation_errors());

			}
			
		}

	}

}

?>